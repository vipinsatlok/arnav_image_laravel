<div class="border border-gray-300 w-full overflow-hidden">
    <div class="relative w-full">
        <div>
            <img class="opacity-20 w-full" src="{{ asset('/images/png-bg.webp') }}" alt="">
        </div>
        <div class="absolute top-0 left-0 flex justify-center items-center w-full h-full overflow-hidden">
            <a href="/{{  Str::beforeLast($d->file_name, '.'); }}">
                <img loading="Loading..." oncontextmenu="return false;" class="w-full p-5 transition-all hover:scale-105" src="{{ asset('/uploads/'.$d->file_name) }}" alt="image description">
            </a>
        </div>
    </div>
    <div class="flex text-[15px] justify-between pt-3 px-5 bg-gray-300">
        {{ $d->title }}
    </div>
    <div class="flex justify-between text-sm bg-gray-300 px-5 pt-1 pb-3">
        <div class="flex flex-col text-gray-700 ">
            <span class="text-xs">
                SIZE : {{ $d->file_size }} KB
            </span>
            <span class="text-xs">
                @php
                // Convert the string into an array
                $dimensions = explode(',', $d->file_dimention);

                // Get the width and height from the array
                $width = $dimensions[0];
                $height = $dimensions[1];

                // Format the dimensions as "widthxheight"
                $formattedDimensions = $width . ' x' . $height;
                @endphp
                Dimention : {{ $formattedDimensions }}
            </span>
        </div>
        <a href="/{{  Str::beforeLast($d->file_name, '.'); }}">
            <div>
                <svg class="border-blue-900" width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M8 22.0002H16C18.8284 22.0002 20.2426 22.0002 21.1213 21.1215C22 20.2429 22 18.8286 22 16.0002V15.0002C22 12.1718 22 10.7576 21.1213 9.8789C20.3529 9.11051 19.175 9.01406 17 9.00195M7 9.00195C4.82497 9.01406 3.64706 9.11051 2.87868 9.87889C2 10.7576 2 12.1718 2 15.0002L2 16.0002C2 18.8286 2 20.2429 2.87868 21.1215C3.17848 21.4213 3.54062 21.6188 4 21.749" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"></path>
                        <path d="M12 2L12 15M12 15L9 11.5M12 15L15 11.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>
        </a>
    </div>
</div>