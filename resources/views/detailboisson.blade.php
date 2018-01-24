@extends('template.template')
      
@section('titre')
  Propriétés 
   <p> Nom Boisson :   {{$liste[0]->NomBoisson}} </p>
   <p> Prix : {{$liste[0]->prix}} </p>
@endsection

@section('content')
 
       
          
    