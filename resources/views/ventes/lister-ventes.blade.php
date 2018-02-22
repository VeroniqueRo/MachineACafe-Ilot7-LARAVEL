@extends('template.template')

@section('image')
    {{--  <a href="ventes"><img class="imageCompte" alt="image de comptes"  src="../img/faire-ses-comptes.jpg" /></a>  --}}
@endsection

@section('titre')
    Liste des Ventes
@endsection

@section('content')
    <style>
        #tableauVente{
            margin:10px auto;
            width:100%;
            min-width:400px;
            max-width:700px;
        }
        #tableauVente table{
            margin:0px;
            width:100%;
        }
    </style>
    <div class = "container">
        <div class="container table-responsive tableauVente">
            <table class="table table-hover table-bordered text-center">
                <tr class="active">
                    <td>Numéro de vente</br><a href="{{ route('triUP-V')}}"><button type="button" class="btn btn-light">UP</button></a>
                        <a href="{{ route('triDOWN-V')}}"><button type="button" class="btn btn-light">DOWN</button></a></td>
                    <td>Nom de la boisson</td>
                    <td>Nombre de sucres</br><a href="{{ route('triSucreCroissant-V')}}"><button type="button" class="btn btn-light">UP</button></a>
                        <a href="{{ route('triSucreDecroissant-V')}}"><button type="button" class="btn btn-light">DOWN</button></a></td></td>  
                    <td>Prix</td>
                    <td>Date de la vente</br><a href="{{ route('triDateCroissant-V')}}"><button type="button" class="btn btn-light">UP</button></a>
                        <a href="{{ route('triDateDecroissant-V')}}"><button type="button" class="btn btn-light">DOWN</button></a></td>
                </tr>
                @foreach($ventes as $vente)
               
                    <td>{{$vente->id}}</td>
                    <td>@if($vente->boisson !== null) {{$vente->boisson->nom}}@endif</td>
                    <td>{{$vente->nbSucres}}</td>
                    <td>@if($vente->boisson !== null) {{$vente->boisson->prix}} cts @else boisson obsolète @endif</td>
                    <td>{{$vente->created_at}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>    
@endsection
