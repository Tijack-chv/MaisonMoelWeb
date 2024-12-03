<x-header>
    <x-navbar></x-navbar>
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('FOND_ACCUEIL.png') }}');">
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
        <div class="py-6 px-[12rem]">
            <swiper-container class="mySwiper" slides-per-view="4"
            space-between="30" free-mode="true" autoplay-delay="2500" autoplay-disable-on-interaction="false" mousewheel="true">
                <swiper-slide>
                    <x-card-accueil>
                        <img class="rounded-t-lg" src="{{ asset('image_test/mousse.png') }}" alt="" />
                        <p class="text-sm text-gray-500 mt-3">La mousse au chocolat du Chef</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <x-badge>Édition limitée • 15€</x-badge>
                        <img class="rounded-t-lg" src="{{ asset('image_test/boeuf_curry.png') }}" alt="" />
                        <p class="text-sm text-gray-500 mt-3">Le boeuf Cucurry</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <img class="rounded-t-lg" src="{{ asset('image_test/mousse.png') }}" alt="" />
                        <p class="text-sm text-gray-500 mt-3">La mousse au chocolat du Chef</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <x-badge>Édition limitée • 15€</x-badge>
                        <img class="rounded-t-lg" src="{{ asset('image_test/boeuf_curry.png') }}" alt="" />
                        <p class="text-sm text-gray-500 mt-3">Le boeuf Cucurry</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <img class="rounded-t-lg" src="{{ asset('image_test/mousse.png') }}" alt="" />
                        <p class="text-sm text-gray-500 mt-3">La mousse au chocolat du Chef</p>
                    </x-card-accueil>
                </swiper-slide>
                <swiper-slide>
                    <x-card-accueil>
                        <x-badge>Édition limitée • 15€</x-badge>
                        <img class="rounded-t-lg" src="{{ asset('image_test/boeuf_curry.png') }}" alt="" />
                        <p class="text-sm text-gray-500 mt-3">Le boeuf Cucurry</p>
                    </x-card-accueil>
                </swiper-slide>
            </swiper-container>
        </div>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    </div>
</x-header>
