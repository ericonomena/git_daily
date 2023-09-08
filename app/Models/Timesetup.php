<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Timesetup extends Model{
    protected $table = 'timesetup';
    protected $fillable = [
        'id',
        'number',
    ];
    public $timestamps = false;
    use HasFactory;
}
