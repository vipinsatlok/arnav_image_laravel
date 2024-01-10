@php
$imageId = Str::beforeLast($image->file_name, '.');
$tags = explode(', ', $image->tags);
@endphp

@extends("layout")

@section("keywords", $image->tags)
@section("iconPath", asset('/uploads/'.Str::finish($imageId, '.png')))
@section("section")

<div class="max-w-screen-xl relative flex-col flex items-start flex-wrap justify-between mx-auto p-4">

    <!-- downlaod section -->
    <div id="downloadModal" style="backdrop-filter: blur(10px);" class="absolute top-0 left-0 w-full h-full justify-center backdrop-blur-md hidden z-40">
        <div class="md:w-1/2 relative w-11/12 flex flex-col gap-5 items-center min-h-[500px] bg-white border border-gray-300 p-5 rounded-lg">

            <!-- close -->
            <div onclick="closeModal()" class="absolute top-3 right-3 w-6 h-6 bg-gray-300 text-gray-700 rounded-full cursor-pointer flex justify-center items-center">
                X
            </div>

            <!--  ad1 -->
            <div class="h-40 mt-5 w-full text-3xl flex justify-center border-b border-gray-300 items-center">
                ad 1
            </div>

            <div class="flex flex-col items-center w-full">
                <p class="text-gray-500 mb-5 block">Your image downloadn in</p>
                <span id="countDown" class="text-gray-700 md:text-6xl text-3xl block font-semibold">10 SEC</span>
                <p class="text-gray-500 mt-4 text-center">Your download should start automatically, if not <a id="imageDownload" class="text-gray-700">click here.</a></p>
            </div>

            <!--  ad2 -->
            <div class="w-full h-full text-3xl flex justify-center border-t border-gray-300 items-center">
                ad 2
            </div>
        </div>
    </div>


    <!-- image -->
    <div id="container" class="relative border p-2 max-w-md max-h-max z-auto">
        <div class="absolute top-0 left-0 w-full h-full bg-white z-30 opacity-0 cursor-not-allowed"></div>
        <div class="w-full">
            <img class="opacity-20 w-full" src="{{ asset('/images/png-bg.webp') }}" alt="">
        </div>
        <div class="absolute top-0 left-0 flex justify-center items-center w-full h-full overflow-hidden">
            <img loading="Loading..." oncontextmenu="return false;" class="transition-all w-full hover:scale-105" src="{{ asset('/uploads/'.Str::finish($imageId, '.png')) }}" alt="image description">
        </div>
    </div>

    <!-- button -->
    <div class="my-5 text-white bg-orange-500">
        <button data-image-id="{{ $imageId }}" onclick="startCountdown()" id="imageDownloadButton" type="submit" class="flex gap-3 items-center h-max font-medium text-sm px-5 py-2.5 focus:outline-none">
            <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path d="M12 3V16M12 16L16 11.625M12 16L8 11.625" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M15 21H9C6.17157 21 4.75736 21 3.87868 20.1213C3 19.2426 3 17.8284 3 15M21 15C21 17.8284 21 19.2426 20.1213 20.1213C19.8215 20.4211 19.4594 20.6186 19 20.7487" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
            Download now
        </button>
    </div>

    <!-- title and other data -->
    <div class="bg-gray-100 w-full flex  justify-between text-gray-700 px-5 py-10">
        <div>

            <h2 class="text-xl font-semibold my-3">Image Details</h2>
            <div class="flex flex-col">
                <span class="text-sm uppercase">
                    title : {{ $image->title}}
                </span>
                <span class="text-sm uppercase">
                    SIZE : {{ $image->file_size}} KB
                </span>
                <span class="text-sm uppercase">

                    @php
                    // Convert the string into an array
                    $dimensions = explode(',', $image->file_dimention);

                    // Get the width and height from the array
                    $width = $dimensions[0];
                    $height = $dimensions[1];

                    // Format the dimensions as "widthxheight"
                    $formattedDimensions = $width . ' x' . $height;
                    @endphp

                    Dimension : {{ $formattedDimensions }}
                </span>
            </div>
        </div>
        <div>

        </div>
    </div>

    <!-- tags -->
    <div class="w-full">
        <h2 class="text-xl font-semibold my-3">Tags</h2>
        <div class="border border-gray-300 p-2 block w-full">
            @foreach ($tags as $tag)
            <span class="bg-gray-300 m-2 inline-block max-w-xs cursor-pointer p-1 px-2 text-xs">
                <a class="w-max" href="/?search={{ $tag }}">
                    {{$tag}}
                </a>
            </span>
            @endforeach
        </div>
    </div>

    <!-- social buttons -->
    <div class="flex flex-col gap-1 py-10">
        Share on
        {!!
        Share::page(url()->current(), 'I prefer to you download this PNG image and use free it.')
        ->facebook()
        ->twitter()
        ->linkedin()
        ->whatsapp()
        ->telegram()
        ->reddit()
        !!}
    </div>

    <!-- download similar -->
    @if (count($imageData) > 0)
    <h2 class="text-xl font-semibold my-3">Similar PNGs</h2>
    @include("include.homeImages", ["image" => $imageData])
    @endif
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script src="{{ asset('js/downloadImage.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var copyLinkButton = document.getElementById('copyLinkButton');

        copyLinkButton.addEventListener('click', function() {
            // Use the navigator.clipboard API to copy the link to the clipboard
            navigator.clipboard.writeText(window.location.href)
                .then(function() {
                    console.log('Link copied to clipboard');
                })
                .catch(function(err) {
                    console.error('Unable to copy link to clipboard', err);
                    // You can handle errors or provide feedback to the user
                });
        });
    });
</script>

@endsection