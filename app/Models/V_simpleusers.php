<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class V_simpleusers extends Model
{
    protected $table = 'v_simpleusers';
    protected $fillable = [
        'iduser',
        'identification',
        'name',
        'firstname',
        'email',
        'photo',
        'idprofile',
        'status',
    ];
    public $timestamps = false;
    use HasFactory;

}
