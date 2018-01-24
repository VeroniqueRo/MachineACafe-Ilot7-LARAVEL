@extends('template.template')
@section('titre')
La liste des ingredients
@endsection

@section('content')
  
<div class = "container">
  <div class="tableauIngredients ">
    <table class = "table table-hover">
      <tr>
        <td><b>Nom Ingrédients</b></td>
        <td><b>Quantité</b></td>
      </tr>
      <tr>
      @foreach ($ingredients as $typeIngredient=>$quantite)
        <td> {{$typeIngredient}} </td>
        <td> {{$quantite}} </td>
  	  </tr>
      @endforeach
    </table>
  </div>
</div>

@include('template.boutonAddRemoveModif');

@endsection
