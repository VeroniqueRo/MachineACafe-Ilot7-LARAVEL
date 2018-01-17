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
                        <th>Type</th>
                        <th>Informations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($RetourTab as $typeVente => $donneeVente)
                    <tr>
                        <td>{{ $typeVente }}</td>
                        <td>{{ $donneeVente }}</td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
    </div>

@endsection
