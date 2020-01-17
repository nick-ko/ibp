<?php

namespace App\Http\Controllers;

use App\Projet;
use App\Service;
use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home(){
        $data['menu']='acceuil';
        $data['articles']=DB::table('blogs')
            ->where('status','=',1)
            ->take(4)
            ->get();
        $data['sliders']=DB::table('sliders')
            ->orderByDesc('id')
            ->get();
        $data['services']=Service::take(6)->orderBy('id','desc')->get();
        $data['socials']=Social::all();
        $data['projects']=DB::table('projets')
            ->orderByDesc('id')->take(12)->get();
        return view('frontend.home',$data);
    }

    public function contact(){
        $data['menu']='contact';
        $data['socials']=Social::all();
        $data['data']=DB::table('contacts')->first();
        return view('frontend.contact',$data);
    }

    public function about(){
        $data['menu']='a-propos';
        $data['socials']=Social::all();
        $data['data']=DB::table('abouts')->first();
        return view('frontend.about',$data);
    }

    public function actualite(){
        $data['menu']='actualite';
        $data['socials']=Social::all();
        $data['actualites']=DB::table('actualites')->get();
        return view('frontend.actualite',$data);
    }

    public function carriere(){
        $data['menu']='carriere';
        $data['socials']=Social::all();
        return view('frontend.carriere',$data);
    }

    public function projet(){
        $data['projects']=Projet::all();
        $data['socials']=Social::all();
        $data['menu']='projet';
        return view('frontend.projet',$data);
    }

    public function offre(){
        $data['menu']='offre';
        $data['socials']=Social::all();
        $data['offres']=DB::table('offres')->where('statut','=',0)->get();
        return view('frontend.offres',$data);
    }

    public function faq(){
        $data['menu']='faq';
        $data['socials']=Social::all();
       return view('frontend.faq',$data);
    }

}
