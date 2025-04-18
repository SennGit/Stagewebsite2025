@extends('layouts.mainpage-layout')

@section('content')
    <div class="w-full flex flex-col lg:flex-row justify-center items-start px-4 lg:space-x-8 space-y-10 lg:space-y-0 mt-10">

        <!-- About Section -->
        <div
            class="bg-white/10 backdrop-blur-md rounded-2xl p-8 w-full max-w-3xl shadow-lg shadow-black text-black space-y-6">
            <h1 class="text-4xl font-bold text-center font-mono">About Me</h1>
            <p class="text-lg leading-relaxed">
                Hey! I’m <span class="font-bold">Senn van den Bergh</span>, 19 years old and living in ’s-Hertogenbosch,
                Netherlands.
            </p>
            <p class="text-lg leading-relaxed">
                I’m in my third year of Software Development at <span class="font-semibold">Koning Willem I College</span>.
                I’ve been learning a lot the past few years, from basic coding to building full projects.
            </p>
            <p class="text-lg leading-relaxed">
                I like figuring stuff out, building websites, experimenting with new tech, and making things that work
                and look good. (Still working on the look good part 😅)
            </p>
            <p class="text-lg leading-relaxed">
                Right now, I mostly use Laravel, VueJS, and TailwindCSS. I've also dabbled into CMS's with FilamentPHP
                sometimes and I'm
                digging deeper into backend stuff like APIs and databases.
            </p>
            <p class="text-lg leading-relaxed">
                Outside of coding: gaming, music, chilling with friends, and building random side projects for fun.
            </p>
            <p class="text-lg leading-relaxed font-semibold">
                I'm open for any type of Part-time work.
            </p>
        </div>

        <!-- Tech Stack Section -->
        <div
            class="bg-white/10 backdrop-blur-md rounded-2xl p-8 w-full max-w-sm shadow-lg shadow-black text-black space-y-6">
            <h2 class="text-3xl font-bold text-center font-mono">Languages & Frameworks</h2>

            @php
                $tech = [
                    [
                        'name' => 'C#',
                        'logo' => './images/languages/csharp_icon.png',
                        'desc' => 'Windows Forms .NET',
                        'desc2' => '',
                    ],
                    [
                        'name' => 'Laravel',
                        'logo' => './images/languages/laravel-icon.png',
                        'desc' => 'Back-end WebDevelopment',
                        'desc2' => '(most used stack)',
                    ],
                    [
                        'name' => 'VueJS',
                        'logo' => './images/languages/vue-icon.png',
                        'desc' => 'Front-end WebDevelopment',
                        'desc2' => '(most used stack)',
                    ],
                    [
                        'name' => 'TailwindCSS',
                        'logo' => './images/languages/Tailwind_icon.png',
                        'desc' => 'Front-end WebDevelopment',
                        'desc2' => '(most used stack)',
                    ],
                    [
                        'name' => 'CSS3 & HTML5 & JS',
                        'logo' => './images/languages/HTMLCSSJS.png',
                        'desc' => 'Front-end WebDevelopment',
                        'desc2' => '',
                    ],
                ];
            @endphp

            @foreach ($tech as $item)
                <div
                    class="bg-white/10 backdrop-blur-2xl rounded-xl p-4 shadow-inner shadow-black text-black flex items-center space-x-4 max-h-18.5">
                    <img src="{{ $item['logo'] }}" alt="{{ $item['name'] }}" class="w-10 h-10">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $item['desc'] }}</p>
                        <p class="text-sm text-gray-600">{{ $item['desc2'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
