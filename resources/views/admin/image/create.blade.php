@extends("layout")

@section("section")
<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    @include("include.upload")
</div>

<script src="{{ asset('js/uploadImage.js') }}"></script>
@endsection