<form class="flex min-w-full items-center" method="get" action="/">
    @csrf
    <label for="simple-search" class="sr-only">Search</label>
    <div class="relative w-full">
        <input type="search" name="search" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 flex w-full px-5 p-2.5 " placeholder="Enter keywords here..." required>
    </div>
</form>