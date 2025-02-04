<x-header title="bg-[#323232]">
    <x-navbar></x-navbar>
    <div class="py-6 px-3 lg:px-48" id="reservation">
        <h1 class="text-center text-4xl lg:text-5xl text-[#FFEB99] titre-font pb-9">
            Réservation de Commande
        </h1>

        <!-- Formulaire de réservation -->
        <form action="{{ route('Commande.ReservationCommandePost') }}" method="POST">
            @csrf
            
            <div class="bg-[#444] rounded-lg p-6 shadow-md space-y-6">
                <!-- Sélection du client -->
                <div>
                    <label for="client" class="block text-[#FFEB99] text-xl font-bold mb-2">Client :</label>
                    <select name="client_id" id="client" class="w-full py-3 px-4 bg-[#333] text-[#FFEB99] rounded-lg shadow-md text-xl" required>
                        <option value="" disabled selected>Choisissez un client</option>
                        @foreach ($clients as $client)
                            <option value="{{ $client->idPersonne }}">
                                {{ $client->personne->nom }} {{ $client->personne->prenom }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <!-- Sélection de la table -->
                <div class="flex gap-4">
                    <div class="w-1/2">
                        <label for="table" class="block text-[#FFEB99] text-xl font-bold mb-2">Table :</label>
                        <select name="table_id" id="table" class="w-full py-3 px-4 bg-[#333] text-[#FFEB99] rounded-lg shadow-md text-xl" required>
                            <option value="" disabled selected>Choisissez une table</option>
                            @foreach ($tables as $table)
                                <option value="{{ $table->idTable }}">
                                    {{ $table->NomTable }} ({{ $table->capacite }} personnes)
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Nombre de personnes -->
                    <div class="w-1/2">
                        <label for="nombre_personnes" class="block text-[#FFEB99] text-xl font-bold mb-2">Nombre de personnes :</label>
                        <input type="number" name="nombre_personnes" id="nombre_personnes" value="1" min="1" class="w-full py-3 px-4 bg-[#333] text-[#FFEB99] rounded-lg shadow-md text-xl" onkeydown="return false;">
                    </div>
                </div>

                <!-- Bouton de réservation -->
                <div class="flex justify-center">
                    <button type="submit" class="text-2xl py-3 px-6 bg-gradient-to-r from-[#FFEB99] to-[#FFD700] text-black rounded-lg shadow-md font-bold hover:opacity-90">
                        Réserver
                    </button>
                </div>
            </div>
        </form>
        <br>
        <br>
        @if (session('success'))
            <div style="color: green; background-color: #d4edda; padding: 10px; border-radius: 5px;">
                {{ session('success') }}
            </div>
        @endif

    </div>
</x-header>

<script>
    document.getElementById("table").addEventListener("change", function () {
        let maxCapacite = this.options[this.selectedIndex].text.match(/\d+/g);
        if (maxCapacite) {
            document.getElementById("nombre_personnes").max = maxCapacite[maxCapacite.length - 1]; // Prend le dernier nombre
            document.getElementById("nombre_personnes").value = 1;
        }
    });
</script>
