<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>
    <div class="py-6 px-3 lg:px-48" id="about">
        <h1 class="text-center text-4xl lg:text-5xl text-[#FFEB99] titre-font pb-9">
            Prise de Commande
        </h1>

        <!-- Entrées -->
        <div class="mb-6">
            <button class="w-full text-center text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2" 
                    onclick="toggleList('entree-list')">
                Entrées
            </button>
            <div id="entree-list" class="hidden space-y-4">
                @foreach ($entrees as $entree)
                    <div class="flex justify-between items-center p-3 bg-[#444] rounded-md shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="http://192.168.143.9:8080/{{$entree->imagePlat}}" alt="{{ $entree->nomPlat }}" class="w-16 h-16 object-cover rounded-lg">
                            <div>
                                <h3 class="text-lg text-[#FFEB99]">{{ $entree->nomPlat }}</h3>
                                <p class="text-sm text-gray-300">{{ $entree->descriptionPlat }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button class="w-12 h-12 bg-red-600 text-white text-2xl  flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $entree->idPlat }}', -1)">
                                -
                            </button>
                            <span id="item-{{ $entree->idPlat }}" class="text-3xl text-white font-bold">0</span>
                            <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $entree->idPlat }}', 1)">
                                +
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Plats -->
        <div class="mb-6">
            <button class="w-full text-center  text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2" 
                    onclick="toggleList('plat-list')">
                Plats
            </button>
            <div id="plat-list" class="hidden space-y-4">
                @foreach ($plats as $plat)
                    <div class="flex justify-between items-center p-3 bg-[#444] rounded-md shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="http://192.168.143.9:8080/{{$plat->imagePlat}}" alt="{{ $plat->nomPlat }}" class="w-16 h-16 object-cover rounded-lg">
                            <div>
                                <h3 class="text-lg text-[#FFEB99]">{{ $plat->nomPlat }}</h3>
                                <p class="text-sm text-gray-300">{{ $plat->descriptionPlat }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button class="w-12 h-12 bg-red-600 text-white text-2xl  flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $plat->idPlat }}', -1)">
                                -
                            </button>
                            <span id="item-{{ $plat->idPlat }}" class="text-3xl text-white font-bold">0</span>
                            <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $plat->idPlat }}', 1)">
                                +
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Desserts -->
        <div class="mb-6">
            <button class="w-full text-center  text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2" 
                    onclick="toggleList('dessert-list')">
                Desserts
            </button>
            <div id="dessert-list" class="hidden space-y-4">
                @foreach ($desserts as $dessert)
                    <div class="flex justify-between items-center p-3 bg-[#444] rounded-md shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="http://192.168.143.9:8080/{{$dessert->imagePlat}}" alt="{{ $dessert->nomPlat }}" class="w-16 h-16 object-cover rounded-lg">
                            <div>
                                <h3 class="text-lg text-[#FFEB99]">{{ $dessert->nomPlat }}</h3>
                                <p class="text-sm text-gray-300">{{ $dessert->descriptionPlat }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button class="w-12 h-12 bg-red-600 text-white text-2xl  flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $dessert->idPlat }}', -1)">
                                -
                            </button>
                            <span id="item-{{ $dessert->idPlat }}" class="text-3xl text-white font-bold">0</span>
                            <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $dessert->idPlat }}', 1)">
                                +
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Boissons -->
        <div class="mb-6">
            <button class="w-full text-center  text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2" 
                    onclick="toggleList('boisson-list')">
                Boissons
            </button>
            <div id="boisson-list" class="hidden space-y-4">
                @foreach ($boissons as $boisson)
                    <div class="flex justify-between items-center p-3 bg-[#444] rounded-md shadow-md">
                        <div class="flex items-center space-x-4">
                            <img src="http://192.168.143.9:8080/{{$boisson->imagePlat }}" alt="{{ $boisson->nomPlat }}" class="w-16 h-16 object-cover rounded-lg">
                            <div>
                                <h3 class="text-lg text-[#FFEB99]">{{ $boisson->nomPlat }}</h3>
                                <p class="text-sm text-gray-300">{{ $boisson->descriptionPlat }}</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-4">
                            <button class="w-12 h-12 bg-red-600 text-white text-2xl  flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $boisson->idPlat }}', -1)">
                                -
                            </button>
                            <span id="item-{{ $boisson->idPlat }}" class="text-3xl text-white font-bold">0</span>
                            <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                                    onclick="updateQuantity('item-{{ $boisson->idPlat }}', 1)">
                                +
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="flex justify-center items-center ">
            <button class="text-center text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2 p-5">Commander</button>
        </div>

    </div>
</x-header>

<script>
function toggleList(id) {
    const element = document.getElementById(id);
    element.classList.toggle('hidden');
}

function updateQuantity(id, increment) {
    const element = document.getElementById(id);
    let currentQuantity = parseInt(element.textContent, 10) || 0;
    currentQuantity = Math.max(0, currentQuantity + increment);
    element.textContent = currentQuantity;
}
</script>
