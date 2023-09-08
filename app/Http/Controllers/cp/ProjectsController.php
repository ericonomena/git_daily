<?php

namespace App\Http\Controllers\cp;
use App\Models\Projects;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;

class ProjectsController extends Controller{
    const PERPAGE = 5;

    public function setPage(){
        session()->put('page','projectList');
    }

    public function projectsList(){
        $projects = Projects::simplePaginate(self::PERPAGE);
        return view('cp.projectList',['projects'=>$projects]);
    }

    public function projectsInsert(){
        try {
            $projects = new Projects();
            $projects->name = request('name');
            $projects->idleaderproject = 1;
            $projects->date = request('date');
            $projects->descriptions = request('descriptions');
            $projects->save();
            return redirect('/projectNew');
        } catch (\Throwable $th) {
            return view('cp.projectNew',['error'=>$th->getMessage()]);
        }
    }


    public function search(Request $request){
        $query = Projects::query();
        $searchTerm = $request->input('namesearch'); // Champ unique pour la recherche multicritère
        $startdate = $request->input('startdate'); // Champ unique pour la recherche multicritère
        $finishdate = $request->input('finishdate'); // Champ unique pour la recherche multicritère
        
        // Divisez le champ de recherche en critères individuels (par exemple, en utilisant des virgules comme séparateurs)
        $searchCriteria = explode(' ', $searchTerm);
        foreach ($searchCriteria as $criteria) {
            $criteria = trim($criteria); // Supprimez les espaces blancs autour des critères
            if ($criteria) {
                // Ajoutez une condition de recherche pour chaque critère
                $query->orWhere('name', 'ilike', '%' . $criteria . '%');
                // Vous pouvez ajouter d'autres colonnes à rechercher ici
            } 
            if (($startdate!= null || $finishdate != null)) {
                if ($startdate != null && $finishdate != null) {
                    $query->whereBetween('date', [$startdate, $finishdate]);
                }
                if ($startdate != null && $finishdate == null) {
					$query->whereDate('date', '>=', $startdate);
				}
                if ($startdate == null && $finishdate != null) {
					$query->whereDate('date', '<=', $finishdate);
				}
            }
        }
        // Exécutez la requête
        $results = $query->get();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $results = $query->simplePaginate(self::PERPAGE);
        return view('cp.projectList', ['projects'=>$results]);
    }

    public function deleteProject()
    {
        $idProjet = request('iddelete');
        Projects::destroy($idProjet);
        return redirect('/projectList');
    }


}



