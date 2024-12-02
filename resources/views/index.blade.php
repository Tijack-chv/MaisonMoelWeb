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
    </div>
</x-header>
