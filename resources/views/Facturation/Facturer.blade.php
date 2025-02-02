<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>

    <div class="py-6 px-3 lg:px-48" id="facturation">
        <h1 class="text-center text-4xl lg:text-5xl text-[#FFEB99] titre-font pb-9">
            Facturation des Commandes
        </h1>

        <div class="bg-[#444] rounded-lg p-6 shadow-md space-y-6">
            @if($commandeAPayer->isEmpty())
                <div class="text-center text-[#FFEB99] text-xl bg-[#333] p-4 rounded-lg">
                    Aucune commande en attente de paiement.
                </div>
            @else
                <!-- Sélection de la commande -->
                <div>
                    <label for="commandeSelect" class="block text-[#FFEB99] text-xl font-bold mb-2">Sélectionner une commande :</label>
                    <select id="commandeSelect" class="w-full py-3 px-4 bg-[#333] text-[#FFEB99] rounded-lg shadow-md text-xl">
                        <option value="">Choisir une commande...</option>
                        @foreach($commandeAPayer as $commande)
                            @php 
                                $totalMontant = $commande->comporters->sum('prix');
                            @endphp
                            <option value="{{ $commande->idCommande }}" 
                                data-id-commande = "{{ $commande->idCommande }}"  
                                data-montant="{{ $totalMontant }}" 
                                data-client="{{ $commande->reservation->client->personne->nom ?? 'Inconnu' }}" 
                                data-prenom="{{ $commande->reservation->client->personne->prenom ?? 'Inconnu' }}" 
                                data-table="{{ $commande->reservation->table->NomTable ?? 'Inconnue' }}"
                                data-acompte="{{ $commande->reservation->acompte ? 'Oui' : 'Non' }}"
                                data-commande="{{ json_encode($commande->comporters->map(fn($c) => [
                                    'nom' => $c->plat ? $c->plat->nomPlat : 'Inconnu',
                                    'prix' => $c->prix,
                                    'quantite' => $c->nbCommander
                                ])) }}">

                                Commande #{{ $commande->idCommande }} - Client : {{ $commande->reservation->client->personne->nom ?? 'Inconnu' }} {{ $commande->reservation->client->personne->prenom ?? '' }} - Table : {{ $commande->reservation->table->NomTable ?? 'Inconnue' }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Affichage des détails de la commande sélectionnée -->
                <div id="commandeDetails" class="bg-[#333] text-[#FFEB99] p-4 rounded-lg shadow-md transition-opacity duration-500 ease-in-out opacity-0 hidden">
                    <h5 class="text-2xl font-bold">Détails de la commande</h5>
                    <p><strong>Client :</strong> <span id="clientNom"></span> <span id="clientPrenom"></span></p>
                    <p><strong>Table :</strong> <span id="tableId"></span></p>
                    <p><strong>Montant total :</strong> <span id="commandeMontant"></span> €</p>
                    <p><strong>Acompte versé :</strong> <span id="acompteStatut"></span></p>

                    <!-- Liste des plats commandés -->
                    <h5 class="text-xl font-bold mt-4">Contenu de la commande :</h5>
                    <ul id="commandeContenu" class="list-disc pl-5"></ul>
                </div>
            @endif
            <div class="flex justify-center items-center">

            <form id="paymentForm" action="{{ route('Facturation.payer') }}" method="POST" class="w-full rounded-lg border border-gray-200 bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6 lg:max-w-xl lg:p-8">
                @csrf
                <input type="hidden" name="commande_id" id="commande_id" value="">

                <div class="mb-6 grid grid-cols-2 gap-4">
                    <div class="col-span-2 sm:col-span-1">
                        <label for="full_name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nom complet <span class="text-red-600">*</span></label>
                        <input type="text" id="full_name" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="Bonnie Green" required />
                    </div>

                    <div class="col-span-2 sm:col-span-1">
                        <label for="card-number-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Numéro de carte <span class="text-red-600">*</span></label>
                        <input type="text" id="card-number-input" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 pe-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500  dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="xxxx-xxxx-xxxx-xxxx" pattern="^4[0-9]{12}(?:[0-9]{3})?$" required />
                    </div>

                    <div>
                        <label for="card-expiration-input" class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Expiration de la carte <span class="text-red-600">*</span></label>
                        <div class="relative">
                            <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-3.5">
                                <svg class="h-4 w-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input datepicker datepicker-format="mm/yy" id="card-expiration-input" type="text" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-9 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="12/23" required />
                        </div>
                    </div>

                    <div>
                        <label for="cvv-input" class="mb-2 flex items-center gap-1 text-sm font-medium text-gray-900 dark:text-white">
                            CVV<span class="text-red-600">*</span>
                            <button data-tooltip-target="cvv-desc" data-tooltip-trigger="hover" class="text-gray-400 hover:text-gray-900 dark:text-gray-500 dark:hover:text-white">
                                <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm9.408-5.5a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2h-.01ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
                                </svg>
                            </button>
                            <div id="cvv-desc" role="tooltip" class="tooltip invisible absolute z-10 inline-block rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700">
                                Les 3 derniers chiffres au dos de la carte
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        </label>
                        <input type="number" id="cvv-input" aria-describedby="helper-text-explanation" class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500" placeholder="•••" required />
                    </div>
                </div>

                <!-- Le bouton qui soumet le formulaire -->
                <button type="submit" class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-primary-300">
                    <span id="paybtn">Payer</span>
                    <div role="status" id="loadingGIF" style="display:none;">
                        <svg aria-hidden="true" class="w-6 h-6 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                            <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                        </svg>
                        <span class="sr-only">Loading...</span>
                    </div>
                </button>
            </form>
                    
            </div>
        </div>
        
    </div>

    

    <!-- JavaScript pour gérer l'affichage dynamique -->
    <script>
        document.getElementById("commandeSelect").addEventListener("change", function() {
            var selectedOption = this.options[this.selectedIndex];
            var montant = selectedOption.getAttribute("data-montant");
            var clientNom = selectedOption.getAttribute("data-client");
            var clientPrenom = selectedOption.getAttribute("data-prenom");
            var table = selectedOption.getAttribute("data-table");
            var acompte = selectedOption.getAttribute("data-acompte");
            var commandeData = JSON.parse(selectedOption.getAttribute("data-commande") || '[]');
            var id_commande = selectedOption.getAttribute("data-id-commande");;

            
            if (montant && clientNom && table) {
                document.getElementById("clientNom").innerText = clientNom;
                document.getElementById("clientPrenom").innerText = clientPrenom;
                document.getElementById("tableId").innerText = table;
                document.getElementById("commandeMontant").innerText = montant;
                document.getElementById("acompteStatut").innerText = acompte;
                document.getElementById('commande_id').value = id_commande;
                
                var contenuList = document.getElementById("commandeContenu");
                contenuList.innerHTML = ""; // Vider la liste avant d'ajouter du contenu
                
                commandeData.forEach(item => {
                    let li = document.createElement("li");
                    li.innerText = `${item.quantite} x ${item.nom} - ${item.prix} €`;
                    contenuList.appendChild(li);
                });

                var details = document.getElementById("commandeDetails");
                details.classList.remove("hidden");
                details.classList.add("opacity-100");
            } else {
                var details = document.getElementById("commandeDetails");
                details.classList.add("hidden");
                details.classList.remove("opacity-100");
            }
            
        });

        
    </script>
</x-header>
