<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>TCPC éditions</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>
    <body class="">
        <div class="container">
            <header class="mt-3 pt-4">
                <div class="row">
                    <div class="col-md-3 col-6">
                        <h1><strong>TCPC</strong></h1>
                    </div>
                    <div class="col-md-3 col-6">
                        <h4 class="text-right text-md-center">éditions</h4>
                    </div>
                    <div class="col-md-3 d-none d-md-block">
                        <h4 class="text-center"><em>bientôt</em></h4>
                    </div>
                    <div class="col-md-3 d-none d-md-block">
                        <h4 class="text-right"><a href="mailto:contact@tcpc.fr">contact</a></h4>
                    </div>
                </div>
            </header>
            
            @yield('body')
            
            <footer class="d-md-none">
                <div class="row">
                    <div class="col-6">
                        <h4><em>bientôt</em></h4>
                    </div>
                    <div class="col-6">
                        <h4 class="text-right"><a href="mailto:contact@tcpc.fr">contact</a></h4>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>