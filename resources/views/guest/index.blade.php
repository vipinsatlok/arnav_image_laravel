@extends("layout")

@section("section")
<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    @include("include.banner")
    @include("include.search")



    @if (count($image) > 0)
    <div id="blogs-wrapper" class="scrolling-pagination">
        @include("include.homeImages", ["image" => $image])
    </div>
    @else
    <div class="flex w-full h-[200px] justify-center mt-10 font-bold items-center text-4xl animate-pulse">
        No Data Found
    </div>
    @endif



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="//unpkg.com/jscroll/dist/jquery.jscroll.min.js"></script>
<script type="text/javascript">
    var page = 2;
    var lastPage = Number("{{ $image->lastPage() }}")

    $(document).ready(function() {
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() >= $(document).height()) {
                if (lastPage >= page) {
                    loadMoreData(page);
                    page++;
                }
            }
        });
    });

    function loadMoreData(page) {
        $.ajax({
            url: '{{ route("index.get") }}',
            type: 'get',
            data: {
                page: page
            },
            dataType: 'json',
            success: function(response) {
                if (response["status"] == true) {
                    $('#blogs-wrapper').append(response["html"]);
                }
            }
            // blogs-wrapper
        });
    }
</script>
@endsection