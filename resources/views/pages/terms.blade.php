@section("title")
Terms & services
@endsection
@section("description")
Read the terms and services for Basile Leroy's website. It contains an overview on which data is used on the platform and to what end.
@endsection

<x-guest-layout>
    <section class="show terms">
        <h1>Privacy, terms & services</h1>
        <p>In this day and age, I find it important to be transparent on how a website/platform interacts with its
            visitors, so here is how basileleroy.com interacts with your data.</p>
        <p>If you have questions or would like to get in contact, you can reach me <a
                href={{ route('contact') }}>here</a>.</p>

        <article>
            <h2>Terms & Services</h2>
            <p>Effective Date: <strong>[January 04, 2025]</strong></p>
            <p>Welcome to <a href="{{ route('about') }}">basileleroy.com</a>! By accessing my website, you
                agree to comply to the following terms and conditions. If you do not agree to these terms, you must not
                use our website.
            </p>

            <h3>Data collection</h3>
            <p>This website tracks basic visitor data. This information includes, but is not limited to, IP addresses, browser data, header data and referral links.</p>
            <p>The data collected will be used for the following:</p>
            <ul>
                <li>Analytical overview for website traffic</li>
                <li>Design/style of the website</li>
                <li>Handling HTTP requests when visiting pages on the website</li>
            </ul>
            <p>If used, the contact form will also store the information provided by the visitor in order to allow me to process and reply to your query/message.</p>
            <p>This data will not be used for any other purposes than the ones mentioned above.</p>

            <p>Of course, you can request the removal of the contact form data anytime on <a href="#">basileleroy.com/remove-data</a>.</p>

            <h3>Cookies</h3>
            <p>This website does not use cookies for commercial use, but it can use cookies for security and performance purposes.</p>

            <h3>Localstorage</h3>
            <p>This website uses localstorage to store visitor preferences and handle animations/transitions. None of this data will be used outside of the website.</p>

            <h3>Third party websites</h3>
            <p>This website has multiple links available for your use and reference (e.g.: Linkedin, Github). I am not responsible for the terms and privacy policies on any of these websites.</p>
        </article>
    </section>
</x-guest-layout>
