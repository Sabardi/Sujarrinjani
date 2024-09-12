<!-- resources/views/components/card.blade.php -->
@props(['imageUrl', 'title', 'description'])
<div class="relative w-full overflow-hidden h-72">
    <!-- Background Image -->
    <div class="absolute inset-0 transition-transform duration-300 ease-in-out transform bg-center bg-cover hover:scale-110"
        style="background-image: url('{{ $imageUrl }}');"></div>

    <!-- Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>

    <!-- Text Container -->
    <div class="absolute inset-0 flex flex-col justify-end p-4">
        <div class="p-2 rounded-md bg-opacity-60">
            <h2 class="mb-2 text-xl font-bold text-white">{{ $title }}</h2>
            <p class="text-xs text-white">{{ $description }}</p>
        </div>
    </div>
</div>
