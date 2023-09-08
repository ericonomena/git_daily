<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model{
    protected $table = 'users';
    protected $fillable = [
        'id',
        'identification',
        'name',
        'firstname',
        'email',
        'password',
        'photo',
        'idprofile',
        'status',
    ];
    public $timestamps = false;
    use HasFactory;

    public static function login($email,$password){
        // $tab=Users::fromQuery("SELECT * FROM users WHERE email=? AND password=md5(?) LIMIT 1", [$email, $password]);
        $tab=Users::fromQuery("SELECT * FROM users WHERE email=? AND password=? LIMIT 1", [$email, $password]);
        if(count($tab)==0){
            return -1;
        }
        return $tab[0]['id'];
    }

    

}
