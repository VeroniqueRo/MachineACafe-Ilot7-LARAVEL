<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class machineACafeController extends Controller
{
function listDrink() {
    // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];

    $drinkChoice = DB::select('select NomBoisson, CodeBoisson  from boisson');

     return view('machineACafe', ['toto'=>$drinkChoice]);

 }
 function showDrink($CodeBoisson){
 	$boisson = DB::select('select NomBoisson, Prix from boisson where CodeBoisson = ?', [$CodeBoisson]);
 		return view('/detailBoisson', ['detail'=>$boisson]);
 }
}
?>
