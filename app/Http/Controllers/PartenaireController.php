<?php

namespace App\Http\Controllers;

use App\Partenaire;
use Illuminate\Http\Request;

class PartenaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data['partenaires']=Partenaire::all();
        return  view('backend.partenaire.liste',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('backend.partenaire.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'link' => 'required'
        ]);

        $link = $request['link'];

        $partenaire= new Partenaire();
        $partenaire->link = $link;

        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/partenaire/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $partenaire->image=$slider_image;
                $partenaire->save();
            }
        }
        return redirect()->route('partenaire.liste')->with(['message' => 'Nouveau partenaire ajouté avec succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire)
    {
        //
    }
}
