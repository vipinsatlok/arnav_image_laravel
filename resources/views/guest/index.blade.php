@extends("layout")

@section("section")
<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    @include("include.banner")
    @include("include.search")
    @include("include.upload")



    @if ($images->count() > 0)
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 md:gap-5">
        @foreach ($images as $image)
        @include("include.imageCard", ['fileName' => $image->fileName, 'tags' => $image->tags, 'fileSize' => $image->fileSize, 'title' => $image->title])
        @endforeach
    </div>
    @include("include.pagination", ['images' => $images])
    @else
    <div class="my-5 p-5 text-gray-600 flex w-full justify-center items-center">No Data Found</div>
    @endif



</div>
<script src="{{ asset('js/uploadImage.js') }}"></script>
@endsection