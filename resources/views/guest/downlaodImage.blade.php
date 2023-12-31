@extends("layout")

@section("keywords", $image->tags)
@section("section")

@php
$imageId = Str::beforeLast($image->file_name, '.');
$tags = explode(', ', $image->tags);
@endphp
<div class="max-w-screen-xl flex-col flex items-start flex-wrap justify-between mx-auto p-4">

    <!-- image -->
    <div id="container" class="relative border p-2 max-w-md max-h-max">
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
    <div class="bg-gray-100 w-full flex flex-col text-gray-700 px-5 py-10">
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

    <!-- tags -->
    <div class="w-full">
        <h2 class="text-xl font-semibold my-3">Tags</h2>
        <div class="border border-gray-300 p-2 block w-full">
            @foreach ($tags as $tag)
            <span class="bg-gray-300 m-2 inline-block max-w-xs cursor-pointer p-1 px-2 text-xs">
                <a class="w-max" href="/?search=tags">
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