<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="flex bg-[url(/public/images/cool_background.jpg)] bg-no-repeat bg-cover justify-center">
        <div class="bg-white/10 backdrop-blur-sm h-[30vh] w-[50%] flex mt-50 rounded-2xl flex-col p-20">
            <div class="flex flex-col">
                <h1 class="text-7xl text-white font-mono">Senn's Portfolio Website</h1>
                <p class="text-4xl ml-20 font-mono text-gray-600">Here are some socials</p>
            </div>
        </div>

    </body>
</html>
