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
        <link rel="stylesheet" href="css/island.css">
        <link rel="stylesheet" href="css/ui.css">
        <link rel="shortcut icon" href="images/ui/favicon-16x16.png" type="image/x-icon">
    </head>
    <body>
        <main class="game-container">
            <div class="storage"></div>
            <div class="map">
                <button onclick="toggleMap()">return</button>
                @foreach ($regions as $region)
                    <div class="dropdown">
                        <button class="dropbtn">{{ $region["regionName"] }}</button>
                        <div class="dropdown-content">
                            @foreach ($islands as $island)
                                @if ($region['regionID'] == $island['regionID'])
                                    <button value="{{ $island['islandID'] }}">{{ $island["islandName"] }}</button>                                
                                @endif
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
            <aside class="menu-wrapper">
                <div class="menu">
                    <button class="option" onclick="toggleMap()">
                        <img src="images/ui/map-outline.svg" alt="">
                        <p>map</p>
                    </button>
                    <button class="option">
                        <img src="images/ui/cube-outline.svg" alt="">
                        <p>storage</p>
                    </button>
                    <a href="{{ route('logout') }}" class="option">
                        <img src="images/ui/log-out-outline.svg" alt="">
                        <p>logout</p>
                    </a>
                </div>
                <button class="toggle" onclick="toggleMenu()">
                    <img src="images/ui/chevron-back-outline.svg" alt="">
                </button>
            </aside>

            <div class="sky">
                <div class="night" id="nightOverlay"></div>
                <div class="orbit">
                    <div class="sun"></div>
                    <div class="moon"></div>
                </div>
            </div>
            <div id="serverTime"></div>
            <div class="ocean-back"></div> <!-- Behind the boat -->
            <div class="boat-container">
                <div class="boat">
                    <img src="images/boats/boat.png" alt="">
                </div>
            </div>
            <div class="ocean-front"></div> <!-- In front of the boat -->
            <div class="island-row">
                    {{-- <div class="island">
                        <img src="{{ asset('images/islands/islands-grass-short.png') }}" alt="Island" class="island-base">
                        <img src="{{ asset('images/buildings/buildings-marketplace.png') }}" alt="Lighthouse" class="building">
                    </div> --}}
            </div>
        </main>

        <script>
            //window.serverTime = "17:40:00";
            window.serverTime = "{{ now()->format('h:i:s') }}";
        </script>
        <script src="js/skies.js" async defer></script>
        <script src="js/game.js" async defer></script>
    </body>
</html>