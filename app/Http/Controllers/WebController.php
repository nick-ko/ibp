<?php

namespace App\Http\Controllers;

use App\Projet;
use App\Slider;
use App\Social;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class WebController extends Controller
{
    //slider
    public function sliders(){
        $this->AdminAuthCheck();
        $sliders=DB::table('sliders')
            ->get();
       return view('backend.sliders',compact('sliders'));
    }

    public function delete_slider($id)
    {
        DB::table('sliders')
            ->where('id', $id)
            ->delete();
        return redirect()->route('sliders')->with(['message' => 'Slider supprimer avec succes']);
    }

    public function add_slider(){
        return view('backend.add-slider');
    }

    public function save_slider(Request $request){
        $this->validate($request, [
            'description' => 'required'
        ]);

        $description = $request['description'];

        $slider= new Slider();
        $slider->description=$description;

        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/sliders/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $slider->image=$slider_image;
                $slider->save();
            }
        }
        return redirect()->route('sliders')->with(['message' => 'Slider ajouté avec succes']);

    }

    //contact
    public function contact(){
        $this->AdminAuthCheck();
        $data=DB::table('contacts')->first();
        return view('backend.contact',compact('data'));
    }

    //projet
    public function projet(){
        $this->AdminAuthCheck();
        $projects=DB::table('projets')
            ->get();
        return view('backend.projet',compact('projects'));
    }

    public function add_projet(){
        $this->AdminAuthCheck();
        return view('backend.add-projet');
    }

    public function details_projet($id){
        $data['projects']=DB::table('projets')
            ->where('id',$id)
            ->first();
        $data['others']=DB::table('projets')
            ->where('id','!=',$id)
            ->get();
        $data['socials']=Social::all();
        $data['menu']="projet";
        return view('frontend.details-projet',$data);
    }

    public function editSlider($id){
       $data['slider']=Slider::find($id);
       return view('backend.edit-slider',$data);
    }

    public function updateSlider(Request $request){
        $this->validate($request, [
            'description' => 'required'
        ]);

        $description = $request['description'];

        $slider= Slider::find($request->id);
        $slider->description=$description;

        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/sliders/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $slider->image=$slider_image;
            }
        }
        $slider->update();
        return redirect()->route('sliders')->with(['message' => 'Slider modifié avec succes']);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store_projet(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
        ]);

        $title = $request['title'];
        $category = $request['category'];
        $content = $request->contenu;

        $dom = new domdocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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


        $content = $dom->saveHTML();

        $projet= new Projet();
        $projet->title=$title;
        $projet->categorie=$category;
        $projet->content=$content;

        $image = $request->file('image');

        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/projets/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $projet->image=$slider_image;
                $projet->save();
            }
        }
        return redirect()->route('dash.projet')->with(['message' => 'Nouveau projet ajouté avec succes']);
    }

    //participants au sondage

    public function participants(){
        $this->AdminAuthCheck();
        $participants=DB::table('participants')
            ->get();
        return view('backend.participants',compact('participants'));
    }

    public function editProjet($id){
        $this->AdminAuthCheck();
        $data['projet']=Projet::findorFail($id);
        return view('backend.edit-projet',$data);
    }

    public function deleteProjet($id){
        if (Projet::destroy($id)){
            return redirect()->route('dash.projet')->with(['message' => 'projet supprimé avec succes']);
        }else{
            return back()->with(['danger' => 'Erreur dans la suppression']);
        }
    }

    public function updateProjet(Request $request){
        $this->validate($request, [
            'title' => 'required',
            'category' => 'required',
        ]);

        $title = $request['title'];
        $category = $request['category'];
        $content = $request->contenu;

        $dom = new domdocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
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


        $content = $dom->saveHTML();

        $projet= Projet::find($request['id']);
        $projet->title=$title;
        $projet->categorie=$category;
        $projet->content=$content;
        $image = $request->file('image');
        if ($image)
        {
            $filename = $image->getClientOriginalName();
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $filename ;
            $upload_path = 'images/projets/';
            $slider_image = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);

            if ($success) {
                $projet->image=$slider_image;
            }
        }
        $projet->update();
        return redirect()->route('dash.projet')->with(['message' => 'Projet Modifié avec succes']);
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
