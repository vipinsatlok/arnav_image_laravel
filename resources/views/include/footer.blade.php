@php
$facebook = "https://www.facebook.com/digitalapnao";
$pinterest = "https://www.pinterest.com/digitalapnao";
$insatgram = "https://www.instagram.com/digitalapnao";
$teligram = "https://t.me/digitalapnao_in";

@endphp

<footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl">
        <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
            <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a href="/">{{ $siteName  }}</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 justify-start md:justify-center md:mt-0 space-x-5 rtl:space-x-reverse">
                <a href="{{ $facebook }}" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 8 19">
                        <path fill-rule="evenodd" d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z" clip-rule="evenodd" />
                    </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="{{ $teligram }}" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="text-gray-400 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" fill="currentColor">
                        <path d="M46.137,6.552c-0.75-0.636-1.928-0.727-3.146-0.238l-0.002,0C41.708,6.828,6.728,21.832,5.304,22.445	c-0.259,0.09-2.521,0.934-2.288,2.814c0.208,1.695,2.026,2.397,2.248,2.478l8.893,3.045c0.59,1.964,2.765,9.21,3.246,10.758	c0.3,0.965,0.789,2.233,1.646,2.494c0.752,0.29,1.5,0.025,1.984-0.355l5.437-5.043l8.777,6.845l0.209,0.125	c0.596,0.264,1.167,0.396,1.712,0.396c0.421,0,0.825-0.079,1.211-0.237c1.315-0.54,1.841-1.793,1.896-1.935l6.556-34.077	C47.231,7.933,46.675,7.007,46.137,6.552z M22,32l-3,8l-3-10l23-17L22,32z" />
                    </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="{{ $insatgram }}" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg fill="currentColor" class="h-4 w-4" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <defs> </defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill-rule="evenodd" fill="currentColor">
                                <g id="Dribbble-Light-Preview" transform="translate(-340.000000, -7439.000000)">
                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                        <path d="M289.869652,7279.12273 C288.241769,7279.19618 286.830805,7279.5942 285.691486,7280.72871 C284.548187,7281.86918 284.155147,7283.28558 284.081514,7284.89653 C284.035742,7285.90201 283.768077,7293.49818 284.544207,7295.49028 C285.067597,7296.83422 286.098457,7297.86749 287.454694,7298.39256 C288.087538,7298.63872 288.809936,7298.80547 289.869652,7298.85411 C298.730467,7299.25511 302.015089,7299.03674 303.400182,7295.49028 C303.645956,7294.859 303.815113,7294.1374 303.86188,7293.08031 C304.26686,7284.19677 303.796207,7282.27117 302.251908,7280.72871 C301.027016,7279.50685 299.5862,7278.67508 289.869652,7279.12273 M289.951245,7297.06748 C288.981083,7297.0238 288.454707,7296.86201 288.103459,7296.72603 C287.219865,7296.3826 286.556174,7295.72155 286.214876,7294.84312 C285.623823,7293.32944 285.819846,7286.14023 285.872583,7284.97693 C285.924325,7283.83745 286.155174,7282.79624 286.959165,7281.99226 C287.954203,7280.99968 289.239792,7280.51332 297.993144,7280.90837 C299.135448,7280.95998 300.179243,7281.19026 300.985224,7281.99226 C301.980262,7282.98483 302.473801,7284.28014 302.071806,7292.99991 C302.028024,7293.96767 301.865833,7294.49274 301.729513,7294.84312 C300.829003,7297.15085 298.757333,7297.47145 289.951245,7297.06748 M298.089663,7283.68956 C298.089663,7284.34665 298.623998,7284.88065 299.283709,7284.88065 C299.943419,7284.88065 300.47875,7284.34665 300.47875,7283.68956 C300.47875,7283.03248 299.943419,7282.49847 299.283709,7282.49847 C298.623998,7282.49847 298.089663,7283.03248 298.089663,7283.68956 M288.862673,7288.98792 C288.862673,7291.80286 291.150266,7294.08479 293.972194,7294.08479 C296.794123,7294.08479 299.081716,7291.80286 299.081716,7288.98792 C299.081716,7286.17298 296.794123,7283.89205 293.972194,7283.89205 C291.150266,7283.89205 288.862673,7286.17298 288.862673,7288.98792 M290.655732,7288.98792 C290.655732,7287.16159 292.140329,7285.67967 293.972194,7285.67967 C295.80406,7285.67967 297.288657,7287.16159 297.288657,7288.98792 C297.288657,7290.81525 295.80406,7292.29716 293.972194,7292.29716 C292.140329,7292.29716 290.655732,7290.81525 290.655732,7288.98792" id="instagram-[#167]"> </path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    <span class="sr-only">Insatgram</span>
                </a>
                <a href="{{ $pinterest }}" class="text-gray-400 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-4 h-4" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <g id="7935ec95c421cee6d86eb22ecd12951c">
                                <path style="display: inline;" d="M220.646,338.475C207.223,408.825,190.842,476.269,142.3,511.5 c-14.996-106.33,21.994-186.188,39.173-270.971c-29.293-49.292,3.518-148.498,65.285-124.059 c76.001,30.066-65.809,183.279,29.38,202.417c99.405,19.974,139.989-172.476,78.359-235.054 C265.434-6.539,95.253,81.775,116.175,211.161c5.09,31.626,37.765,41.22,13.062,84.884c-57.001-12.65-74.005-57.6-71.822-117.533 c3.53-98.108,88.141-166.787,173.024-176.293c107.34-12.014,208.081,39.398,221.991,140.376 c15.67,113.978-48.442,237.412-163.23,228.529C258.085,368.704,245.023,353.283,220.646,338.475z"> </path>
                            </g>
                        </g>
                    </svg>
                    <span class="sr-only">Insatgram</span>
                </a>
            </div>
        </div>
    </div>
</footer>