@extends('template.template')

@section('titre')
La liste des ingredients
</div>
</div>
<div class = "container">
    <div class="tableauIngredients ">
        <table class = "table table-hover table-bordered">
            <tr class="active">  
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
@include('template.boutonAddRemoveModif')
</div>
@endsection

