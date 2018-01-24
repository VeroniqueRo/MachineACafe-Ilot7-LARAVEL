<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class machineACafeController extends Controller
{

function listDrink() {

    // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];

     // return view('machineACafe', compact('drinkChoice'));

	$drinkChoice = DB::select('select NomBoisson,CodeBoisson from boisson');
    return view('machineACafe',['drinkChoice'=>$drinkChoice]);

    
 }

 function detailboisson($CodeBoisson) {

	$listeboisson = DB::select('select NomBoisson,prix from boisson where CodeBoisson=?', [$CodeBoisson] );
    return view('/detailboisson',['liste'=>$listeboisson]);

    
 }
}
?>
