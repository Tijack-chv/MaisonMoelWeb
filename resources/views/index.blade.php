<x-header title="bg-[#292929]">
    <x-navbar></x-navbar>
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('http://192.168.143.9:8080/images/FOND_ACCUEIL.png');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute flex h-screen justify-start pl-5 sm:px-10" style="flex-direction: column;">
            <div class="relative top-[40%]">
                <h1 class="text-4xl md:text-6xl font-bold text-white">
                    Maison Moël
                </h1>
                <p class="text-md md:text-2xl font-bold text-white text-left">
                    Maison Moël, un festin éternel.
                </p>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 py-6">
        <h1 class="place-self-center underline text-4xl md:text-5xl text-[#FFEB99]">
            Nos sélections
        </h1>
        <div class="py-6 md:px-[6rem] lg:px-[12rem]">
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

        
        <div id="map" class="mx-auto w-1/3 h-96"></div>
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <script>
            const map = L.map('map').setView([47.481413, -2.396081], 16);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
            }).addTo(map);

            const customIcon = L.icon({
                iconUrl: "{{ asset('red_marker.svg') }}",
                iconSize: [30, 40],
                iconAnchor: [15, 40],
                popupAnchor: [0, -40]
            });

            L.marker([47.481413, -2.396081], { icon: customIcon }).addTo(map)
                .bindPopup('Camoël, France')
                .openPopup();
        </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </div>
</x-header>
