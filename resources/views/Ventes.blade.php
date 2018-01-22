@extends('template.template')
@section('titre')
        Liste des Ventes
@endsection
@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    @foreach ($RetourTab as $typeVente => $donneeVente)
                    <th>{{ $typeVente}}</th>
                    @endforeach  
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($RetourTab as $typeVente => $donneeVente)
                    <td>{{ $donneeVente }}</td>
                    @endforeach
                </tr> 
            </tbody>
        </table>
    </div>
@endsection
