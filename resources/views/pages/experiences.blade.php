@extends('layouts.mainpage-layout')

@section('content')
    <div class="w-full h-full flex justify-center px-4">
        <div class="flex w-full max-w-screen-xl gap-10 items-start mt-40">
            {{-- Side Menu --}}
            <div
                class="bg-white/10 backdrop-blur-md rounded-2xl w-72 h-fit shadow-lg shadow-black text-black space-y-6 flex flex-col mr-4">
                <ul>
                    <li>
                        <a class="bg-white/10 backdrop-blur-md rounded-2xl p-3 m-5 flex justify-center text-black
                            {{ isset($section) && $section === 'technohome' ? 'shadow-inner shadow-black' : 'shadow-sm shadow-black' }}"
                            href="{{ route('experiences.technohome') }}">
                            Technohome B.V.
                        </a>
                    </li>
                    <li>
                        <a class="bg-white/10 backdrop-blur-md rounded-2xl p-3 m-5 flex justify-center text-black
                            {{ isset($section) && $section === 'xingredient' ? 'shadow-inner shadow-black' : 'shadow-sm shadow-black' }}"
                            href="{{ route('experiences.xingredient') }}">
                            X-Ingredient
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Main Content --}}
            <div class="flex-1">
                @if (isset($section) && $section === 'technohome')
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-lg shadow-black text-black space-y-6 flex flex-col items-center">
                        <h1 class="font-bold text-4xl">Stage Leerjaar 2</h1>
                        <span class="h-1 bg-black w-full"></span>
                        <img class="h-30" src="/images/logos/Technohome-logo.png" alt="">

                        <h2 class="text-2xl">Bedrijfsinfo:</h2>
                        <p>Technohome beschikt over 25 jaar ervaring in de woning automatisering (Domotica, beveiliging en
                            meerkamer audio/video). En Wij bieden onze klanten hulp bij het maken van de juiste keuze in de
                            vele nieuwe technologieën. Uw wensen als gebruiker staan daarbij voorop.</p>

                        <h2 class="text-2xl">What have I done?</h2>
                        <h3 class="text-xl">In general:</h3>
                        <p>I worked on several assignments, such as designing a layout for a small screen that would be
                            installed in a hotel (Steenenburg). This kind of project can take a few weeks to complete. What
                            I found most challenging was combining animations and colors effectively, especially since I'm
                            not a designer.</p>

                        <h3 class="text-xl">Software:</h3>
                        <p>I have learned to work with all the programs mentioned above, but I have spent the most time
                            using Visual Studio Code. I create standard HTML and CSS or SCSS layouts for the screens and add
                            functionalities using JavaScript. Most of these functionalities are connected to a processor,
                            which allows me to control the screen or anything it operates remotely through the processor's
                            debugger in the Toolbox program.</p>

                        <h3 class="text-xl">Details:</h3>
                        <p>To go more in-depth about what I did from start to finish, let's begin at the beginning. I
                            started by learning the software they were already using. They had me create a simple layout and
                            use it to control a few lights and view some cameras.</p>
                    </div>
                @endif

                @if (isset($section) && $section === 'xingredient')
                    <div
                        class="bg-white/10 backdrop-blur-md rounded-2xl p-8 shadow-lg shadow-black text-black space-y-6 flex flex-col items-center">
                        <h1 class="font-bold text-4xl">Stage Leerjaar 3</h1>
                        <span class="h-1 bg-black w-full"></span>
                        <img class="h-20" src="/images/logos/xpnglogo.png" alt="X-Ingredient Logo">

                        <h2 class="text-2xl">Over het Bedrijf:</h2>
                        <p>X-Ingredient is een creatief marketingcommunicatiebureau met bijna 30 jaar ervaring. Ze
                            ontwikkelen strategische campagnes, merkactivaties en digitale oplossingen voor grote merken
                            binnen retail, FMCG en andere sectoren. Hun focus ligt op merkbeleving, ondersteund door slimme
                            technologie en data.</p>

                        <h2 class="text-2xl">Mijn Werkzaamheden:</h2>

                        <h3 class="text-xl">Front-End Ontwikkeling:</h3>
                        <p>Ik werkte mee aan de front-end van verschillende projecten, waaronder het bouwen van interactieve
                            UI-componenten, het toepassen van SCSS voor styling, en het zorgen voor responsive design. Eén
                            van de grotere projecten was de Mars – M&M’s campagnepagina, waar ik verantwoordelijk was voor
                            de opbouw van de structuur en de styling van interactieve elementen.</p>

                        <h3 class="text-xl">Back-End Ontwikkeling:</h3>
                        <p>Naarmate mijn stage vorderde, heb ik me ook verdiept in back-end development. Ik hielp bij het
                            opzetten van API-koppelingen en werkte met databases om dataflows te optimaliseren binnen
                            projecten. Dit gaf me inzicht in hoe front-end en back-end met elkaar communiceren in een
                            productieomgeving.</p>

                        <h3 class="text-xl">Project: "Detailed Hours Overview" Tool</h3>
                        <p>Een van de tools die ik zelfstandig heb gebouwd, was een intern urenregistratiesysteem genaamd
                            “Detailed Hours Overview”. Deze tool maakte het mogelijk om gemakkelijk uren te importeren,
                            bewerken en exporteren. Ik ontwikkelde zowel de front-end interface als de back-end logica,
                            inclusief validatie en verwerking van CSV/Excel-bestanden. Dit werd actief gebruikt door het
                            team voor betere urenoverzichten en rapportages.</p>

                        <h3 class="text-xl">Tools & Technologieën:</h3>
                        <p>Ik heb gewerkt met onder andere: Visual Studio Code, Git, JavaScript, SCSS, PHP, Laravel, en
                            MySQL. Voor de “Hours Overview” tool gebruikte ik ook Laravel’s export/import packages en
                            schreef ik custom scripts voor data parsing.</p>

                        <h3 class="text-xl">Persoonlijke Ontwikkeling:</h3>
                        <p>Mijn stage bij X-Ingredient was super leerzaam. Ik heb niet alleen mijn technische kennis flink
                            uitgebreid, maar ook geleerd om in een creatief team samen te werken, kritisch naar mijn eigen
                            code te kijken en echt waarde toe te voegen aan projecten.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
