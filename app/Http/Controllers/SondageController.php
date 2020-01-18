<?php

namespace App\Http\Controllers;

use App\Participants;
use App\Social;
use App\Sondage;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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

        $data['questions']=DB::table('sondages')->get();
        $data['socials']=Social::all();
        $data['menu']="sondage";
        return view('frontend.sondage',$data);
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

        $socials=Social::all();
        $menu='sondage';

        return view('frontend.result')
            ->with('question',$question)
            ->with('chart',$chart)
            ->with('menu',$menu)
            ->with('socials',$socials)
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
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['sondage'] = Sondage::find($id);
        return view('backend.edit-sondage',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Sondage $sondage
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Sondage $sondage)
    {
        $this->validate($request, [
            'question' => 'required'
        ]);

        $question = $request['question'];
        $sondage= Sondage::find($request['id']);
        $sondage->question=$question;
        $sondage->update();
        return redirect()->route('dash.sondage')->with(['message' => 'Sondage modifié avec succes']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sondage  $sondage
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function result()
    {
        $data['socials']=Social::all();
        return view('frontend.result',$data);
    }

    public function destroy($id){
        if (Sondage::destroy($id)){
             Participants::where('question',$id)->delete();
            return redirect()->route('dash.sondage')->with(['message' => 'Sondage supprimé avec succes']);
        }else{
            return back()->with(['danger' => 'Erreur dans la suppression']);
        }
    }

    public function deleteParticipant($id){
        if (Participants::destroy($id)){
            return redirect()->route('participants')->with(['message' => 'Participant supprimé avec succes']);
        }else{
            return back()->with(['danger' => 'Erreur dans la suppression']);
        }
    }
}
