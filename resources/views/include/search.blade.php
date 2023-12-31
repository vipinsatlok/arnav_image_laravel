<div class="sticky top-0 left-0 w-full z-50 ">
    <form class="flex min-w-full items-center w-[80%]" method="get" action="/">
        @csrf
        <label for="simple-search" class="sr-only">Search</label>
        <div class="relative w-full">
            <input type="search" name="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 flex w-full px-5 p-2.5 " placeholder="Enter keywords here..." required>
        </div>
    </form>

    @if (request('search'))
    <div class="mt-4 flex gap-2 text-sm">
        <span>Results for : </span>
        <span class="font-semibold">{{ request('search') }}</span>
    </div>
    @endif
</div>