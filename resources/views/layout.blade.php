@php
$siteName = "DA Freepng";
$siteTitle = "Free PNG Download : Digital Apnao";
$siteDescription = "Discover a treasure trove of high-quality, free PNG images with transparent backgrounds at Da freepng. Explore and download stunning graphics for your creative projects effortlessly.";
$keyWords= "Da freepng, png, free png, digitalapnao png, download free png, free png images, transparent png, free png images, png download, download free png, hd png, high quality png";
$iconPath = "/images/icon.png";
$logoPath = "/images/logo.webp";

@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $siteDescription }}">
    <meta name="keywords" content="@yield('keywords', $keyWords)">

    <!-- Open Graph (OG) meta tags for social media -->
    <meta property="og:title" content="{{ $siteTitle }}">
    <meta property="og:description" content="{{ $siteDescription  }}">
    <meta property="og:image" content="@yield('iconPath', $iconPath)">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="image website">

    <!-- Favicon -->
    <link rel="icon" href="{{ $iconPath }}" type="image/webp">

    <!-- font awe -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- other links -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <title>@yield("title", $siteTitle)</title>

    <!-- tailwind css -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900&display=swap');
    </style>

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="flex min-h-screen flex-col">
    <header class="sticky top-0 left-0 z-50">
        @include("include.nav")
    </header>
    <main class="flex-1 overflow-auto relative">
        @yield("section")
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-2890677304009204" data-ad-slot="6291010718" data-ad-format="auto" data-full-width-responsive="true"></ins>
    </main>
    @include("include.footer")

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-NKK8YZ0PD2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-NKK8YZ0PD2');
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script>
        const searchToggle = document.getElementById("searchToggle")
        const searchSection = document.getElementById("searchSection")

        searchToggle.addEventListener("click", () => {
            searchSection.classList.toggle("hidden")
        })
    </script>
</body>

</html>