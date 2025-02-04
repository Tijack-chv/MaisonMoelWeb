<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>
    <div class="text-center py-8">
        <h1 class="text-4xl text-[#FFEB99] titre-font">Notre carte</h1>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-[20rem]">
        @foreach ($categories_plat as $categorie_plat)
            <x-card-type-plat title="{{ $categorie_plat->idCategoriePlat }}" image="{{ $images[$categorie_plat->idCategoriePlat] }}">{{ $categorie_plat->libelleCategoriePlat }}</x-card-type-plat>
        @endforeach
    </div>
</x-header>