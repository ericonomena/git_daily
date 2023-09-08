<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class Util extends Model
{
    use HasFactory;
    public static function crypt(string $str){
        $tab=DB::select("select md5('".$str."') as test");
        return $tab[0]->test;
    }

    public static function nombreHeures($debut, $fin) {
        if($debut==null || $fin==null) return 1;
        $debut = Carbon::parse($debut);
        $fin = Carbon::parse($fin);

        $diffInMinutes = $fin->diffInMinutes($debut);

        return ceil($diffInMinutes/60.0);
    }

    public static function nombreJours($debut, $fin){
        if($debut==null || $fin==null) return 1;
        $debut = Carbon::parse($debut);
        $fin = Carbon::parse($fin);

        $diffInMinutes = $fin->diffInMinutes($debut);

        return ceil($diffInMinutes/1440.0);
    }
}
