<!-- if success fully uploading -->
@if(session('success'))
@include("include.info", ['msg' => session('success')])
@endif

<!-- if any error then show in screen -->
@if ($errors->any())
<div class="flex w-full flex-col">
    @include("include.info", ['msg' => $errors->all()[0]])
</div>
@endif

<form id="uploadForm" class="w-full" method="post" enctype="multipart/form-data" action="{{ route('admin.image.store') }}">
    @csrf

    <div class="flex flex-col md:flex-row gap-5">
        <div id="image_show" class="w-full overflow-auto cursor-pointer hidden h-48 border-dashed rounded-lg border-2 mt-3 flex-col">
            <img src="" class="h-full" id="imageSet" alt="">
        </div>
        <div id="image_field" class="flex items-center mt-5 justify-center w-full">
            <label for="dropzone-file" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                    <svg class="w-8 h-8 mb-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                    </svg>
                    <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Click to upload</span> or drag and drop</p>
                    <p class="text-xs text-gray-500">Only PNG Image (MAX SIZE : 3MB)</p>
                </div>
                <input value="{{ old('file') }}" name="file" id="dropzone-file" type="file" class="hidden" />
            </label>
        </div>
        <div id="inputSec" class="w-full flex-col">
            <div class="fle flex-col mt-5 justify-center w-full">
                <input value="{{ old('title') }}" name="title" type="text" id="title" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter title of image">
            </div>
            <div class="fle flex-col mt-3 justify-center w-full">
                <input value="{{ old('tags') }}" name="tags" type="text" id="tags" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="Enter tags ex- apple, ram, menu">
            </div>
            <div class="my-5">
                <button id="button" type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">Upload now</button>
            </div>
        </div>
    </div>

</form>