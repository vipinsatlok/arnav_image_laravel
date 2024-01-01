<div class="sticky top-0 left-0 w-full z-50 ">
    <form class="flex min-w-full items-center w-[80%]" method="get" action="/">
        @csrf
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <i class="fa-sharp absolute top-3 text-gray-400 left-4 z-50 fa-solid fa-magnifying-glass"></i>
            <div class="relative w-full">
                <input type="search" name="search" id="simple-search" class="bg-gray-50 border border-gray-300 rounded-tl-lg rounded-br-lg text-gray-900 text-sm focus:ring-orange-500 focus:border-orange-500 flex w-full px-10 p-2.5 " placeholder="Type keywords here..." required>
            </div>
        </div>
    </form>

    @if (request('search'))
    <div class="mt-4 flex gap-2 text-sm">
        <span>Results for : </span>
        <span class="font-semibold">{{ request('search') }}</span>
    </div>
    @endif
</div>