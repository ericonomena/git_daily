<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Projects extends Model{
    protected $table = 'projects';
    protected $fillable = [
        'id',
        'name',
        'idleaderproject',
        'date',
        'descriptions',
        'status'
    ];
    public $timestamps = false;
    use HasFactory;
}
