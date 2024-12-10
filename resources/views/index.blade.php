<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('http://192.168.143.9:8080/images/FOND_ACCUEIL.png');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute flex h-screen justify-start pl-5 sm:px-10" style="flex-direction: column;">
            <div class="relative top-[40%]">
                <h1 class="text-4xl md:text-6xl font-bold text-white titre-font">
                    Maison Moël
                </h1>
                <p class="text-md md:text-2xl font-bold text-white text-left titre-font">
                    Maison Moël, un festin éternel.
                </p>
            </div>
        </div>
    </div>

    <div class="py-6 px-48">
        <h1 class="place-self-center text-4xl md:text-5xl text-[#FFEB99] titre-font pb-9">
            À propos de nous
        </h1>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-0">
            <div class="h-full place-content-center">
                <p class="text-lg text-white">
                    Bienvenue à la Maison Moël, un lieu où la tradition culinaire rencontre l'innovation moderne. Situé au cœur de Camoël, notre restaurant vous offre une expérience gastronomique unique, alliant des ingrédients locaux de la plus haute qualité à des techniques culinaires raffinées.
                </p>
                <p class="text-lg text-white mt-4">
                    Notre chef, DELASAGNA, est passionné par la création de plats qui éveillent les sens et racontent une histoire. Chaque plat est préparé avec soin et attention, en mettant l'accent sur la fraîcheur et la saveur. Que vous soyez ici pour un dîner intime ou une célébration spéciale, nous nous engageons à rendre votre visite inoubliable.
                </p>
                <p class="text-lg text-white mt-4">
                    À la Maison Moël, nous croyons que chaque repas est une occasion de se connecter, de célébrer et de savourer la vie. Nous vous invitons à découvrir notre menu, à explorer nos sélections de vins et à profiter de l'ambiance chaleureuse et accueillante de notre restaurant.
                </p>
            </div>
            <div class="flex justify-center lg:justify-center">
                <img src="http://192.168.143.9:8080/images/CHEF_DELASAGNA.png" class="rounded-full border-8 border-[#FFEB99]" alt="Chef DELASAGNA" />
            </div>
        </div>
    </div>

    <hr class="w-96 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">
    
    <div class="grid grid-cols-1 pt-2 pb-6">
        <h1 class="place-self-center text-4xl md:text-5xl text-[#FFEB99] titre-font">
            Nos sélections
        </h1>
        <div class="pt-6 pb-2 md:px-[6rem] lg:px-[12rem]">
            <swiper-container class="mySwiper" slides-per-view="4"
            space-between="30" free-mode="true" autoplay-delay="2500" autoplay-disable-on-interaction="false" mousewheel="true">
                <swiper-slide>
                    <x-card-accueil>
                        <img class="rounded-t-lg" src="{{ asset('image_test/mousse.png') }}" alt="" />
                        <p class="text-sm text-center text-gray-500 mt-3">La mousse au chocolat du Chef</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <x-badge>Édition limitée • 15€</x-badge>
                        <img class="rounded-t-lg" src="{{ asset('image_test/boeuf_curry.png') }}" alt="" />
                        <p class="text-sm text-center text-gray-500 mt-3">Le boeuf Cucurry</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <img class="rounded-t-lg" src="{{ asset('image_test/mousse.png') }}" alt="" />
                        <p class="text-sm text-center text-gray-500 mt-3">La mousse au chocolat du Chef</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <x-badge>Édition limitée • 15€</x-badge>
                        <img class="rounded-t-lg" src="{{ asset('image_test/boeuf_curry.png') }}" alt="" />
                        <p class="text-sm text-center text-gray-500 mt-3">Le boeuf Cucurry</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <img class="rounded-t-lg" src="{{ asset('image_test/mousse.png') }}" alt="" />
                        <p class="text-sm text-center text-gray-500 mt-3">La mousse au chocolat du Chef</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <x-badge>Édition limitée • 15€</x-badge>
                        <img class="rounded-t-lg" src="{{ asset('image_test/boeuf_curry.png') }}" alt="" />
                        <p class="text-sm text-center text-gray-500 mt-3">Le boeuf Cucurry</p>
                    </x-card-accueil>
                </swiper-slide>
            </swiper-container>
        </div>

        <hr class="w-96 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10 dark:bg-gray-700">

        <div class="pt-2 pb-6 px-48">
            <h1 class="place-self-center text-4xl md:text-5xl text-[#FFEB99] titre-font pb-6">
                Contactez-nous
            </h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-0">
                <div class="mr-8">
                    <div id="map" class="mx-auto w-full px-6 h-96"></div>
                </div>

                <div class="h-full place-content-center">
                    <x-card-contact>
                        <h3 class="text-4xl text-white">
                            Maison Moël
                        </h3>
                        <p class="text-lg text-white mt-4">
                            Adresse : <b><a href="https://www.google.fr/maps/place/10+Rue+Paul+Ladmirault,+56130+Camo%C3%ABl/@47.4813263,-2.4009264,17z/data=!3m1!4b1!4m6!3m5!1s0x480ff442c240b0cd:0xeae3d7467006dc1c!8m2!3d47.4813228!4d-2.3960555!16s%2Fg%2F11c2hpv28t?entry=ttu&g_ep=EgoyMDI0MTIwOC4wIKXMDSoASAFQAw%3D%3D" target="_blank">10 Rue Paul Ladmirault, 56130 Camoël, France</a></b>
                        </p>
                        <p class="text-lg text-white mt-4">
                            Téléphone : <b><a href="tel:36303630">+33 2 99 90 90 90</a></b>
                        </p>
                        <p class="text-lg text-white mt-4">
                            Email : <b><a href="mailto:contact@maisonmoel.fr">contact@maisonmoel.fr</a></b>
                        </p>
                    </x-card-contact>
                </div>
            </div>
        </div>
            



    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
        const map = L.map('map').setView([47.481413, -2.396081], 16);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
        }).addTo(map);

        const customIcon = L.icon({
            iconUrl: "http://192.168.143.9:8080/images/red_marker.svg",
            iconSize: [30, 40],
            iconAnchor: [15, 40],
            popupAnchor: [0, -40]
        });

        L.marker([47.481413, -2.396081], { icon: customIcon }).addTo(map)
            .bindPopup('Camoël, France');
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </div>
</x-header>
