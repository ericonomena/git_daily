<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Profiles extends Model{
    protected $table = 'profiles';
    protected $fillable = [
        'id',
        'name',
    ];
    public $timestamps = false;
    use HasFactory;
}
