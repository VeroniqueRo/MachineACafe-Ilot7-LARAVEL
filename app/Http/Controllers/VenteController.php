<?php

namespace App\Http\Controllers;

class VenteController extends Controller{
/**Affiche toutes les ventes passées */

 public function listeVente() {

    $venteTab = [
      "N°" => "1",
      "Boisson commandée" => "Café",  
      "Date" => "2018/01/04",
      "Heure" => "08:17:57",
      "Nb de sucres" => "0",
      "Somme insérée" => "0",
      "Somme rendue" => "0"
    ];
    
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

