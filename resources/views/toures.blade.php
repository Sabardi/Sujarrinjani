<x-app-layout>
    <x-slot name="header">
        <x-hero imageUrl="{{ asset('/img/image1.png') }}" title="Card Title"
            description="This is a small text at the bottom of the card." />
    </x-slot>

    <div class="container grid grid-cols-1 gap-8 p-6 md:grid-cols-2 lg:grid-cols-3">
        @if($tours->isEmpty())
        <p>Tujuan belom tersedia</p>
    @else
        @foreach ($tours as $t)
        <x-card imageUrl="{{ asset($t->image) }}" title="{{ $t->name }}" description="{{ $t->description }}" />
        @endforeach
        @foreach ($tours as $t)
        
            <a href="">
                <div class="">
                    price {{ $t->price }}
                </div>
                <div class="">
                    {{$t->kategori->name}}
                </div>
            </a>
        @endforeach
    @endif

    </div>
</x-app-layout>
<x-footer />

