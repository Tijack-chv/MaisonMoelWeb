<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>
    <div class="py-6 px-3 lg:px-48" id="about">
        <h1 class="place-self-center text-center text-4xl lg:text-5xl text-[#FFEB99] titre-font pb-9">
            Prise de Commande
        </h1>

        <!-- Entrée -->
        <div>
            <button class="w-full text-left text-xl py-2 bg-[#FFEB99] mb-2" onclick="toggleList('entree-list')">
                Entrée
            </button>
            <div id="entree-list" class="hidden space-y-2">
                <div class="flex justify-between items-center">
                    <span>Salade</span>
                    <div>
                        <button onclick="updateQuantity('entree-salade', -1)">-</button>
                        <span id="entree-salade">0</span>
                        <button onclick="updateQuantity('entree-salade', 1)">+</button>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <span>Soupe</span>
                    <div>
                        <button onclick="updateQuantity('entree-soupe', -1)">-</button>
                        <span id="entree-soupe">0</span>
                        <button onclick="updateQuantity('entree-soupe', 1)">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Plat -->
        <div>
            <button class="w-full text-left text-xl py-2 bg-[#FFEB99] mb-2" onclick="toggleList('plat-list')">
                Plat
            </button>
            <div id="plat-list" class="hidden space-y-2">
                <div class="flex justify-between items-center">
                    <span>Steak</span>
                    <div>
                        <button onclick="updateQuantity('plat-steak', -1)">-</button>
                        <span id="plat-steak">0</span>
                        <button onclick="updateQuantity('plat-steak', 1)">+</button>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <span>Pâtes</span>
                    <div>
                        <button onclick="updateQuantity('plat-pates', -1)">-</button>
                        <span id="plat-pates">0</span>
                        <button onclick="updateQuantity('plat-pates', 1)">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desserts -->
        <div>
            <button class="w-full text-left text-xl py-2 bg-[#FFEB99] mb-2" onclick="toggleList('dessert-list')">
                Dessert
            </button>
            <div id="dessert-list" class="hidden space-y-2">
                <div class="flex justify-between items-center">
                    <span>Gâteau</span>
                    <div>
                        <button onclick="updateQuantity('dessert-gateau', -1)">-</button>
                        <span id="dessert-gateau">0</span>
                        <button onclick="updateQuantity('dessert-gateau', 1)">+</button>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <span>Glace</span>
                    <div>
                        <button onclick="updateQuantity('dessert-glace', -1)">-</button>
                        <span id="dessert-glace">0</span>
                        <button onclick="updateQuantity('dessert-glace', 1)">+</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Boissons -->
        <div>
            <button class="w-full text-left text-xl py-2 bg-[#FFEB99] mb-2" onclick="toggleList('boisson-list')">
                Boisson
            </button>
            <div id="boisson-list" class="hidden space-y-2">
                <div class="flex justify-between items-center">
                    <span>Eau</span>
                    <div>
                        <button onclick="updateQuantity('boisson-eau', -1)">-</button>
                        <span id="boisson-eau">0</span>
                        <button onclick="updateQuantity('boisson-eau', 1)">+</button>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <span>Jus</span>
                    <div>
                        <button onclick="updateQuantity('boisson-jus', -1)">-</button>
                        <span id="boisson-jus">0</span>
                        <button onclick="updateQuantity('boisson-jus', 1)">+</button>
                    </div>
                </div>
            </div>
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
