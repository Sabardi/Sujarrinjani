<div class="relative w-full h-screen overflow-hidden">
    <div class="flex w-4/5 h-screen px-4 mx-auto sm:px-6 lg:px-8">
        <!-- Fallback Image -->
        <img src="{{ asset('img/fallback-image.jpg') }}" alt="Fallback Image"
            class="absolute inset-0 object-cover w-full h-full" id="fallbackImage">

        <!-- Background Video -->
        {{-- <div class="absolute inset-0 overflow-hidden">
            <iframe
                src="https://www.youtube.com/embed/TblaoN2zY_Q?autoplay=1&mute=1&controls=0&loop=1&playlist=TblaoN2zY_Q"
                frameborder="0" allow="autoplay; fullscreen" allowfullscreen class="video-iframe" id="backgroundVideo"
                onload="hideFallbackImage()" onerror="showFallbackImage()"></iframe>
        </div> --}}

        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-black to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/90"></div>
        {{-- <div class="absolute inset-0 bg-black/40"></div> --}}

        <!-- Text Container -->
        <div class="absolute inset-0 flex items-center justify-center w-4/5 h-screen px-1 mx-auto">
            {{-- <div class="flex"> --}}
                <span class="flex flex-col items-center gap-8 mx-12 mb-2 text-center">
                    <img src="{{ asset('sepeda.png') }}" class="w-10" alt="">
                    <p class="text-xl text-orange-500">Best Tour Company in Mount Rinjani</p>
                    <h1 class="font-bold text-white text-7xl">
                        SUJAR RINJANI
                    </h1>
                    <p class="text-xl text-white">Professional & Licensed Tour Operator for Trekking Rinjani Lombok and
                        Mountain Bike Adventures</p>
                </span>

                {{--
            </div> --}}
        </div>
    </div>
</div>
<script>
    function hideFallbackImage() {
        document.getElementById('fallbackImage').style.display = 'none';
    }

    function showFallbackImage() {
        document.getElementById('fallbackImage').style.display = 'block';
    }

    // Initial check to show or hide the fallback image based on video load
    const video = document.getElementById('backgroundVideo');
    video.addEventListener('error', showFallbackImage);
    video.addEventListener('load', hideFallbackImage);

</script>