
@vite(['resources/js/animations/text-animations.js'])

<x-guest-layout>
    <section class="banner">
        <h1><span class="focus-big">PHP</span>/<span class="focus-big">Web</span>developer</h1>
        <div>
            <article class="about-me">
                <h2>Hey There! I am</h2>
                <p class="name">Basile Leroy from Belgium</p>
                <p id="quote">I am a backend developer but have been doing full stack projects too. Primarily I focus on <span class="focus-normal">PHP</span>/<span class="focus-normal">Laravel</span>. My career started as a self-taught developer but I ended up joining a training program to increase my skills and knowledge.</p>
                <p id="quote">Next, I was able to work on a few projects. But soon, I got invited to be a <span class="focus-normal">coach</span>/<span class="focus-normal">trainer</span> at the same organization where I was trained. Since then, I have been training job seekers in Belgium to find a job as a web developer.</p>
            </article>
            <div class="my-picture">
                <img src="{{ asset('storage/profile.png') }}" title="Photo of Basile Leroy" alt="A picture of Basile Leroy sitting down with a colorfull background">
            </div>
        </div>
    </section>
    <section>
        <h2>Something</h2>
    </section>
</x-guest-layout>