@extends('template.template')

@section('titre')
La liste des ingredients !
</div>
</div>
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
  <button type='button' class='btn btn-success'>Ajouter</button>
  <button type='button' class='btn btn-default'>Modifier</button>
  <button type='button' class='btn btn-danger'>Supprimer</button>
</div>
@endsection

