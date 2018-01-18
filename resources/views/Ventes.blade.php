@extends('template.template')
@include('template.menu')

    <div class="content">
        <div class="title m-b-md">
        Liste des Ventes
        </div>
    </div>
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
