<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Teamprojects extends Model
{
    protected $table = 'teamprojects';
    protected $fillable = [
        'id',
        'idproject', 
        'iduser', 
        'status',
    ];
    public $timestamps = false;
    use HasFactory;

}
