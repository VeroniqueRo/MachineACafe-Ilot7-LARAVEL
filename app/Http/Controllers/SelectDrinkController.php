<?php

namespace App\Http\Controllers;

class SelectDrinkController extends Controller
{
function listDrink() {
    $drinkChoice =['Café au lait' => 70, 'Thé' => 50, 'Expresso' => 60, 'Café long' => 70];



     //['Café au lait','Thé','Expresso','Café long'];
    //$drinkprice = [70,50,60,70];
     return view('selectDrink', compact('drinkChoice'));
 }
}
?>
