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
                I’ve been learning a lot the past few years, from basic coding to building full projects, and I honestly
                enjoy it way more than I expected.
            </p>
            <p class="text-lg leading-relaxed">
                I like figuring stuff out — building websites, experimenting with new tech, and making things that work
                *and* look good. (Still working on the second part 😅)
            </p>
            <p class="text-lg leading-relaxed">
                Right now, I mostly use Laravel, JavaScript, and TailwindCSS. I also mess with React sometimes and I'm
                digging deeper into backend stuff like APIs and databases.
            </p>
            <p class="text-lg leading-relaxed">
                Outside of coding: gaming, music, chilling with friends, and building random side projects for fun.
            </p>
            <p class="text-lg leading-relaxed font-semibold">
                I'm open for internships, freelance work, or just connecting with other devs. Let’s chat!
            </p>
        </div>

        <!-- Tech Stack Section -->
        <div
            class="bg-white/10 backdrop-blur-md rounded-2xl p-8 w-full max-w-sm shadow-lg shadow-black text-black space-y-6">
            <h2 class="text-3xl font-bold text-center font-mono">Languages & Frameworks</h2>

            @php
                $tech = [
                    [
                        'name' => 'C# (Windows Forms .NET)',
                        'logo' => '/path/to/logo-laravel.svg',
                        'desc' => 'TESTY WESTY',
                    ],
                    [
                        'name' => 'Laravel',
                        'logo' => '/path/to/logo-js.svg',
                        'desc' => 'KAI IS KANKER ZESTY',
                    ],
                    [
                        'name' => 'CSS3 & HTML5 & JS',
                        'logo' => '/public/images/HTMLCSSJS.png',
                        'desc' => 'LUUK HOUD VAN MANNEN',
                    ],
                    [
                        'name' => 'VueJS',
                        'logo' => '/path/to/vuejs.svg',
                        'desc' => 'EMRAH GA IK AANRANDEN',
                    ],
                ];
            @endphp

            @foreach ($tech as $item)
                <div
                    class="bg-white/10 backdrop-blur-2xl rounded-xl p-4 shadow-inner shadow-black text-black flex items-center space-x-4">
                    <img src="{{ $item['logo'] }}" alt="{{ $item['name'] }}" class="w-10 h-10">
                    <div>
                        <h3 class="text-lg font-semibold">{{ $item['name'] }}</h3>
                        <p class="text-sm text-gray-600">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
