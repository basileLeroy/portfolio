@section("title")
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
                <p>Features include:</p>
                <ul>
                    <li>Option to update texts in 3 languages (NL, FR, EN)</li>
                    <li>Custom forms to add new articles and projects</li>
                    <li>Drag&drop to change order of articles or projects</li>
                    <li>Options to update specific image galleries</li>
                </ul>
                <p>Stack</p>
                <ul class="tech">
                    <li>PHP - Laravel</li>
                    <li>MySQL</li>
                    <li>Alpine.js</li>
                    <li>Flowbite CSS</li>
                </ul>
            </div>
            <div class="visuals"></div>
        </article>
    </section>
</x-guest-layout>
