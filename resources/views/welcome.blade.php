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
    <body class="flex items-center justify-center min-h-screen bg-[url('/public/images/cool_background3.jpg')] bg-no-repeat bg-cover">
        <div class="bg-white/10 backdrop-blur-sm rounded-2xl border border-white p-10 w-11/12 md:w-2/3 lg:w-1/2 shadow-lg">
          <div class="flex flex-col items-center space-y-6">
            <h1 class="text-5xl md:text-7xl text-white font-mono text-center text-shadow-sm">Senn's Portfolio</h1>
            <span class="relative top-[-30px] h-1 w-[44%] bg-white"></span>

            <div class="flex space-x-6 mt-4">
              <!-- GitHub -->
              <a href="https://github.com/SennGit" target="_blank" class="text-white hover:text-gray-700 transition">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 98 96" class="w-10 h-10">
                  <path fill="currentColor" fill-rule="evenodd" clip-rule="evenodd" d="M48.854 0C21.839 0 0 22 0 49.217c0 21.756 13.993 40.172 33.405 46.69 2.427.49 3.316-1.059 3.316-2.362 0-1.141-.08-5.052-.08-9.127-13.59 2.934-16.42-5.867-16.42-5.867-2.184-5.704-5.42-7.17-5.42-7.17-4.448-3.015.324-3.015.324-3.015 4.934.326 7.523 5.052 7.523 5.052 4.367 7.496 11.404 5.378 14.235 4.074.404-3.178 1.699-5.378 3.074-6.6-10.839-1.141-22.243-5.378-22.243-24.283 0-5.378 1.94-9.778 5.014-13.2-.485-1.222-2.184-6.275.486-13.038 0 0 4.125-1.304 13.426 5.052a46.97 46.97 0 0 1 12.214-1.63c4.125 0 8.33.571 12.213 1.63 9.302-6.356 13.427-5.052 13.427-5.052 2.67 6.763.97 11.816.485 13.038 3.155 3.422 5.015 7.822 5.015 13.2 0 18.905-11.404 23.06-22.324 24.283 1.78 1.548 3.316 4.481 3.316 9.126 0 6.6-.08 11.897-.08 13.526 0 1.304.89 2.853 3.316 2.364 19.412-6.52 33.405-24.935 33.405-46.691C97.707 22 75.788 0 48.854 0z"/>
                </svg>
              </a>


              <!-- LinkedIn -->
              <a href="https://www.linkedin.com/in/senn-van-den-bergh-63637b108/" target="_blank" class="text-white hover:text-blue-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M4.98 3.5C4.98 4.88 3.88 6 2.5 6S0 4.88 0 3.5 1.12 1 2.5 1 4.98 2.12 4.98 3.5zM.5 8.5h4v12h-4v-12zM7.5 8.5h3.5v1.75h.05c.49-.93 1.69-1.9 3.45-1.9 3.69 0 4.5 2.43 4.5 5.6v6.55h-4v-5.8c0-1.38-.03-3.16-2-3.16-2 0-2.3 1.53-2.3 3.05v5.9h-4v-12z"/>
                </svg>
              </a>

              <!-- Instagram -->
                <a href="https://instagram.com/senn_db073" target="_blank" class="text-white hover:text-pink-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2.2c3.2 0 3.6 0 4.8.1 1.2.1 1.9.3 2.4.5.6.2 1 .5 1.4.9.4.4.7.8.9 1.4.2.5.4 1.2.5 2.4.1 1.2.1 1.6.1 4.8s0 3.6-.1 4.8c-.1 1.2-.3 1.9-.5 2.4-.2.6-.5 1-.9 1.4-.4.4-.8.7-1.4.9-.5.2-1.2.4-2.4.5-1.2.1-1.6.1-4.8.1s-3.6 0-4.8-.1c-1.2-.1-1.9-.3-2.4-.5-.6-.2-1-.5-1.4-.9a3.5 3.5 0 01-.9-1.4c-.2-.5-.4-1.2-.5-2.4C2.2 15.6 2.2 15.2 2.2 12s0-3.6.1-4.8c.1-1.2.3-1.9.5-2.4.2-.6.5-1 .9-1.4.4-.4.8-.7 1.4-.9.5-.2 1.2-.4 2.4-.5C8.4 2.2 8.8 2.2 12 2.2zm0-2.2C8.7 0 8.2 0 7 .1c-1.3.1-2.3.3-3.2.7a5.8 5.8 0 00-2.1 1.4A5.8 5.8 0 00.3 4.3C0 5.2 0 6.2 0 7.5.1 8.8.1 9.3.1 12c0 2.7 0 3.2.1 4.5.1 1.3.3 2.3.7 3.2a5.8 5.8 0 001.4 2.1 5.8 5.8 0 002.1 1.4c.9.4 1.9.6 3.2.7C8.8 24 9.3 24 12 24s3.2 0 4.5-.1c1.3-.1 2.3-.3 3.2-.7a5.8 5.8 0 002.1-1.4 5.8 5.8 0 001.4-2.1c.4-.9.6-1.9.7-3.2.1-1.3.1-1.8.1-4.5s0-3.2-.1-4.5c-.1-1.3-.3-2.3-.7-3.2a5.8 5.8 0 00-1.4-2.1A5.8 5.8 0 0019.7.8c-.9-.4-1.9-.6-3.2-.7C15.2 0 14.7 0 12 0zM12 5.8a6.2 6.2 0 016.2 6.2A6.2 6.2 0 0112 18.2 6.2 6.2 0 015.8 12 6.2 6.2 0 0112 5.8zm0-1.8a8 8 0 100 16 8 8 0 000-16zm6.4-1.2a1.4 1.4 0 100 2.8 1.4 1.4 0 000-2.8z"/>
                    </svg>
                </a>
            </div>
          </div>
        </div>
      </body>
</html>
