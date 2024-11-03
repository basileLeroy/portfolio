<div class="menu">
    <div id="mobile">
        <div class="container">
            <button id="burger" class="open-main-nav">
                <span class="burger"></span>
                <span class="burger-text">Menu</span>
            </button>
            <nav class="main-nav mobile-main-nav" id="main-nav">
                <ul>
                    <li>
                        <x-nav-link 
                        :href="route('about')" 
                        :active="request()->routeIs('about')"
                        >About me</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link 
                        :href="route('projects')" 
                        :active="request()->routeIs('projects')"
                        >Showcase</x-nav-link>
                    </li>
                    <li>
                        <x-nav-link 
                        :href="route('contact')" 
                        :active="request()->routeIs('contact')"
                        >Contact me</x-nav-link>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <div id="desktop">
        <nav class="desktop-main-nav">
            <ul>
                <li>
                    <x-nav-link 
                    :href="route('about')" 
                    :active="request()->routeIs('about')"
                    >About me</x-nav-link>
                </li>
                <li>
                    <x-nav-link 
                    :href="route('projects')" 
                    :active="request()->routeIs('projects')"
                    >Showcase</x-nav-link>
                </li>
                <li>
                    <x-nav-link 
                    :href="route('contact')" 
                    :active="request()->routeIs('contact')"
                    >Contact me</x-nav-link>
                </li>
            </ul>
        </nav>
    </div>

</div>