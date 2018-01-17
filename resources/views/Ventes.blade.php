<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Liste de Ventes</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Liste des Ventes
                </div>

                {{--  <div class="links">
                  <a href="index">Home</a>
                  <a href="selectDrink">Selection des boissons</a>
                  <a href="recettes">Liste des Recettes</a>
                  <a href="ingredients">Liste des Ingrédients</a>
                  <a href="ventes">Liste des Ventes</a>
                </div>  --}}
               
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
            </div>
        </div>
    </body>
</html>
