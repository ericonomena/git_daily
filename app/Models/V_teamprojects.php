<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class V_teamprojects extends Model
{
    protected $table = 'v_teamprojects';
    protected $fillable = [
        'id',
        'iduser',
        'identification',
        'name',
        'firstname',
        'email',
        'photo',
        'idprofile',
        'status',
        'idproject',
    ];
    public $timestamps = false;
    use HasFactory;

}
