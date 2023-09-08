<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class V_leaderprojects extends Model
{
    protected $table = 'v_leaderprojects';
    protected $fillable = [
        'iduser',
        'identification',
        'name',
        'firstname',
        'email',
        'photo',
        'idprofile',
        'user_status',
        'idleaderprojects',
        'leader_status'
    ];
    public $timestamps = false;
    use HasFactory;


    public static function insertLeaderProject($idUser, $status) {
        // Requête SQL avec des marqueurs de position
        $sql = "INSERT INTO LeaderProjects(idUser, status) VALUES (?, ?)";
    
        // Exécution de la requête avec les valeurs correspondantes
        DB::insert($sql, [$idUser, $status]);
    }
}
