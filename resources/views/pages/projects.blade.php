@extends('layouts.mainpage-layout')

@section('content')
    <div class="flex relative justify-center px-4 mt-30">
        <div
            class="bg-white/10 backdrop-blur-md rounded-2xl mb-20 p-8 max-w-4xl shadow-md shadow-black text-black space-y-6 flex flex-col items-center text-left">

            <h1 class="text-4xl font-bold text-center font-mono">Projects</h1>
            <span class="h-1 bg-black w-30 relative top-[-25px]"></span>
            <!-- Project 1 -->
            <div>
                <h2 class="text-2xl font-bold mb-2">Uren Registratie WebApp X-Ingredient</h2>
                <p class="mb-4">
                    Ik heb bij X-Ingredient een web applicatie gebouwd om een export van hun urensysteem te kunnen
                    importeren naar mijn website, die wordt vervolgens in een database toegevoegd en kun je een verbeterd
                    overzicht van de uren zien. Je kunt zien wie aan welke projecten heeft gewerkt, hoeveel uren per dag,
                    wie zijn uren nog niet heeft ingevuld of afwezig was etc. Ook een login functie voor alle medewerkers
                    om zelf te kunnen kijken naar hun eigen uren.
                </p>

                <div x-data="{
                    current: 0,
                    images: [
                        '/images/projecten/UrenWebsite/LoginPageX.png',
                        '/images/projecten/UrenWebsite/LoginPage2X.png',
                        '/images/projecten/UrenWebsite/HomepageX.png',
                        '/images/projecten/UrenWebsite/UrenOverzichtX.png',
                        '/images/projecten/UrenWebsite/filterPopupX.png',
                        '/images/projecten/UrenWebsite/ExportPopupX.png',
                        '/images/projecten/UrenWebsite/MissendeUrenX.png'
                    ]
                }" class="relative w-full">
                    <div class="overflow-hidden rounded-xl shadow-lg max-h-[500px]">
                        <template x-for="(image, index) in images" :key="index">
                            <img x-show="current === index" :src="image"
                                class="w-full object-contain transition-all duration-500 max-h-[500px]" />
                        </template>
                    </div>
                    <button @click="current = (current === 0) ? images.length - 1 : current - 1"
                        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black/30 text-white p-2 rounded-full hover:bg-black/50">
                        &#8592;
                    </button>
                    <button @click="current = (current === images.length - 1) ? 0 : current + 1"
                        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black/30 text-white p-2 rounded-full hover:bg-black/50">
                        &#8594;
                    </button>
                    <div class="flex justify-center gap-2 mt-3">
                        <template x-for="(image, index) in images" :key="index">
                            <div @click="current = index"
                                :class="{
                                    'bg-white': current === index,
                                    'bg-gray-400': current !== index
                                }"
                                class="w-3 h-3 rounded-full cursor-pointer"></div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div>
                <h2 class="text-2xl font-bold mb-2">Crestron domotica HTML5 interface Steenenburg</h2>
                <p class="mb-4">
                    Ik heb bij Technohome uitgevonden hoe ik HTML5 kon gebruiken op de schermpjes die hun gebruiken,
                    hierbij heb ik een layout gemaakt en JavaScript met code om heel makkelijk en eenvoudig connecties aan
                    de button toe te kunnen voegen. Het eerste stuk code en de foto's zijn van de layout die gaat worden
                    gebruikt bij Steenenburg.
                </p>

                <div x-data="{
                    current: 0,
                    images: [
                        '/images/projecten/crestron/HomeWhiteKlein.jpg',
                        '/images/projecten/crestron/HomeDarkKlein.jpg',
                        '/images/projecten/crestron/verlichtingPageKlein.jpg',
                        '/images/projecten/crestron/advancedPageKlein.jpg'
                    ]
                }" class="relative w-full">
                    <div class="overflow-hidden rounded-xl shadow-lg max-h-[500px]">
                        <template x-for="(image, index) in images" :key="index">
                            <img x-show="current === index" :src="image"
                                class="w-full object-contain transition-all duration-500 max-h-[500px]" />
                        </template>
                    </div>
                    <button @click="current = (current === 0) ? images.length - 1 : current - 1"
                        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black/30 text-white p-2 rounded-full hover:bg-black/50">
                        &#8592;
                    </button>
                    <button @click="current = (current === images.length - 1) ? 0 : current + 1"
                        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black/30 text-white p-2 rounded-full hover:bg-black/50">
                        &#8594;
                    </button>
                    <div class="flex justify-center gap-2 mt-3">
                        <template x-for="(image, index) in images" :key="index">
                            <div @click="current = index"
                                :class="{
                                    'bg-white': current === index,
                                    'bg-gray-400': current !== index
                                }"
                                class="w-3 h-3 rounded-full cursor-pointer"></div>
                        </template>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div>
                <h2 class="text-2xl font-bold mb-2">M&M Campaign Front-end</h2>
                <p class="mb-4">
                    Voor dit project heb ik gewerkt aan de frontend van een winactie voor het merk Mars. De website is
                    gebouwd met Vue.js en zorgt ervoor dat deelnemers eenvoudig kunnen meedoen. Ik heb me vooral gefocust
                    op een soepele gebruikerservaring en een strak design dat past bij de uitstraling van Mars.
                    <br><br>
                    Naast de basisfunctionaliteiten heb ik ook gezorgd voor dynamische elementen, zoals animaties en een
                    interactieve interface, zodat alles er niet alleen goed uitziet, maar ook prettig aanvoelt voor de
                    gebruiker. Het was een toffe ervaring om mee te werken aan een project voor zo’n groot merk!
                </p>

                <div x-data="{
                    current: 0,
                    images: [
                        '/images/projecten/mnm/mnmProject-pic-1.png',
                        '/images/projecten/mnm/mnmProject-pic-2.png',
                        '/images/projecten/mnm/mnmProject-pic-3.png',
                        '/images/projecten/mnm/mnmProject-pic-4.png',
                        '/images/projecten/mnm/mnmProject-pic-5.png'
                    ]
                }" class="relative w-full">
                    <div class="overflow-hidden rounded-xl shadow-lg max-h-[500px]">
                        <template x-for="(image, index) in images" :key="index">
                            <img x-show="current === index" :src="image"
                                class="w-full object-contain transition-all duration-500 max-h-[500px]" />
                        </template>
                    </div>
                    <button @click="current = (current === 0) ? images.length - 1 : current - 1"
                        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black/30 text-white p-2 rounded-full hover:bg-black/50">
                        &#8592;
                    </button>
                    <button @click="current = (current === images.length - 1) ? 0 : current + 1"
                        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black/30 text-white p-2 rounded-full hover:bg-black/50">
                        &#8594;
                    </button>
                    <div class="flex justify-center gap-2 mt-3">
                        <template x-for="(image, index) in images" :key="index">
                            <div @click="current = index"
                                :class="{
                                    'bg-white': current === index,
                                    'bg-gray-400': current !== index
                                }"
                                class="w-3 h-3 rounded-full cursor-pointer"></div>
                        </template>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
