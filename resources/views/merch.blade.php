<x-app-layout>
    <br>
    <br>
    <br>
    <br>
    {{-- <x-slot name="header"> --}}
        {{-- @foreach ($merch as $merch)
        {{ $merch->name }}
        {{ $merch->description }}
        {{ $merch->price }}
        <br>
        <img src="{{ asset($merch->image) }}" alt="{{ $merch->name }}" style="100%">
        @endforeach --}}
        {{--
    </x-slot> --}}
    @foreach ($merch as $merch)
    <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md">
        <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset($merch->image) }}" alt="{{ $merch->name }}">

        <div class="p-6">
            <h2 class="text-xl font-bold text-gray-900">{{ $merch->name }}</h2>
            <p class="mt-2 text-gray-600">{{ $merch->description }}</p>

            <div class="mt-4 flex items-center justify-between">
                <span class="text-xl font-bold text-gray-900">{{ $merch->price }}</span>
                <a href="{{ route('booking') }}"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Book Now</a>
            </div>
        </div>
    </div>
    @endforeach

</x-app-layout>
<x-footer />