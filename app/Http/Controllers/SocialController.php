<?php

namespace App\Http\Controllers;

use App\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $this->AdminAuthCheck();
        $data['socials']=Social::all();
        return view('backend.social.liste',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $this->AdminAuthCheck();
        return view('backend.social.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
            'logo' => 'required'
        ]);

        $name = $request['name'];
        $logo = $request['logo'];
        $link = $request['link'];

        $social= new Social();
        $social->name=$name;
        $social->logo=$logo;
        $social->link=$link;

        if ($social->save()){
            return redirect()->route('social.liste')->with(['message' => 'Nouveau reseau social ajouté avec succes']);
        }else{
            return back()->with(['danger' => 'Erreur dans le formulaire']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $data['social']=Social::find($id);
        return view('backend.social.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $this->validate($request, [
            'name' => 'required',
            'link' => 'required',
            'logo' => 'required'
        ]);

        $name = $request['name'];
        $logo = $request['logo'];
        $link = $request['link'];

        $social= Social::find($request['id']);
        $social->name=$name;
        $social->logo=$logo;
        $social->link=$link;

        if ($social->update()){
            return redirect()->route('social.liste')->with(['message' => 'reseau social modifié avec succes']);
        }else{
            return back()->with(['danger' => 'Erreur dans le formulaire']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Social  $social
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (Social::destroy($id)){
            return redirect()->route('social.liste')->with(['message' => 'reseau social supprimé avec succes']);
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
