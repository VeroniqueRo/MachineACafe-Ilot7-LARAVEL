<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class machineACafeController extends Controller
{


  function listDrink()
  {
       // $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];
      // return view('machineACafe', compact('drinkChoice'));

    $drinkChoice = DB::select('select nomBoisson, codeBoisson from boisson');
      return view('machineACafe', ['boissons' => $drinkChoice]);
  }

  function showDrink($code)
  {
    $drink = DB::select('select nomBoisson, prix from boisson where codeBoisson = ?',[$code]);
    return view('boisson.affichageBoisson',['detailBoisson' => $drink]);
  }
}
?>
