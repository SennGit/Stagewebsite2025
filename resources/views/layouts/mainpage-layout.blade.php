<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Senn Portfolio</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        #code-bg {
            position: fixed;
            inset: 0;
            width: 100vw;
            height: 100vh;
            pointer-events: none;
            z-index: 0;
        }

        .code-symbol {
            position: absolute;
            user-select: none;
            pointer-events: none;
            font-family: monospace;
            font-weight: 500;
            opacity: 0.85;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.08);
            z-index: 0;
            transition: transform 0.2s;
        }

        #body {
            z-index: 20;
            position: relative;
        }
    </style>
</head>

<body id="body" class="relative flex flex-col items-center justify-center min-w-full min-h-screen bg-gray-300">


    <div id="code-bg">
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
        <div class="code-symbol"></div>
    </div>

    @include('components.navbar')

    <main class="h-screen">
        @yield('content')
    </main>

    <script>
        const codeSymbols = [
            '{}', '</>', '()', '[]', '/*', '*/', '//', ';', '=>', '::',
            '<!-- -->', '<>', '&&', '||', '"', "'", '`', 'if', 'else', 'for', 'while',
        'return', 'var', 'let', 'const', 'function', '==', '===', '!=', '!==',
        '+', '-', '*', '/', '%', '++', '--', 'true', 'false', 'null', 'undefined'
    ];
    const shapes = Array.from(document.querySelectorAll('.code-symbol'));
    const viewport = () => ({
        w: window.innerWidth,
        h: window.innerHeight
    });

    const state = shapes.map(shape => {
        const symbol = codeSymbols[Math.floor(Math.random() * codeSymbols.length)];
        const baseSize = 25 + Math.random() * 12;

        shape.textContent = symbol;
        shape.style.fontSize = `${baseSize}px`;
        shape.style.color =
            `rgba(${80 + Math.floor(Math.random() * 100)},${80 + Math.floor(Math.random() * 100)},${80 + Math.floor(Math.random() * 100)},0.7)`;
        shape.style.whiteSpace = 'nowrap';

        return {
            el: shape,
            x: Math.random() * (viewport().w - baseSize * symbol.length * 0.8),
            y: Math.random() * (viewport().h - baseSize * 1.5),
            vx: (0.25 + Math.random() * 0.6) * (Math.random() < 0.5 ? 1 : -1),
            vy: (0.25 + Math.random() * 0.6) * (Math.random() < 0.5 ? 1 : -1),
            baseSize: baseSize,
            symbol: symbol,
            rotation: Math.random() * 360
        };
    });

    function animate() {
        const {
            w,
            h
        } = viewport();

        state.forEach(obj => {
            obj.x += obj.vx;
            obj.y += obj.vy;
            obj.rotation += obj.vx * 0.3;

            const elementWidth = obj.baseSize * obj.symbol.length * 0.7;
            if (obj.x <= 0 || obj.x + elementWidth >= w) {
                obj.vx *= -1;
                obj.x = Math.max(0, Math.min(obj.x, w - elementWidth));
            }

            if (obj.y <= 0 || obj.y + obj.baseSize * 1.5 >= h) {
                obj.vy *= -1;
                obj.y = Math.max(0, Math.min(obj.y, h - obj.baseSize * 1.5));
            }

            // Apply transformations
            obj.el.style.left = `${obj.x}px`;
            obj.el.style.top = `${obj.y}px`;
            obj.el.style.transform = `rotate(${obj.rotation}deg)`;
            });

            requestAnimationFrame(animate);
        }

        animate();

        window.addEventListener('resize', () => {
            const {
                w,
                h
            } = viewport();
            state.forEach(obj => {
                obj.x = Math.min(obj.x, w - obj.baseSize * obj.symbol.length * 0.8);
                obj.y = Math.min(obj.y, h - obj.baseSize * 1.5);
            });
        });
    </script>
</body>

</html>
