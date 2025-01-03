@vite(['resources/js/animations/text-animations.js', 'resources/js/components/accordion.js', 'resources/js/components/slider.js'])

<x-guest-layout>
    <section class="hero">
        <h1 class="hero">
            <span id="first-name">BASILE</span><span id="last-name">LEROY</span>
        </h1>
        <div class="my-picture">
            <img src="{{ asset('storage/profile.png') }}" title="Photo of Basile Leroy"
                alt="A picture of Basile Leroy sitting down with a colorful background">
        </div>
    </section>

    <section class="info">
        <h2>Hey there! <span class="focus-big">I'm ...</span></h2>
        <div class="desktop slider">
            <ul class="slider-menu">
                <li id="about-button" tabindex="0" aria-label="show article about Basile Leroy" data-topic="about"
                    class="active">Basile Leroy from Belgium</li>
                <li id="php-button" tabindex="0" aria-label="show article about my web dev skills" data-topic="php">A
                    PHP web developer</li>
                <li id="career-button" tabindex="0" aria-label="show article about my career" data-topic="career">My
                    career as a developer</li>
            </ul>
            <div class="slider-content">
                <article id="about" class="active" aria-labelledby="about-button">
                    <p>Born and raised in <span class="focus-normal">Belgium</span>. I was brought up in both <span
                            class="focus-normal">dutch</span> and <span class="focus-normal">french</span> at home but
                        quickly became fluent in <span class="focus-normal">english</span> too by traveling around and
                        interacting with people all over the world.</p>
                </article>
                <article id="php" aria-labelledby="php-button">
                    <p>As a web developer, I mainly work with <span class="focus-normal">PHP</span> as a programming
                        language and <span class="focus-normal">Laravel</span> as a framework.</p>
                    <p>Of course, I am also familiar with other web oriented programming languages, and I have to admit
                        I even enjoy learning new ones if/when the opportunity is given!</p>
                </article>
                <article id="career" aria-labelledby="career-button">
                    <p>My career started as a self-taught developer but I ended up joining a training program to
                        increase my skills and knowledge.</p>
                    <p>Next, I was able to work on a few projects. But soon, I got invited to be a <span
                            class="focus-normal">coach</span>/<span class="focus-normal">trainer</span> at the same
                        organization where I was trained. Since then, I have been training job seekers in Belgium to
                        find a job as a web developer.</p>
                </article>
            </div>
        </div>

        <div class="mobile accordion-menu">
            <button class="accordion">Basile Leroy from Belgium</button>
            <div class="panel">
                <p>Born and raised in <span class="focus-normal">Belgium</span>. I was brought up in both <span
                        class="focus-normal">dutch</span> and <span class="focus-normal">french</span> at home but
                    quickly became fluent in <span class="focus-normal">english</span> too by traveling around and
                    interacting with people all over the world.</p>
            </div>

            <button class="accordion">A PHP web developer</button>
            <div class="panel">
                <p>As a web developer, I mainly work with <span class="focus-normal">PHP</span> as a programming
                    language and <span class="focus-normal">Laravel</span> as a framework.</p>
                <p>Of course, I am also familiar with other web oriented programming languages, and I have to admit
                    I even enjoy learning new ones if/when the opportunity is given!</p>
            </div>

            <button class="accordion">My career as a developer</button>
            <div class="panel">
                <p>My career started as a self-taught developer but I ended up joining a training program to
                    increase my skills and knowledge.</p>
                <p>Next, I was able to work on a few projects. But soon, I got invited to be a <span
                        class="focus-normal">coach</span>/<span class="focus-normal">trainer</span> at the same
                    organization where I was trained. Since then, I have been training job seekers in Belgium to
                    find a job as a web developer.</p>
            </div>
        </div>
    </section>
    <section class="skills">
        <fieldset>
            <legend>
                <h2>What I have to offer!</h2>
            </legend>
            <div class="change-view">
                <input type="checkbox" id="toggle_checkbox">
                <label for="toggle_checkbox">
                    <span class="toggle_circle"></span>
                    <img src={{ asset('storage/list-size.png') }}
                        alt="display icon for list type output">
                    <img src={{ asset('storage/pictogram-size.png') }}
                        alt="display icon for card type output">
                </label>
            </div>
            <div class="skill-card">

            </div>
        </fieldset>
    </section>
</x-guest-layout>
