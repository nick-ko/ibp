<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dash(){
        $this->AdminAuthCheck();
        return view('backend.dash');
    }

    public function signin(){
        return view('backend.login');
    }

    public function login(Request $request){

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $email=$request->email;
        $password=md5($request->password);

        $result=DB::table('admins')
            ->where('email',$email)
            ->where('password',$password)
            ->first();

        if ($result) {
            Session::put('admin_name', $result->name);
            Session::put('admin_id', $result->id);
            return Redirect::to('/dashboard')->with('message','Bienvenue sur votre espace administration');
        }else{
            return Redirect::to('/login')->with('message','Mot de passe ou email incorrect');
        }
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect('/login')->with('message','Vous vous etez deconnectez');
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
