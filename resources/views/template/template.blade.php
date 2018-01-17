<!doctype html>
    <html lang="{{ app()->getLocale() }}">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            {{--  <meta name="description" content="">
            <meta name="author" content="">
            <link rel="icon" href="../../../../favicon.ico">  --}}
        
            <title>Machine à Café Ilot 7</title>
        
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            {{--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">      --}}
            <!-- Custom styles for this template -->
            <link rel="stylesheet" href="{{('css/app.css')}}">
            <link href="cover.css" rel="stylesheet">
        </head>
    
        <body>
    
        <div class="site-wrapper">
    
            <div class="site-wrapper-inner">
    
            <div class="cover-container">
    
                <header class="masthead clearfix">
                <div class="inner">
                    
                    @include('template.menu')
                    
                </div>
                </header>
    
                <main role="main" class="inner cover">
                
                </main>
    
                <footer class="mastfoot">
               
                </footer>
    
            </div>
    
            </div>
    
        </div>
    
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
        <script src="../../../../assets/js/vendor/popper.min.js"></script>
        <script src="../../../../dist/js/bootstrap.min.js"></script>
        </body>
    </html>