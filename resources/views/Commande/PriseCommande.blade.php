<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>
    <div class="py-6 px-3 lg:px-48" id="about">
        
        <h1 class="text-center text-4xl lg:text-5xl text-[#FFEB99] titre-font pb-9">
            Prise de Commande
        </h1>

        <!-- Section des catégories -->
        <div id="categories">
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
                    <p class="text-sm text-gray-300 font-bold">Prix : {{ $entree->prixHT }} €</p>
                </div>
            </div>
                <div class="flex items-center space-x-4">
                    <button class="w-12 h-12 bg-red-600 text-white text-2xl flex items-center justify-center"
                onclick="updateQuantity('item-{{ $entree->idPlat }}', -1, '{{ $entree->prixHT }}', '{{ $entree->nomPlat }}', 'entrees','{{ $entree->idPlat }}')">
                    -
                </button>
                <span id="item-{{ $entree->idPlat }}" class="text-3xl text-white font-bold">0</span>
                <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                        onclick="updateQuantity('item-{{ $entree->idPlat }}', 1, '{{ $entree->prixHT }}', '{{ $entree->nomPlat }}', 'entrees','{{ $entree->idPlat }}')">
                    +
                </button>
            </div>
        </div>
    @endforeach
</div>

            </div>

           
            <div class="mb-6">
                <button class="w-full text-center text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2" 
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
                                    <p class="text-sm text-gray-300 font-bold">Prix : {{ $plat->prixHT }} €</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button class="w-12 h-12 bg-red-600 text-white text-2xl flex items-center justify-center"
                                        onclick="updateQuantity('item-{{ $plat->idPlat }}', -1, '{{ $plat->prixHT }}', '{{ $plat->nomPlat }}', 'plats','{{ $plat->idPlat }}')">
                                    -
                                </button>
                                <span id="item-{{ $plat->idPlat }}" class="text-3xl text-white font-bold">0</span>
                                <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                                        onclick="updateQuantity('item-{{ $plat->idPlat }}', 1, '{{ $plat->prixHT }}', '{{ $plat->nomPlat }}', 'plats','{{ $plat->idPlat }}')">
                                    +
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

            <!-- Desserts -->
            <div class="mb-6">
                <button class="w-full text-center text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2" 
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
                                    <p class="text-sm text-gray-300 font-bold">Prix : {{ $dessert->prixHT }} €</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                <button class="w-12 h-12 bg-red-600 text-white text-2xl flex items-center justify-center"
                                        onclick="updateQuantity('item-{{ $dessert->idPlat }}', -1, '{{ $dessert->prixHT }}', '{{ $dessert->nomPlat }}', 'desserts', '{{ $dessert->idPlat }}')">
                                    -
                                </button>
                                <span id="item-{{ $dessert->idPlat }}" class="text-3xl text-white font-bold">0</span>
                                <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                                        onclick="updateQuantity('item-{{ $dessert->idPlat }}', 1, '{{ $dessert->prixHT }}', '{{ $dessert->nomPlat }}', 'desserts','{{ $dessert->idPlat }}')">
                                    +
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
            <div class="mb-6">
                <button class="w-full text-center text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2" 
                        onclick="toggleList('boisson-list')">
                    Boissons
                </button>
                <div id="boisson-list" class="hidden space-y-4">
                    @foreach ($boissons as $boisson)
                        <div class="flex justify-between items-center p-3 bg-[#444] rounded-md shadow-md">
                            <div class="flex items-center space-x-4">
                                <img src="http://192.168.143.9:8080/{{$boisson->imagePlat}}" alt="{{ $boisson->nomPlat }}" class="w-16 h-16 object-cover rounded-lg">
                                <div>
                                    <h3 class="text-lg text-[#FFEB99]">{{ $boisson->nomPlat }}</h3>
                                    <p class="text-sm text-gray-300">{{ $boisson->descriptionPlat }}</p>
                                    <p class="text-sm text-gray-300 font-bold">Prix : {{ $boisson->prixHT }} €</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-4">
                                
                                <button class="w-12 h-12 bg-red-600 text-white text-2xl flex items-center justify-center"
                                        onclick="updateQuantity('item-{{ $boisson->idPlat }}', -1, '{{ $boisson->prixHT }}', '{{ $boisson->nomPlat }}', 'boissons', '{{ $boisson->idPlat }}')">
                                    -
                                </button>
                                <span id="item-{{ $boisson->idPlat }}" class="text-3xl text-white font-bold">0</span>
                                <button class="w-12 h-12 bg-green-600 text-white text-2xl flex items-center justify-center"
                                        onclick="updateQuantity('item-{{ $boisson->idPlat }}', 1, '{{ $boisson->prixHT }}', '{{ $boisson->nomPlat }}', 'boissons', '{{ $boisson->idPlat }}')">
                                    +
                                </button>

                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <div class="items-start p-6 bg-[#444] rounded-md shadow-md">
            
            <div id="selected-items" class="flex-1 p-4 bg-[#222] rounded-lg text-white">
                <h3 class="text-center text-xl font-bold text-[#FFEB99] mb-4 border-b border-[#FFEB99] pb-2">Articles Sélectionnés</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    <div>
                        <h4 class="text-lg font-bold text-[#FFEB99] mb-2">Entrées</h4>
                        <ul id="entrees" class="text-gray-400"></ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-[#FFEB99] mb-2">Plats</h4>
                        <ul id="plats" class="text-gray-400"></ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-[#FFEB99] mb-2">Desserts</h4>
                        <ul id="desserts" class="text-gray-400"></ul>
                    </div>
                    <div>
                        <h4 class="text-lg font-bold text-[#FFEB99] mb-2">Boissons</h4>
                        <ul id="boissons" class="text-gray-400"></ul>
                    </div>
                </div>
            </div>
            <br>
            <div class=" text-center flex-1 p-4 bg-[#333] rounded-lg text-white"]">
                <h2 class="text-2xl font-bold">Total :</h2>
                <span id="total-price" class="text-3xl font-bold">0.00</span> €
            </div>
        </div>

        <form action="/commander" method="POST" id="order-form" class="hidden">
            @csrf <!-- Protection contre les attaques CSRF -->
            <input type="hidden" name="orderData" id="orderData">
            <input type="hidden" name="totalPrice" id="totalPriceHidden">
        </form>

        <div class="flex justify-center items-center mt-6">
            <button type="button" class="text-center text-2xl py-3 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] rounded-lg mb-2 p-5" onclick="submitOrder()">
                Commander
            </button>
        </div>

    </div>
</x-header>

<script>

function toggleList(id) {
    const element = document.getElementById(id);
    element.classList.toggle('hidden');
}

let totalPrice = 0;
let selectedItems = {}; // Pour stocker les articles sélectionnés

function updateQuantity(id, increment, price, name, category, idPlat) {
    const element = document.getElementById(id);
    if (!element) {
        console.error(`L'élément avec l'ID ${id} n'a pas été trouvé.`);
        return;
    }

    let currentQuantity = parseInt(element.textContent, 10) || 0;

    // Vérification pour éviter une soustraction quand la quantité est déjà 0
    if (currentQuantity === 0 && increment < 0) {
        return;
    }

    // Mise à jour de la quantité
    currentQuantity = Math.max(0, currentQuantity + increment);
    element.textContent = currentQuantity;

    // Mise à jour des articles sélectionnés avec l'idPlat
    if (currentQuantity > 0) {
        selectedItems[id] = { name, quantity: currentQuantity, price: price * currentQuantity, category: category, idPlat: idPlat };
    } else {
        delete selectedItems[id];
    }

    // Mise à jour du prix total
    totalPrice = Object.values(selectedItems).reduce((total, item) => total + item.price, 0);
    document.getElementById('total-price').textContent = totalPrice.toFixed(2);

    // Mise à jour de la liste des articles choisis
    renderSelectedItems();
}


function renderSelectedItems() {
    const categories = ['entrees', 'plats', 'desserts', 'boissons'];

    // Réinitialiser les listes
    categories.forEach(category => {
        const list = document.getElementById(category);
        if (list) list.innerHTML = '<li class="text-gray-400">Aucun article sélectionné</li>';
    });

    // Ajouter les articles par catégorie
    Object.values(selectedItems).forEach(item => {
        const list = document.getElementById(item.category);
        if (list) {
            if (list.querySelector('.text-gray-400')) list.innerHTML = ''; // Supprimer le message "Aucun article"
            const li = document.createElement('li');
            li.className = 'flex justify-between items-center bg-[#555] p-2 rounded-md mb-2';
            li.innerHTML = `
                <span class="text-white">${item.name} (x${item.quantity})</span>
                <span class="text-[#FFEB99]">${(item.price).toFixed(2)} €</span>
            `;
            list.appendChild(li);
        }
    });
}

function submitOrder() {
    if (Object.keys(selectedItems).length === 0) {
        alert('Aucun article sélectionné.');
        return;
    }

    // Créer un objet avec les données de la commande
    const orderData = {
        items: Object.values(selectedItems).map(item => ({
            idPlat: item.idPlat,
            name: item.name,
            quantity: item.quantity,
            price: item.price,
            category: item.category
        })),
    };

    document.getElementById('orderData').value = JSON.stringify(orderData);
    document.getElementById('totalPriceHidden').value = totalPrice.toFixed(2);

    document.getElementById('order-form').submit();
}



</script>
