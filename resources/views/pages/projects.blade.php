@vite(['resources/js/lightbox/init.js'])

@section('title')
My projects page
@endsection
@section("description")
Look at some of the projects Basile Leroy has worked on.
@endsection

<x-guest-layout>
    <section class="show projects">
        <h1>My projects</h1>
        <p>Here are some projects I worked on.
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
            <div class="gallery">
                <div class="visuals pswp-gallery" id="my-gallery">
                    <a href={{ asset('storage/projects/custom-cms/drag-and-drop.gif') }} 
                        data-pswp-width="994" 
                        data-pswp-height="585" 
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/custom-cms/drag-and-drop.webp') }} alt="Thumbnail 1">
                    </a>
                    <a href={{ asset('storage/projects/custom-cms/admin-view.webp') }} 
                        data-pswp-width="1000" 
                        data-pswp-height="500" 
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/custom-cms/admin-view.webp') }} alt="Thumbnail 2">
                    </a>
                    <a href={{ asset('storage/projects/custom-cms/language-specific-text-editors.gif') }}
                        data-pswp-width="994" 
                        data-pswp-height="585"
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/custom-cms/language-specific-text-editors.webp') }}
                            alt="Thumbnail 3">
                    </a>
                    </a>
                    <a href={{ asset('storage/projects/custom-cms/remove-and-update-galleries.gif') }}
                        data-pswp-width="994" 
                        data-pswp-height="585"
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/custom-cms/remove-and-update-galleries.webp') }}
                            alt="Thumbnail 3">
                    </a>
                </div>
            </div>
        </article>
        <article class="project">
            <h2>Game Guide platform for game community</h2>
            <div class="details">
                <p>One of the first websites (static) I made: an information/guide platform created for a game community.</p>
                <p>The website is no longer active, so I took some screen captures from a local version.</p>   
                <h3>Features include:</h3>
                <ul class="features">
                    <li>A complex bracket calculator for optimal level combinations</li>
                    <li>Gear suggestions based on type</li>
                    <li>Documentation displayed in a fun/readable format</li>
                </ul>
                <h3>Stack</h3>
                <ul class="tech">
                    <li>ReactJS</li>
                    <li>SCSS/SASS</li>
                </ul>
            </div>
            <div class="gallery">
                <div class="visuals pswp-gallery" id="my-gallery">
                    <a href={{ asset('storage/projects/hustle-prime/arena-demo.gif') }} 
                        data-pswp-width="994" 
                        data-pswp-height="585" 
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/hustle-prime/arena-demo.webp') }} alt="Thumbnail 1">
                    </a>
                    <a href={{ asset('storage/projects/hustle-prime/banner-example.webp') }} 
                        data-pswp-width="1000" 
                        data-pswp-height="500" 
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/hustle-prime/banner-example.webp') }} alt="Thumbnail 2">
                    </a>
                    <a href={{ asset('storage/projects/hustle-prime/dynamic-components.gif') }}
                        data-pswp-width="994" 
                        data-pswp-height="585"
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/hustle-prime/dynamic-components.webp') }}
                            alt="Thumbnail 3">
                    </a>
                    </a>
                    <a href={{ asset('storage/projects/hustle-prime/gembay-demo.gif') }}
                        data-pswp-width="994" 
                        data-pswp-height="585"
                        target="_blank">
                        <img 
                            loading="lazy"
                            decoding="async"
                            src={{ asset('storage/projects/hustle-prime/gembay-demo.webp') }}
                            alt="Thumbnail 3">
                    </a>
                </div>
            </div>
        </article>
    </section>
</x-guest-layout>
