<x-app-layout>
    <br>
    <br>
    <br>
    {{-- Contact Us --}}
    <div class="flex flex-col items-center py-8 dark:text-white mb-12">
        <h1 class="items-center my-12 text-4xl font-bold">Contact Us</h1>
        <div class="flex flex-wrap gap-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7896.252976445803!2d116.39351205390626!3d-8.290208799999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdd4dbffe3fcd5%3A0xda8231ef1197ce8a!2sSujar%20Rinjani!5e0!3m2!1sid!2sid!4v1724854595750!5m2!1sid!2sid"
                class="" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <form action="mailto:hamzaniwahid321@gmail.com?subject=Contact%20Form&body=" method="GET">
                <div class="flex flex-col gap-4">
                    <input type="text" name="name" class="field" placeholder="Your Name" required />
                    <input type="email" name="email" class="field" placeholder="Email" required />
                    <input type="text" name="phone" class="field" placeholder="Phone Number" required />
                    <textarea name="message" class="field" placeholder="Message" required></textarea>
                    <button type="submit" class="btn border border-gray-100 py-3">Send</button>
                </div>
            </form>
        </div>
    </div>

</x-app-layout>
<x-footer />
{{-- Footer --}}