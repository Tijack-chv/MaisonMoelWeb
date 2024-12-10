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
        <h1 class="place-self-center text-center text-4xl md:text-5xl text-[#FFEB99] titre-font pb-9">
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

    <hr class="w-96 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10">
    
    <div class="grid grid-cols-1 pt-2 pb-6">
        <h1 class="place-self-center text-center text-4xl md:text-5xl text-[#FFEB99] titre-font">
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

        <hr class="w-96 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10">

        <div class="pt-2 pb-6 px-48">
            <h1 class="place-self-center text-center text-4xl md:text-5xl text-[#FFEB99] titre-font pb-6">
                Contactez-nous
            </h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-0">
                <div class="mr-8">
                    <div id="map" class="mx-auto w-full px-6 h-96"></div>
                </div>

                <div class="h-full place-content-center">
                    <x-card-contact title="ml-8">
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

        <hr class="w-96 h-1 mx-auto my-4 bg-gray-100 border-0 rounded md:my-10">

        <div class="pt-2 pb-6 px-48">
            <h1 class="place-self-center text-center text-4xl md:text-5xl text-[#FFEB99] titre-font pb-6">
                Vos avis
            </h1>
            <x-card-contact title="mx-auto w-full mb-8">
                <div class="flex justify-center mb-2">
                    <div class="flex">
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">4.95/5</p>
                    </div>
                </div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 text-center">1,745 global ratings</p>
                <div class="grid grid-cols-1">
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">5 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 70%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">70%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">4 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 20%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">20%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">3 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 5%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">5%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">2 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 3%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">3%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">1 étoile</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: 2%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">2%</span>
                    </div>
                </div>
            </x-card-contact>

            <x-card-contact title="mx-auto w-full">
                <article>
                    <div class="flex items-center mb-4">
                        <img class="w-10 h-10 me-4 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
                        <div class="font-medium dark:text-white">
                            <p>Jese Leos <time datetime="2014-08-16 19:00" class="block text-sm text-gray-500 dark:text-gray-400">Joined on August 2014</time></p>
                        </div>
                    </div>
                    <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                        </svg>
                        <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3>
                    </div>
                    <footer class="mb-5 text-sm text-gray-500 dark:text-gray-400"><p>Reviewed in the United Kingdom on <time datetime="2017-03-03 19:00">March 3, 2017</time></p></footer>
                    <p class="mb-2 text-gray-500 dark:text-gray-400">This is my third Invicta Pro Diver. They are just fantastic value for money. This one arrived yesterday and the first thing I did was set the time, popped on an identical strap from another Invicta and went in the shower with it to test the waterproofing.... No problems.</p>
                    <p class="mb-3 text-gray-500 dark:text-gray-400">It is obviously not the same build quality as those very expensive watches. But that is like comparing a Citroën to a Ferrari. This watch was well under £100! An absolute bargain.</p>
                    <a href="#" class="block mb-5 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">Read more</a>
                    <aside>
                        <p class="mt-1 text-xs text-gray-500 dark:text-gray-400">19 people found this helpful</p>
                        <div class="flex items-center mt-3">
                            <a href="#" class="px-2 py-1.5 text-xs font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Helpful</a>
                            <a href="#" class="ps-4 text-sm font-medium text-blue-600 hover:underline dark:text-blue-500 border-gray-200 ms-4 border-s md:mb-0 dark:border-gray-600">Report abuse</a>
                        </div>
                    </aside>
                </article>
            </x-card-contact>

</x-header>
