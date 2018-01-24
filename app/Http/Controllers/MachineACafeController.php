<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class machineACafeController extends Controller
{
    function listDrink() {
        // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
        $drinkChoice = DB::select('select nomboisson, codeboisson  from boisson');

        return view('machineACafe', ['drinks' => $drinkChoice]);

    }

    function showDrink ($code) {
     
        $drink = DB::select("select nomboisson, prixboisson from boisson where codeboisson = ?", [$code]);
        return view('boisson.drinkDetails', ['details' => $drink]);
        
    }
}

?>
