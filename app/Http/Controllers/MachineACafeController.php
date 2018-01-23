<?php

namespace App\Http\Controllers;

class machineACafeController extends Controller
{
function listDrink() {
    $drinkChoice =['Café au lait' => 60, 'Thé' => 70, 'Expresso' => 40, 'Café long' => 50];

     return view('machineACafe', compact('drinkChoice'));

 }
}
?>
