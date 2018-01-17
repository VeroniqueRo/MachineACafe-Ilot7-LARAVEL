<?php

namespace App\Http\Controllers;

class VenteController extends Controller{
/**Affiche toutes les ventes passées */

 public function listeVente() {

    $venteTab = array(
        "codevente" => "1",
        "datevente" => "2018-01-04",
        "heurevente" => "08:17:57",
        "nbsucres" => "0",
        "boisson_codeboisson" => "caf"
    );
    
    return view("ventes",["RetourTab" => $venteTab]);
  }

//   public function listeVente() {

//     $boissonsTab = array(
//         "Café Long" => array(
//         "Café" => 2,
//         "Eau"  => 2
//       ),
//         "Expresso" => array(
//         "Café" => 1,
//         "Eau"  => 1
//       ),
//         "Thé" => array(
//         "Thé" => 1,
//         "Eau" => 1
//       ),
//         "Café au Lait" => array(
//         "Café" => 1,
//         "Lait" => 1,
//         "Eau"  => 2
//       ),
//     );

//     return view('ventes',compact('boissonsTab'));
//   }
}
?>

