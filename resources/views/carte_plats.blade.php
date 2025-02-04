<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>

    <div class="text-center py-8">
        <h1 class="text-4xl text-[#FFEB99] titre-font">Nos {{ $categorie->libelleCategoriePlat }}s</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-[20rem] pb-12">
        @foreach ($plats as $plat)
            <x-card-plat image="{{ $plat->imagePlat }}" prix="{{ $plat->prixHT }}" type="{{ $plat->type_plat->libelleTypePlat }}">{{ $plat->nomPlat }}</x-card-plat>
        @endforeach
    </div>
</x-header>