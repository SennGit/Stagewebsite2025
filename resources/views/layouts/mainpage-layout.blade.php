<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Senn Portfolio</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />


    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body
    class="flex flex-col items-center justify-center min-w-screen min-h-screen bg-[url('/public/images/backgrounds/cool_background3.jpg')] bg-no-repeat bg-cover">
    @include('components.navbar')

    <main class="">
        @yield('content')
    </main>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.6.0/dist/confetti.browser.min.js"></script>
<script>
    function secretFunction() {
        confetti({
            particleCount: 400,
            spread: 500,
            origin: {
                y: 0.0
            }
        });
        console.log('%c🎉 BOOM! Confetti explosion! 🎉', 'color: hotpink; font-size: 16px; font-weight: bold;');
    }

    console.log('%cYOU FOUND THE EASTER EGG! 🎉', 'color: gold; font-weight: bold; font-size: 16px;');
    console.log('%cType this -> %csecretFunction()', 'color: #999;',
        'color: dodgerblue; text-decoration: underline; cursor: pointer;');
</script>
