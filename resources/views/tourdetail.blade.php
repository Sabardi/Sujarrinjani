<x-app-layout>
    <div class="flex pt-12 mt-4"></div>
    <div class="container">
        <h1>Tour Details</h1>

        <div class="form-group">
            <strong>Name:</strong>
            {{ $tour->name }}
        </div>

        <div class="form-group">
            <strong>Description:</strong>
            {{ $tour->description }}
        </div>

        <div class="form-group">
            <strong>Price:</strong>
            {{ $tour->price }}
        </div>

        <div class="form-group">
            <strong>Category:</strong>
            {{ $tour->kategori->name }}
        </div>

        <div class="form-group">
            <strong>Image:</strong>
            <x-card imageUrl="{{ asset($tour->image) }}" title="{{ $tour->name }}" description="{{ $tour->description }}" />
        </div>

        <div class="form-group">
            <strong>Booking:</strong>
            <a href="{{ route('bookingtours', $tour->id) }}">
                <button class="">Booking</button>
            </a>
        </div>

        <div class="form-group">
            <strong>Content:</strong>
            <td>{!! $tour->content !!}</td>
        </div>
        <a href="{{ route('trek&tour') }}" class="btn btn-primary">Back</a>

    </div>
</x-app-layout>
<x-footer />



