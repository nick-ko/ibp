<?php

namespace App\Http\Controllers;

use App\Actualite;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ActualiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->AdminAuthCheck();
        $actualites=DB::table('actualites')->get();
        return view('backend.actualite',compact('actualites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->AdminAuthCheck();
        return view('backend.add-actualite');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title=$request->title;
        $description=$request->description;

        $actualite = new Actualite();
        $actualite->title = $title;
        $actualite->description = $description;
        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/actualite/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $actualite->image=$slider_image;
                $actualite->save();
            }
        }

        return redirect()->route('dash.actualite')->with(['message' => 'Nouvelle actualité crée avec succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function show($id)
    {

        $data['actualite']=DB::table('actualites')
            ->where('id',$id)
            ->first();
        $data['socials']=Social::all();
        $data['others']=DB::table('actualites')
            ->where('id','!=',$id)
            ->get();
        $data['menu']="actualite";

        return view('frontend.details-actualite',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['actualite'] = Actualite::find($id);
        return view('backend.edit-actualite',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actualite $actualite)
    {
        $title=$request->title;
        $description=$request->description;

        $actualite = Actualite::find($request->id);
        $actualite->title = $title;
        $actualite->description = $description;
        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/actualite/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $actualite->image=$slider_image;
            }
        }
        $actualite->update();
        return redirect()->route('dash.actualite')->with(['message' => 'Actualité modifiée avec succes']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actualite  $actualite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Actualite::destroy($id)){
            return redirect()->route('dash.actualite')->with(['message' => 'Actualité supprimé avec succes']);
        }else{
            return back()->with(['danger' => 'Erreur dans la suppression']);
        }
    }
    public function AdminAuthCheck(){
        $admin_id=Session::get('admin_id');
        if ($admin_id) {
            return;
        }else {
            return Redirect::to('/login')->send();
        }
    }
}
