<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>TCPC éditions / Venezia</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
</head>
<body class="h-100">
    <div id="app" class="container h-100">
        <div class="h-100 d-flex align-items-center justify-content-center ">
            <div class="position-relative">
                <video playsinline width="100%" preload="auto" style="opacity: 0">
                    <source src="https://80ans.s3.eu-west-3.amazonaws.com/TCPC/saluta-3.mp4" type="video/mp4">
                </video>
                <template v-if="loading">
                    <div class="loading">chargement...</div>
                </template>
                <div class="play" role="button" tabindex="0" @click="handlePlayClicked"></div>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/main.js', 'assets/build') }}"></script>
</body>
</html>
