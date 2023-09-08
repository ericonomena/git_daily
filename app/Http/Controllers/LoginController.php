<?php

namespace App\Http\Controllers;
use App\Models\Users;
use App\Models\Util;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller{

    public function home(Request $req, $error=''){
        $user = Users::find(session('id'));
        if($user == null) return view('/login',['error'=>$error]);
        if($user->idprofile == 1) return view('user.home');
        if($user->idprofile == 2) return view('user.home');
    }

    public function connect(Request $req){
        $email =request('email');
        $mdp = request('password');
        $id = Users::login($email,$mdp);
        if($id==-1){
            // print_r($id);
            return view('login',['error'=>'Incorrect login or password']);
        }
        $req->session()->put('id',$id);
        return redirect('/');
    }

    public function disconnect(Request $req){
        $req->session()->forget('id');
        return redirect('/');
    }
}
