<x-app-layout>
    <x-slot name="header">
<x-hero imageUrl="{{ asset('/img/image1.png') }}" title="Card Title"
description="This is a small text at the bottom of the card." />
    </x-slot>
    
<div class="container grid grid-cols-1 gap-8 p-6 md:grid-cols-2 lg:grid-cols-3">
    <x-card imageUrl="{{ asset('/img/image1.png') }}" title="Card Title"
        description="This is a small text at the bottom of the card." />
    <x-card imageUrl="{{ asset('/img/image1.png') }}" title="Card Title"
        description="This is a small text at the bottom of the card." />
    <x-card imageUrl="{{ asset('/img/image1.png') }}" title="Card Title"
        description="This is a small text at the bottom of the card." />
</div>
</x-app-layout>
<x-footer />