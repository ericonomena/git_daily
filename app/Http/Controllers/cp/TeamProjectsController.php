<?php

namespace App\Http\Controllers\cp;

use App\Models\Projects;
use App\Models\V_simpleusers;
use App\Models\Users;
use App\Models\V_teamprojects;
use App\Models\Teamprojects;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class TeamProjectsController extends Controller{
    const PERPAGE = 5;


    public function teamProjectsList(){
        $projects = Projects::simplePaginate(self::PERPAGE);
        // Créez un tableau pour stocker des collections
        $listeDeCollections = [];
        foreach ($projects as $project) {
            $collection = new Collection();
            $teamprojects = V_teamprojects::where('idproject', ($project->id))->get();
            // Ajoutez des objets à la collection avec des clés
            $collection->put('project', $project);
            $collection->put('teamprojects', $teamprojects);
            // Ajoutez la collection à la liste de collections
            $listeDeCollections[] = $collection;
        }
        // Vous pouvez maintenant accéder à la collection par son index dans le tableau
        $collectionRecuperee = $listeDeCollections; // Accéder à la première collection
        return view('cp.teamProjectList',['collectionRecuperee'=>$collectionRecuperee,'projects'=>$projects]);
    }

    public function teamProjectListNew(){
        $id = $_GET['id'];
        $simpleUsers = $this->usersNotInProject($id)->simplePaginate(self::PERPAGE);
        $project = Projects::find($id);
        $teamprojects = V_teamprojects::where('idproject', $id)->simplePaginate(self::PERPAGE);
        return view('cp.teamProjectListNew',['simpleUsers'=>$simpleUsers, 'project'=> $project, 'teamprojects'=>$teamprojects]);
    }

    // Relation pour obtenir les utilisateurs qui ne sont pas dans le projet idproject = '4'
    public  function usersNotInProject($projectId)
    {
        return Users::whereNotExists(function ($query) use ($projectId) {
            $query->selectRaw(1)
                  ->from('v_teamprojects')
                  ->whereColumn('v_teamprojects.iduser', 'users.id')
                  ->where('v_teamprojects.idproject', $projectId);
        });
    }

    public function teamProjectInsertOne(){
        try {
            $id = $_GET['id'];
            $idproject = $_GET['idproject'];
            $teamprojects = new Teamprojects();
            $teamprojects->idproject = $idproject;
            $teamprojects->iduser = $id;
            $teamprojects->status = 0;
            $teamprojects->save();
            return redirect('/TeamProjectListNew?id='.$idproject);
        } catch (\Throwable $th) {
            
        }
    }

    public function teamProjectDeleteOne()
    {
        $idteamproject = $_GET['id'];
        $idproject = $_GET['idproject'];
        TeamProjects::destroy($idteamproject);
        return redirect('/TeamProjectListNew?id='.$idproject);
    }

}