<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sea n Figure Out</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&family=VT323&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/skies.css">
    </head>
    <body>
        <main class="game-container">
            <div class="sky">
                <div class="night" id="nightOverlay"></div>
                <div class="orbit">
                    <div class="sun"></div>
                    <div class="moon"></div>
                </div>
            </div>
            <div id="serverTime"></div>
            <div class="ocean"></div>
        </main>

        <script>
            //window.serverTime = "17:40:00";
            window.serverTime = "{{ now()->format('h:i:s') }}";
        </script>
        <script src="js/skies.js" async defer></script>
    </body>
</html>