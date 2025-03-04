<header>
    <a href="/" id="logo" class="desktop" aria-label="Go to Home - Basile Leroy">
        <video autoplay muted playsinline width="175" height="auto" preload="auto">
            <source src="{{ asset('storage/logo-animation.webm') }}" type="video/webm">
            Your browser does not support the video tag.
        </video>
    </a>

    <a href="/" id="logo" class="mobile" aria-label="Go to Home - Basile Leroy">
        <img 
            loading="lazy"
            decoding="async"
            src="{{ asset('storage/logo.png') }}" alt="Logo of basileleroy.com">
    </a>
    
    <x-nav />
</header>