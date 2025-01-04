<x-guest-layout>
    <section class="show contact">
        <form action="">
            <h1>Contact me</h1>
            @csrf
            <label>
                Name
                <input type="text" id="name" name="name" placeholder="John Wick" required>
            </label>

            <label>
                email
                <input type="email" id="email" name="email" placeholder="babayaga@mail.com" required>
            </label>

            <label>
                Message
                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your message ..." required></textarea>
            </label>

            <button>Send !</button>
        </form>
    </section>
</x-guest-layout>