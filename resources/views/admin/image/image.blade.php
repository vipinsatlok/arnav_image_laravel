@extends("layout")

@section("section")
<div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">

    <!-- if success fully uploading -->
    @if(session('success'))
    @include("include.info", ['msg' => session('success')])
    @endif

    <!-- title -->
    @include("include.title", ["title" => "Images Lists"])

    <!-- add button -->
    <a href="{{ route('admin.image.create') }}">
        @include("include.button", ["text" => "Add New"])
    </a>

    <!-- table -->
    <div class="relative w-full overflow-x-auto border border-gray-300 sm:rounded-none">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 border-b border-gray-300 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Image Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image Dimention (W,H)
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image Path
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Image Size
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="px-6 py-4">
                        {{ $d->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $d->file_dimention }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ asset('/uploads/'. $d->file_name )  }}">
                            {{ $d->file_name }}
                        </a>
                    </td>
                    <td class="px-6 py-4">
                        {{ $d->file_size }} KB
                    </td>
                    <td class="px-6 py-4 flex text-right">
                        <form action="{{ route('admin.image.delete', ['id' => $d->id]) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="font-medium text-blue-600 cursor-pointer dark:text-blue-500 hover:underline">
                                <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M4 7H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M6 7V18C6 19.6569 7.34315 21 9 21H15C16.6569 21 18 19.6569 18 18V7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                        <path d="M9 5C9 3.89543 9.89543 3 11 3H13C14.1046 3 15 3.89543 15 5V7H9V5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </g>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- pagination -->
    <div class="mt-5">
        {{ $data->links() }}
    </div>
</div>

@endsection