<?php

namespace App\Http\Controllers;

use App\Models\Profiles;
use App\Models\Users;
use App\Models\Util;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller{
    // public function setPage(){
    //     session()->put('page','spectacle');
    // }

    public function registerPage($error=''){
        $profiles = Profiles::all();
        return view('register',[
            'profiles'=>$profiles,
            'error'=>$error,
        ]);
    }

    public function userInsert(){
        try {
            $users = new Users();
            $users->name = request('name');
            $users->firstname = request('firstname');
            $users->email = request('email');
            $users->password = request('password');
            $users->idprofile = request('idprofile');
            $users->save();
            return redirect('/register');
        } catch (\Throwable $th) {
            return view('register',['error'=>$th->getMessage()]);
        }
    }

}
