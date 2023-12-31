@php
function getActiveClass($pageName = "") {
$con = request()->is($pageName);
$class = $con ? "block py-2 px-3 text-white bg-orange-500 md:bg-transparent md:text-blue-700 md:p-0" : "block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-500 md:p-0";
return $class;
}
@endphp

<nav class="bg-white border-gray-200">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ $logoPath }}" class="h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap">{{ $siteName }}</span>
        </a>
        <button data-collapse-toggle="navbar-user" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-user" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-300 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white md:dark:bg-gray-900">
                @foreach ($navLinks as $navLink)
                <li class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent hover:text-orange-500 md:p-0">
                    <a href="{{ url($navLink['slug']) }}">
                        {{ $navLink['title'] }}
                    </a>
                </li>
                @endforeach

                <li class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-500 md:p-0">
                    <a href="mailto:contact@digitalapnao.com?subject=Hello">
                        {{ 'Contact' }}
                    </a>
                </li>
                
                @auth
                <li class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-500 md:p-0">
                    <a href="{{ route('admin.image') }}">
                        {{ 'Admin' }}
                    </a>
                </li>

                <li class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-orange-500 md:p-0">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <a>
                            <button type="submit">
                                {{ 'Logout' }}
                            </button>
                        </a>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
    @if (!request()->route()->named('admin.*'))
    <div class="max-w-screen-xl w-full flex flex-wrap items-center justify-between mx-auto p-4">
        @include("include.search")
    </div>
    @endif
</nav>