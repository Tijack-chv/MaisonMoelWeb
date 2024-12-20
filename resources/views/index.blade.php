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

    <div class="py-6 px-3 lg:px-48" id="about">
        <h1 class="place-self-center text-center text-4xl lg:text-5xl text-[#FFEB99] titre-font pb-9">
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
    
    <div class="grid grid-cols-1 pt-2 pb-6" id="selection">
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

        <div class="pt-2 pb-6 px-3 lg:px-48">
            <h1 class="place-self-center text-center text-4xl md:text-5xl text-[#FFEB99] titre-font pb-6">
                Contactez-nous
            </h1>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-0">
                <div class="lg:mr-8">
                    <div id="map" class="mx-auto w-full px-6 h-96"></div>
                </div>

                <div class="h-full place-content-center">
                    <x-card-contact title="lg:ml-8">
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

        <div class="pt-2 pb-6 px-3 lg:px-48">
            <h1 class="place-self-center text-center text-4xl md:text-5xl text-[#FFEB99] titre-font pb-6">
                Vos avis
            </h1>
            <x-card-contact title="mx-auto w-full mb-8">
                <div class="flex justify-center mb-2">
                    <div class="flex">
                        @for($i = 0;$i<(int)$avgAvis;$i++)
                            <svg class="w-4 h-4 text-yellow-300 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        @endfor

                        @for($i = (int)$avgAvis;$i<5;$i++)
                            <svg class="w-4 h-4 text-gray-300 me-1 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        @endfor
                        <p class="ms-1 text-sm font-medium text-gray-500 dark:text-gray-400">{{ fmod($avgAvis, 1) == 0 ? (int)$avgAvis : number_format($avgAvis,2) }}/5</p>
                    </div>
                </div>
                <p class="text-sm font-medium text-gray-500 dark:text-gray-400 text-center">{{$notes[5]}} notes</p>
                <div class="grid grid-cols-1">
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">5 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: {{ (int)($notes[4]*100/$notes[5]) }}%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ (int)($notes[4]*100/$notes[5]) }}%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">4 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: {{ (int)($notes[3]*100/$notes[5]) }}%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ (int)($notes[3]*100/$notes[5]) }}%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">3 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: {{ (int)($notes[2]*100/$notes[5]) }}%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ (int)($notes[2]*100/$notes[5]) }}%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">2 étoiles</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: {{ (int)($notes[1]*100/$notes[5]) }}%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ (int)($notes[1]*100/$notes[5]) }}%</span>
                    </div>
                    <div class="flex justify-center mt-4">
                        <p class="text-sm font-medium text-white">1 étoile</p>
                        <div class="w-2/4 h-5 mx-4 bg-gray-200 rounded dark:bg-gray-700">
                            <div class="h-5 bg-yellow-300 rounded" style="width: {{ (int)($notes[0]*100/$notes[5]) }}%"></div>
                        </div>
                        <span class="text-sm font-medium text-gray-500 dark:text-gray-400">{{ (int)($notes[0]*100/$notes[5]) }}%</span>
                    </div>
                </div>
            </x-card-contact>
            @foreach($avis as $unAvis)
                <x-card-contact title="mx-auto w-full mb-4">
                    <article>
                        <div class="flex items-center mb-4">
                            @if($unAvis->personne->client->imageClient)
                                <img class="w-10 h-10 me-4 rounded-full" src="http://192.168.143.9:8080/images/{{$unAvis->personne->client->imageClient}}" alt="">
                            @else
                                <img class="w-10 h-10 me-4 rounded-full" src="http://192.168.143.9:8080/images/defautProfil.png" alt="">
                            @endif
                            <div class="font-medium dark:text-white">
                                <p>{{$unAvis->personne->prenom}} {{$unAvis->personne->nom}}</p>
                            </div>
                        </div>
                        <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                            @for($i = 0;$i<$unAvis->note;$i++)
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            @endfor
                            @for($i = $unAvis->note;$i<5;$i++)
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            @endfor
                            <h3 class="ms-2 text-sm font-semibold text-white">{{ $unAvis->titre }}</h3>
                        </div>
                        <footer class="mb-5 text-sm text-gray-500">{{ \Carbon\Carbon::parse($unAvis->date)->locale('fr')->translatedFormat('d F Y') }}</footer>
                        <p class="mb-2 text-white">{{ $unAvis->description }}</p>                    
                    </article>
                </x-card-contact>
            @endforeach
            @if (session('client'))
            <form class="rounded-lg bg-[#292929] lg:px-4 py-4" method="post" action="/rating">
                @csrf
                <h1 class="text-left text-2xl text-[#FFEB99] titre-font pt-2 px-5">
                    Laissez votre avis
                </h1>
                <div class="flex items-center px-5 py-2" id="star_rating">
                    <svg class="w-6 h-6 text-yellow-300 ms-1" onclick="rateStar(1)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 text-yellow-300 ms-1" onclick="rateStar(2)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 text-yellow-300 ms-1" onclick="rateStar(3)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 text-yellow-300 ms-1" onclick="rateStar(4)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                    <svg class="w-6 h-6 text-yellow-300 ms-1" onclick="rateStar(5)" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                    </svg>
                </div>
                <input type="hidden" name="note" id="note" value="1">
                <script type="text/javascript">
                    function rateStar(note) {
                        document.getElementById('note').value = note;
                        for (let i = 1; i <= 5; i++) {
                            if (i <= note) {
                                document.getElementById('star_rating').children[i - 1].classList.remove('text-gray-300');
                                document.getElementById('star_rating').children[i - 1].classList.add('text-yellow-300');
                            } else {
                                document.getElementById('star_rating').children[i - 1].classList.remove('text-yellow-300');
                                document.getElementById('star_rating').children[i - 1].classList.add('text-gray-300');
                            }
                        }
                    }
                </script>
                <div class="px-5 py-2">
                    <label for="titre" class="sr-only">Titre</label>
                    <input type="text" id="titre" name="titre" class="block w-full p-2.5 text-sm text-white bg-[#292929] rounded-lg border border-zinc-600 focus:ring-[#FFEB99] focus:border-[#FFEB99]" placeholder="Le titre" />
                </div>
                <label for="chat" class="sr-only">Votre avis</label>
                <div class="flex items-center px-5 py-2">
                    <textarea id="chat" rows="1" name="commentaire" class="block mr-4 p-2.5 w-full text-sm text-white bg-[#292929] rounded-lg border border-zinc-600 focus:ring-[#FFEB99] focus:border-[#FFEB99]" placeholder="Votre avis..."></textarea>
                        <button type="submit" class="inline-flex justify-center p-2 text-[#FFEB99] rounded-full cursor-pointer hover:bg-zinc-700">
                            <svg class="w-5 h-5 rotate-90 rtl:-rotate-90" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                                <path d="m17.914 18.594-8-18a1 1 0 0 0-1.828 0l-8 18a1 1 0 0 0 1.157 1.376L8 18.281V9a1 1 0 0 1 2 0v9.281l6.758 1.689a1 1 0 0 0 1.156-1.376Z"/>
                            </svg>
                            <span class="sr-only">Envoyer le message</span>
                    </button>
                </div>
            </form>
            @endif
        </div>
    </div>
</x-header>
