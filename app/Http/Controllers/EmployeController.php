<?php

namespace App\Http\Controllers;

use App\Models\employe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeController extends Controller
{
    
    public function report(Request $request,)
    {
        $employes=DB::table('employes');
       
        $employes=$employes
        ->select()
        ->leftjoin('departements','employes.departement_id','departements.id')
        
        ->leftjoin('devices','devices.id','employes.device_id')
        ->leftjoin('tabletimes','tabletimes.employe_id','employes.id')
        ->leftjoin('shifttimes','shifttime_id','shifttimes.id')
       ->leftJoin('timerecords','timerecords.employe_id','employes.id')
        ->get();


       foreach ($employes as $employe) {
            DB::table('newtables')->insert([
                'nom_employe' => $employe->nom,
                'nom_departement' => $employe->nomDept,
                'gender' => $employe->gender,
                'date debut de thavaille' =>$employe->date_travail,
                'device' => $employe->nomDevice,
                'shifttime' => $employe->name,
                'check-In' => $employe->time_in,
                'check-out' => $employe->time_out,
                'duration' => $employe->durration,
                'date jour' => $employe->created_at,

                // Insérez d'autres colonnes de jointure ici
            ]);
        }
       
        return view('report',['employes'=>$employes]);
       
    }
}
