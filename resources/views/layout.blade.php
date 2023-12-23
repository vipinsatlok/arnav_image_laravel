@php
$siteName = "Arnav";
$siteTitle = "Free PNG Download : Digital Apnao";
$logoUrl = "https://flowbite.com/docs/images/logo.svg";
@endphp


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <title>@yield("title", $siteTitle)</title>

    @vite(['resources/css/app.css','resources/js/app.js'])

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

    @include("include.nav")
    <main class="flex-1">
        @yield("section")
    </main>
    @include("include.footer")
    <div class=""></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>