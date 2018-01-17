<?php

namespace App\Http\Controllers;

class SelectDrinkController extends Controller
{
function listDrink() {
    $drinkChoice = ['Café au lait','Thé','Expresso','Café long'];
     return view('selectDrink', compact('drinkChoice'));
 }
}
?>
