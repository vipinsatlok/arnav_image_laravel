@extends("layout")

@section("section")
<div class="max-w-screen-xl flex-col flex items-start flex-wrap justify-between mx-auto p-4">
    <div class="border max-w-md w-full overflow-hidden rounded-lg my-5">
        <img oncontextmenu="return false;" class="h-auto w-full max-w-md p-5 transition-all hover:scale-150" src="{{ asset('/uploads/'.Str::finish($imageId, '.png')) }}" alt="image description">
    </div>
    <div class="my-5">
        <button id="imageDownloadButton" data-image-id="{{ $imageId }}" onclick="startCountdown()" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Download now
        </button>
    </div>
    <div>
        @include("include.share")
    </div>
</div>
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