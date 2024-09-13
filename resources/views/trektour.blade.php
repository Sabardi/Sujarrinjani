<x-app-layout>
    {{-- <x-slot name="header">
        <x-hero imageUrl="{{ asset('/img/image1.png') }}" title="Card Title"
            description="This is a small text at the bottom of the card." />
    </x-slot> --}}
    <div class="flex mt-4 pt-12"></div>
    <div class="flex text-3xl text-center my-12 font-bold dark:text-white"">Trek</div>
    <div class="container grid grid-cols-1 gap-8 p-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($kategori as $t)
        <a href="{{ route('tours.ByCategory', $t->id ) }}">
            <x-card imageUrl="{{ asset($t->image) }}" title="{{ $t->name }}" description="{{ $t->description }}" />
        </a>
        @endforeach
    </div>

    <div class="flex text-3xl text-center my-12 font-bold dark:text-white"">Tours</div>
    <div class="container grid grid-cols-1 gap-8 p-6 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($tours as $t)
        <a href="">
            <x-card imageUrl="{{ asset($t->image) }}" title="{{ $t->name }}" description="{{ $t->description }}" />
        </a>
        @endforeach
    </div>
</x-app-layout>
<x-footer />
