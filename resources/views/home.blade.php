<x-app-layout>
    <x-slot name="header">
        <x-hero imageUrl="{{ asset('/img/image1.png') }}" title="Card Title"
            description="This is a small text at the bottom of the card." />
    </x-slot>
    {{-- Abot Us --}}
    <div class="flex flex-col items-center py-8 dark:text-white">
        <h1 class="items-center my-12 text-4xl font-bold">Welcome</h1>
        <div class="flex flex-col gap-4 p-10 lg:flex-row">
            <img src="{{ asset('img/sujar-on-top.jpg') }}" alt="" class="object-cover lg:w-1/2">
            <div class="flex flex-col gap-6">
                <h1 class="text-2xl font-bold text-center lg:text-left">TO THE BEST TREK IN SOUTH ASIA</h1>
                <h1 class="text-xl text-center text-orange-500 lg:text-left">Let’s Climb Mount Rinjani</h1>
                <p class="text-center lg:text-left">Sujar Rinjani providing Mount Rinjani trekking packages & mountain
                    bike tour for private and sharing
                    packages with complete facilities, reasonable prices, and supported by professional and experienced
                    the Local Senaru trek organizer, guides, and porters.</p>
            </div>
        </div>
    </div>
    {{-- Trek --}}
    <div class="flex flex-col items-center py-8 dark:text-white">
        <h1 class="items-center my-12 text-4xl font-bold">Climbing Packages</h1>
    </div>
    <div class="container grid items-center grid-cols-1 gap-8 p-6 mx-auto md:grid-cols-2 lg:grid-cols-3">
        @foreach ($tours as $tour)
        <a href="{{ route('tours.detail', $tour->id) }}" class="w-full max-w-sm mx-auto overflow-hidden rounded-md shadow-md') }}">
            <x-card imageUrl="{{ asset($tour->image) }}" title="{{ $tour->name }}"
                description="{{ $tour->description }}" />
        </a>
        @endforeach
    </div>
    {{-- Feature On --}}
    <div class="flex flex-col items-center py-8 dark:text-white">
        <h1 class="items-center my-12 text-4xl font-bold">Feature On</h1>
        <div class="flex flex-wrap items-center justify-around gap-4">
            @foreach ($sponsor as $s)
            <img src="{{ asset($s->image) }}" alt="{{ $s->name }}" width="6%">
            @endforeach
        </div>
    </div>
    {{-- They Story --}}
    <div class="flex flex-col items-center justify-around px-12 py-8 dark:text-white">
        <h1 class="items-center my-12 text-4xl font-bold">They All Love Our Tours</h1>
        <h3>Some of our happy word from our client around the world and. Read more reviews in </h3>
        <a class="flex items-center gap-2 text-green-500"
            href="https://www.tripadvisor.com/Attraction_Review-g3475390-d12485334-Reviews-Sujar_Rinjani-Senaru_Lombok_West_Nusa_Tenggara.html">
            <img src="{{ asset('img/tripadvisor.png') }}" class="w-8" alt="">TripAdvisor here</a>

        <div class="container grid gap-4 mt-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col items-center">
                <img src="{{ asset('images/people/client4-free-img-1.png') }}" class="w-20 rounded-full" alt="">
                <p class="text-center text-orange-500">"Great experience in trekking the Rinjani. Sujar was very good at
                    organising
                    the tour" <br> - Jose F</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{asset('images/people/client1-free-img-1.png')}}" class="w-20 rounded-full" alt="">
                <p class="text-center text-orange-500">"I went alone with a guide and porter from Sujar Rinjani company,
                    that I recommand. Sujar is very careful and organised" <br> - Sophie </p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{asset('images/people/client2-free-img-1.png')}}" class="w-20 rounded-full" alt="">
                <p class="text-center text-orange-500">"He organised us a trekking tour to rinjani and it was beatiful,
                    i really recommend him!" <br>
                    - MaDibtceht y</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="{{asset('images/people/client3-free-img-1.png')}}" class="w-20 rounded-full" alt="">
                <p class="text-center text-orange-500">"Excellent trek with an excellent team, Sujar makes sure
                    everything goes well and his team is adorable! " <br>
                    - emilienchebib</p>
            </div>
        </div>
    </div>
    {{-- FAQ --}}
    <div class="flex flex-col items-center py-8 dark:text-white">
        <h1 class="items-center my-12 text-4xl font-bold">FAQ's</h1>
        <div class="grid grid-cols-2 gap-4">
            <p class="p-8 border rounded text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="p-8 border rounded text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="p-8 border rounded text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="p-8 border rounded text-md">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
    </div>
    {{-- Contact Us --}}
    <div class="flex flex-col items-center py-8 mb-12 dark:text-white">
        <h1 class="items-center my-12 text-4xl font-bold">Contact Us</h1>
        <div class="flex flex-wrap gap-4">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7896.252976445803!2d116.39351205390626!3d-8.290208799999984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dcdd4dbffe3fcd5%3A0xda8231ef1197ce8a!2sSujar%20Rinjani!5e0!3m2!1sid!2sid!4v1724854595750!5m2!1sid!2sid"
                class="" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="flex flex-col gap-4">
                <input type="text" class="field" placeholder="Your Name" />
                <input type="text" class="field" placeholder="Email" />
                <input type="text" class="field" placeholder="Phone Number" />
                <textarea placeholder="Message" class="field"></textarea>
                <button class="py-3 border border-gray-100 btn">Send</button>
            </div>
        </div>
    </div>

</x-app-layout>
<x-footer />
{{-- Footer --}}
