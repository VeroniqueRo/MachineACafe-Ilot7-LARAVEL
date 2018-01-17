<?php

namespace App\Http\Controllers;

class RecetteController extends Controller{
  function list() {
  	$toto="salut";
  return view('recettes',['message' => $toto]);
 }
}
?>