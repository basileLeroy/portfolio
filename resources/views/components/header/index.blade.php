<header>
    <a href="/" id="logo" class="desktop">
        <video autoplay muted playsinline width="175">
            <source src="{{ asset('storage/logo-animation.webm') }}" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </a>

    <a href="/" id="logo" class="mobile">
        <img src="{{ asset('storage/logo.png') }}" alt="">
    </a>
    
    <x-nav />
</header>