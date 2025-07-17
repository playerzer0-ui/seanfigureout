<x-header :title="$title" />

<main>
    <h2 id="serverTime">{{ $serverTime }}</h2>
    <!-- From Uiverse.io by andrew-demchenk0 --> 
    <div class="wrapper">
        <div class="card-switch">
            <label class="switch">
               <input type="checkbox" class="toggle">
               <span class="slider"></span>
               <span class="card-side"></span>
               <div class="flip-card__inner">
                    <div class="flip-card__front">
                        <div class="title">Log in</div>
                        <form class="flip-card__form" action="{{ route('signOrLogin') }}" method="post">
                            @csrf
                            <input type="hidden" name="mode" value="login">
                            <input class="flip-card__input" name="email" placeholder="Email" type="email">
                            <input class="flip-card__input" name="password" placeholder="Password" type="password">
                            <button class="flip-card__btn">Let`s go!</button>
                        </form>
                    </div>
                    <div class="flip-card__back">
                        <div class="title">Sign up</div>
                        <form class="flip-card__form" action="{{ route('signOrLogin') }}" method="post">
                            @csrf
                            <input type="hidden" name="mode" value="signup">
                            <input class="flip-card__input" name="username" placeholder="Name" type="name">
                            <input class="flip-card__input" name="email" placeholder="Email" type="email">
                            <input class="flip-card__input" name="password" placeholder="Password" type="password">
                            <button class="flip-card__btn">Confirm!</button>
                        </form>
                    </div>
               </div>
            </label>
        </div>   
    </div>
</main>

<script>
    // Parse initial server time
    let serverTime = new Date("{{ now()->toDateTimeString() }}");
    
    function updateTime() {
        // Add 1 second and update display
        serverTime = new Date(serverTime.getTime() + 1000);
        document.getElementById('serverTime').textContent = 
            serverTime.toLocaleTimeString('en-US', { hour12: false });
    }
    
    // Update every second
    setInterval(updateTime, 1000);
</script>
<x-footer />