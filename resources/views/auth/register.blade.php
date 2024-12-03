<x-header>
    <x-navbar></x-navbar>
    <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('FOND_ACCUEIL.png') }}');">
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>
        <div class="absolute flex w-screen h-screen sm:px-10" style="flex-direction: column;">
            <div class="mt-12">
                <x-card-register></x-card-register>
            </div>
        </div>
    </div>
</x-header>