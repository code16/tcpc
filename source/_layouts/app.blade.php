<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>
            TCPC éditions
            @hasSection('title')
                / @yield('title')
            @endif
        </title>
        <link rel="stylesheet" href="{{ mix('css/app.css', 'assets/build') }}">
    </head>
    <body>
        @yield('body')

        <script src="{{ mix('js/app.js', 'assets/build') }}"></script>
        @stack('script')
        <script>
            Alpine.start();
        </script>
    </body>
</html>
