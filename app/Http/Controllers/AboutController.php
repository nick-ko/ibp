<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DOMDocument;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $data=DB::table('abouts')->first();
        return view('backend.about',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sect_entreprise=$request->sect_entreprise;
        $sect_mission=$request->sect_mission;
        $sect_objectif=$request->sect_objectif;

        $dom = new domdocument();
        $dom1 = new domdocument();
        $dom2 = new domdocument();
        $dom->loadHtml($sect_entreprise, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $dom1->loadHtml($sect_mission, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $dom2->loadHtml($sect_objectif, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $images = $dom->getElementsByTagName('img');

        //loop over img elements, decode their base64 src and save them to public folder,
        //and then replace base64 src with stored image URL.
        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);

            $data = base64_decode($data);
            $image_name= time().$k.'.png';
            $path = public_path() .'/'. $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $sect_entreprise = $dom->saveHTML();
        $sect_mission = $dom1->saveHTML();
        $sect_objectif = $dom2->saveHTML();

        $about = About::find(4);
        $about->sect_entreprise = $sect_entreprise;
        $about->sect_mission = $sect_mission;
        $about->sect_objectif = $sect_objectif;
        $about->save();

        return redirect()->route('dash.about')->with(['message' => 'Contenu de la page a propos modifié avec succes']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
