@extends('template.template')

@section('image')
    <a href="Ventes"><img class="imageCompte" alt="image de comptes"  src="../img/faire-ses-comptes.jpg" />
@endsection

@section('titre')
    Liste des Ventes
@endsection



@section('content')
    <div class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    @foreach ($RetourTab[0] as $titre => $valeur)
                        <th>{{ $titre}}</th>
                    @endforeach
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($RetourTab as $typeVente => $donneeVente)
                    <tr>
                        @foreach ($donneeVente as $valeur)
                            <td>{{ $valeur }}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="boutons">
            {{--  <button type="button" class="btn btn-success disabled">Ajouter</button>  --}}
            <button type="button" class="btn btn-default">Gérer les ventes</button>
            {{--  <button type="button" class="btn btn-danger disabled">Annuler</button>  --}}
        </div>
    </div>
@endsection
