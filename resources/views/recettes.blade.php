@extends('template.template')
@section('titre')
  La liste des recettes !
@endsection
@section('content')
<div class = "container">
	<div class="tableauRecette ">
		<table class = "table table-hover">	
			<tr>
				<td><b>NomBoisson</b></td> 
				<td><b>Ingrédients</b></td>
				<td><b>Quantités</b></td>
				<td><b>Ingrédients</b></td>
				<td><b>Quantités</b></td>
				<td><b>Ingrédients</b></td>
				<td><b>Quantités</b></td>
			</tr>
		</tr>
					@foreach($recette as $nomboisson=>$rec)
					<td>{{ $nomboisson }}</td>

					@foreach($rec as $ingredient=>$quantite)

					<td>{{$ingredient}}</td>
					<td>  {{$quantite}}</td>
					@endforeach
				</tr>
					@endforeach
		</table>
	</div> 
	<button type="button" class='btn btn-success'>Ajouter</button>
	<button type="button" class='btn btn-default'>Modifier</button>
	<button type="button" class='btn btn-danger'>Supprimer</button>
@endsection





