@foreach ($merch as $merch)
    {{ $merch->name }}
    {{ $merch->description }}
    {{ $merch->price }}
    <br>
    <img src="{{ asset($merch->image) }}" alt="{{ $merch->name }}" style="100%">
@endforeach
