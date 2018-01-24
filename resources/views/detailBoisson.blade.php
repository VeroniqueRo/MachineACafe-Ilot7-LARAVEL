@extends('template.template')
      
@section('titre')
  Détail boisson 
 
<div class = "container">
<div class="tableauDetailBoisson ">
  <table class = "table table-hover">
  
      <tr> @foreach ($detail as $detailBoisson)
          <td><b>Nom boisson : {{$detailBoisson->NomBoisson}}</b></td>
          <td><b>Prix : {{$detailBoisson->Prix}} cts</b></td>
      </tr>
      @endforeach

</table>
</div>
 @include('template.boutonAddRemoveModif');
</div>
@endsection
