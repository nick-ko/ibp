<?php

namespace App\Http\Controllers;

use App\cv;
use App\offre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offres=DB::table('offres')
            ->get();
        return view('backend.offre',compact('offres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.add-offre');
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
            'poste' => 'required',
            'description' => 'required',
            'type' => 'required'
        ]);

        $poste = $request['poste'];
        $type = $request['type'];
        $description = $request['description'];

        $offre = new offre();
        $offre->poste=$poste;
        $offre->type=$type;
        $offre->description=$description;
        $offre->save();

        return redirect()->route('dash.offre')->with(['message' => 'Nouvelle offre ajouté avec succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function show(Request $request)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\offre  $offre
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['offre']=offre::find($id);
        return view('backend.edit-offre',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\offre $offre
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, offre $offre)
    {
        $this->validate($request, [
            'poste' => 'required',
            'description' => 'required',
            'type' => 'required'
        ]);

        $poste = $request['poste'];
        $type = $request['type'];
        $description = $request['description'];

        $offre = offre::find($request['id']);
        $offre->poste=$poste;
        $offre->type=$type;
        $offre->description=$description;
        $offre->update();

        return redirect()->route('dash.offre')->with(['message' => 'Offre modifié avec succes']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\offre  $offre
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('offres')
            ->where('id', $id)
            ->delete();
        cv::where('offre',$id)->delete();

        return redirect()->route('dash.offre')->with(['message' => 'Offre supprimé avec succes']);
    }

    public function cv(){
        $cvs=DB::table('cvs')->get();
        return view('backend.postulants',compact('cvs'));
    }

    public function store_cv(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'cv' => 'required',
        ]);

        $name = $request['name'];
        $offre = $request['offre'];


        $cv= new cv();
        $cv->nom=$name;
        $cv->offre=$offre;


        $cv_file = $request->file('cv');

        if ($cv_file)
        {
            $filename = $cv_file->getClientOriginalName();
            $ext = strtolower($cv_file->getClientOriginalExtension());
            $image_full_name = $name.'.'.$ext;
            $upload_path = 'cv/';
            $post_cv = $upload_path . $image_full_name;
            $success = $cv_file->move($upload_path, $image_full_name);

            if ($success) {
                $cv->cv=$post_cv;
                $cv->save();
            }
        }
        return redirect()->route('offre')->with(['message' => 'Votre Cv a été envoyé avec succes']);
    }

    public function deletePostulant($id){
        if (cv::destroy($id)){
            return redirect()->route('cv')->with(['message' => 'Postulant supprimé avec succes']);
        }else{
            return back()->with(['danger' => 'Erreur dans la suppression']);
        }
    }
}
