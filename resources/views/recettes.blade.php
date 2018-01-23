@extends('template.template')
@include('template.menu')
<div class="content">
	<div class="title m-b-md">
		La liste des recettes !
	</div>
</div>
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


