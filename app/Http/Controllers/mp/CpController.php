<?php

namespace App\Http\Controllers\mp;
use App\Models\Util;
use App\Models\V_simpleusers;
use App\Models\V_leaderprojects;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;


class CpController extends Controller{
    const PERPAGE = 5;

    public function setPage(){
        session()->put('page','leaderProjectNew');
    }

    public function simpleUserList(){
        $simpleUsers = V_simpleusers::simplePaginate(self::PERPAGE);
        // $this->setPage();
        return view('mp.LeaderProjectNew',['simpleUsers'=>$simpleUsers]);
    }

    public function leaderProjectList(){
        $leaderprojects = V_leaderprojects::simplePaginate(self::PERPAGE);
        // $this->setPage();
        return view('mp.LeaderProjectList',['leaderprojects'=>$leaderprojects]);
    }

    public function search(Request $request){
        $query = V_leaderprojects::query();
        $searchTerm = $request->input('search_term'); // Champ unique pour la recherche multicritère
        // Divisez le champ de recherche en critères individuels (par exemple, en utilisant des virgules comme séparateurs)
        $searchCriteria = explode(' ', $searchTerm);
        foreach ($searchCriteria as $criteria) {
            $criteria = trim($criteria); // Supprimez les espaces blancs autour des critères
            if ($criteria) {
                // Ajoutez une condition de recherche pour chaque critère
                $query->orWhere('name', 'ilike', '%' . $criteria . '%')
                    ->orWhere('firstname', 'ilike', '%' . $criteria . '%')
                    ->orWhere('email', 'ilike', '%' . $criteria . '%');
                // Vous pouvez ajouter d'autres colonnes à rechercher ici
            }
        }
        // Exécutez la requête
        $results = $query->get();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $results = $query->simplePaginate(self::PERPAGE);
        return view('mp.LeaderProjectList', ['leaderprojects'=>$results]);
    }


    public function searchSimpleUser(Request $request){
        $query = V_simpleusers::query();
        $searchTerm = $request->input('search_term'); // Champ unique pour la recherche multicritère
        // Divisez le champ de recherche en critères individuels (par exemple, en utilisant des virgules comme séparateurs)
        $searchCriteria = explode(' ', $searchTerm);
        foreach ($searchCriteria as $criteria) {
            $criteria = trim($criteria); // Supprimez les espaces blancs autour des critères
            if ($criteria) {
                // Ajoutez une condition de recherche pour chaque critère
                $query->orWhere('name', 'ilike', '%' . $criteria . '%')
                    ->orWhere('firstname', 'ilike', '%' . $criteria . '%')
                    ->orWhere('email', 'ilike', '%' . $criteria . '%');
                // Vous pouvez ajouter d'autres colonnes à rechercher ici
            }
        }
        // Exécutez la requête
        $results = $query->get();
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $results = $query->simplePaginate(self::PERPAGE);
        return view('mp.LeaderProjectNew', ['simpleUsers'=>$results]);
    }


    public function leaderProjectInsert(){
       
            $idUsers = request('idvalidate');
            $array = explode(",", $idUsers);
            $status = 0;
            // Parcourez le tableau résultant et affichez chaque élément
            foreach ($array as $element) {
                V_leaderprojects::insertLeaderProject($element, $status);
            }
            return redirect('/LeaderProjectNew');
       
    }

}
