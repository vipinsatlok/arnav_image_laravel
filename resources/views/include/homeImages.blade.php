<div class="grid grid-cols-1 gap-10 mt-10 md:grid-cols-4">
    @foreach($image as $d)
    <span>
        @include("include.imageCard", $d)
    </span>
    @endforeach
</div>