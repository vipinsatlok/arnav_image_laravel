<div class="grid grid-cols-1 gap-5 md:grid-cols-2 lg:grid-cols-4">
    @foreach($image as $d)
    <span>
        @include("include.imageCard", $d)
    </span>
    @endforeach
</div>