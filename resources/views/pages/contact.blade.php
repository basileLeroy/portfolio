@section('title')
Contact me page
@endsection
@section("description")
Contact Basile Leroy on this page.
@endsection

<x-guest-layout>
    <section class="show contact">
        <form action={{ route('sendMessage') }} method="POST" id="contact-form">
            <h1>Contact me</h1>
            @csrf
            <input type="text" name="bottingtrap" id="bottingtrap">
            @error('bottingtrap')
                <p style="color:red">The request was denied, try again.</p>
            @enderror
            <label>
                Name
                <input type="text" id="name" name="name" placeholder="John Wick" required>
            </label>
            @error('name')
                <p style="color:red">{{ $message }}</p>
            @enderror
            <label>
                email
                <input type="email" id="email" name="email" placeholder="babayaga@mail.com" required>
            </label>
            @error('email')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <label>
                Message
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message ..."
                    value={{ old('message') }} required></textarea>
            </label>
            @error('message')
                <p style="color:red">{{ $message }}</p>
            @enderror

            <button class="g-recaptcha" 
                data-sitekey={{ config("services.recaptcha.site_key") }}
                data-callback='onSubmit' 
                data-action='submit'>Send !</button>
            @error('g-recaptcha-response')
                <p style="color:red">{{ $message }}</p>
            @enderror
        </form>
    </section>

    @push('scripts')
        <script>
            function onSubmit(token) {
                document.getElementById("contact-form").submit();
            }
        </script>
    @endpush
</x-guest-layout>
