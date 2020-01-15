<?php

namespace App\Http\Controllers;

use App\Participants;
use App\Sondage;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SondageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions=DB::table('sondages')->get();
        return view('backend.sondage',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.add-sondage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'question' => 'required'
        ]);

        $question = $request['question'];
        $sondage= new Sondage();
        $sondage->question=$question;
        $sondage->save();
        return redirect()->route('dash.sondage')->with(['message' => 'Sondage ajouté avec succes']);

    }
    public function sondage(){

        $questions=DB::table('sondages')->get();
        return view('frontend.sondage',compact('questions'));
    }

    public function do_sondage(Request $request){

        $this->validate($request, [
            'email' => 'required'
        ]);

        $question = $request['question'];
        $email = $request['email'];
        $answer=$request['answer'];

        $test_email=DB::table('participants')
            ->join('sondages','participants.question','=','sondages.id')
            ->select()
            ->where('participants.email',$email)->where('sondages.id',$question)->first();
        if ($answer == 'pour'){
            if ($test_email==null){
                $pour=DB::table('sondages')->where('id',$question)->first();
                $pour=($pour->pour)+1;

                DB::table('sondages')
                    ->where('id',$question)
                    ->update(['pour'=> $pour ]);
            }else{
                return redirect()->route('sondage')->with(['message' => 'désolé vous avez deja participer a ce sondage,merci']);
            }

        }else{
            if ($test_email==null){
                $contre=DB::table('sondages')->where('id',$question)->first();;
                $contre=($contre->contre)+1;

                DB::table('sondages')
                    ->where('id',$question)
                    ->update(['contre'=> $contre ]);
            }else{
                return redirect()->route('sondage')->with(['message' => 'désolé vous avez deja participer a ce sondage,merci']);
            }
        }
        $participant=new Participants();
        $participant->email=$email;
        $participant->answer=$answer;
        $participant->question=$question;
        $participant->save();

        $total=DB::table('sondages')
            ->where('id',$question)
            ->value(DB::raw("SUM(pour + contre)"));

        $pourcentage=DB::table('sondages')->where('id',$question)->first();
        $pourcentage_pour=((($pourcentage->pour) * 100)/$total);
        $pourcentage_contre=((($pourcentage->contre) * 100)/$total);


        $chart=Charts::create('donut', 'highcharts')
            ->title('Resultat du sondage au quel vous avez participer')
            ->labels(['Pour', 'Contre'])
            ->values([$pourcentage_pour,$pourcentage_contre])
            ->dimensions(1000,500)
            ->responsive(false);

        return view('frontend.result')
            ->with('question',$question)
            ->with('chart',$chart)
            ->with(['message' => "Merci d'avoir participer a notre sondage"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function show(Sondage $sondage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function edit(Sondage $sondage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sondage $sondage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Http\Response
     */
    public function result()
    {
        return view('frontend.result');
    }
}
