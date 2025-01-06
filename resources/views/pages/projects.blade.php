@vite(['resources/js/lightbox/init.js'])

@section('title')
    Projects
@endsection

<x-guest-layout>
    <section class="show projects">
        <h1>My projects</h1>
        <p>Here are some projects that I worked on.
            <hr>
        <article class="project">
            <h2>Custom CMS dashboard</h2>
            <div class="details">
                <p>Transforming a static website to a dynamic one, including a CMS-like dashboard for the client.
                </p>
                <h3>Features include:</h3>
                <ul class="features">
                    <li>Option to update texts in 3 languages (NL, FR, EN)</li>
                    <li>Custom forms to add new articles and projects</li>
                    <li>Drag&drop to change order of articles or projects</li>
                    <li>Options to update specific image galleries</li>
                </ul>
                <h3>Stack</h3>
                <ul class="tech">
                    <li>PHP - Laravel</li>
                    <li>MySQL</li>
                    <li>Alpine.js</li>
                    <li>Flowbite CSS</li>
                </ul>
            </div>
            <div class="visuals pswp-gallery" id="my-gallery">
                <a href={{ asset('storage/projects/custom-cms/drag-and-drop.gif') }} 
                    data-pswp-width="994" 
                    data-pswp-height="585" 
                    target="_blank">
                    <img src={{ asset('storage/projects/custom-cms/drag-and-drop.jpg') }} alt="Thumbnail 1">
                </a>
                <a href={{ asset('storage/projects/custom-cms/admin-view.jpg') }} 
                    data-pswp-width="1000" 
                    data-pswp-height="500" 
                    target="_blank">
                    <img src={{ asset('storage/projects/custom-cms/admin-view.jpg') }} alt="Thumbnail 2">
                </a>
                <a href={{ asset('storage/projects/custom-cms/language-specific-text-editors.gif') }}
                    data-pswp-width="994" 
                    data-pswp-height="585"
                    target="_blank">
                    <img src={{ asset('storage/projects/custom-cms/language-specific-text-editors.jpg') }}
                        alt="Thumbnail 3">
                </a>
                </a>
                <a href={{ asset('storage/projects/custom-cms/remove-and-update-galleries.gif') }}
                    data-pswp-width="994" 
                    data-pswp-height="585"
                    target="_blank">
                    <img src={{ asset('storage/projects/custom-cms/remove-and-update-galleries.jpg') }}
                        alt="Thumbnail 3">
                </a>
            </div>
        </article>
        <article class="project">
            <h2>Game Guide platform for game community</h2>
            <div class="details">
                <p>One of the first websites (static) I made: an information/guide platform made for a game community about a certain game.</p>
                <p>The website is not live anymore, but I took some screen captures from a local version.</p>   
                <h3>Features include:</h3>
                <ul class="features">
                    <li>A complex bracket calculator helping players to know what combinations of levels they need</li>
                    <li>Gear suggestions based on type</li>
                    <li>documentation displayed in a fun/readable way</li>
                </ul>
                <h3>Stack</h3>
                <ul class="tech">
                    <li>ReactJS</li>
                    <li>SCSS/SASS</li>
                </ul>
            </div>
            <div class="visuals pswp-gallery" id="my-gallery">
                <a href={{ asset('storage/projects/hustle-prime/arena-demo.gif') }} 
                    data-pswp-width="994" 
                    data-pswp-height="585" 
                    target="_blank">
                    <img src={{ asset('storage/projects/hustle-prime/arena-demo.jpg') }} alt="Thumbnail 1">
                </a>
                <a href={{ asset('storage/projects/hustle-prime/banner-example.jpg') }} 
                    data-pswp-width="1000" 
                    data-pswp-height="500" 
                    target="_blank">
                    <img src={{ asset('storage/projects/hustle-prime/banner-example.jpg') }} alt="Thumbnail 2">
                </a>
                <a href={{ asset('storage/projects/hustle-prime/dynamic-components.gif') }}
                    data-pswp-width="994" 
                    data-pswp-height="585"
                    target="_blank">
                    <img src={{ asset('storage/projects/hustle-prime/dynamic-components.jpg') }}
                        alt="Thumbnail 3">
                </a>
                </a>
                <a href={{ asset('storage/projects/hustle-prime/gembay-demo.gif') }}
                    data-pswp-width="994" 
                    data-pswp-height="585"
                    target="_blank">
                    <img src={{ asset('storage/projects/hustle-prime/gembay-demo.jpg') }}
                        alt="Thumbnail 3">
                </a>
            </div>
        </article>
    </section>
</x-guest-layout>
