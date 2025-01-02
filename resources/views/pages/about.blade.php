
@vite(['resources/js/animations/text-animations.js'])

<x-guest-layout>
    <section class="hero">
        <h1 class="hero">
            <span id="first-name">BASILE</span><span id="last-name">LEROY</span>
        </h1>
        <div class="my-picture">
            <img src="{{ asset('storage/profile.png') }}" title="Photo of Basile Leroy" alt="A picture of Basile Leroy sitting down with a colorfull background">
        </div>


    </section>
    <section class="banner">
        <h1><span class="focus-big">PHP</span>/<span class="focus-big">Web</span>developer</h1>
        <div>
            <article class="about-me">
                <h2>Hey there! I am</h2>
                <p class="name">Basile Leroy from Belgium</p>
                <p class="quote">I am a backend developer and have been doing full stack projects too. Primarily I focus on <span class="focus-normal">PHP</span>/<span class="focus-normal">Laravel</span>. My career started as a self-taught developer but I ended up joining a training program to increase my skills and knowledge.</p>
                <p class="quote">Next, I was able to work on a few projects. But soon, I got invited to be a <span class="focus-normal">coach</span>/<span class="focus-normal">trainer</span> at the same organization where I was trained. Since then, I have been training job seekers in Belgium to find a job as a web developer.</p>
            </article>

        </div>
    </section>
    <section class="tech">
        <fieldset>
            <legend><h2>What I have to offer!</h2></legend>
            <div class="skill-card">silet</div>
        </fieldset>
    </section>
</x-guest-layout>