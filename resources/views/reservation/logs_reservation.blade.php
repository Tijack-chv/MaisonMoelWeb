<x-header title="bg-[#353535]">
    <x-navbar></x-navbar>
    <div class="mt-6 mb-6">
        <x-card-payment>
            <div class="mt-4">
                <h1 class="text-2xl lg:text-4xl text-[#FFEB99] titre-font text-center">Vos réservations</h1>
                <div class="flex flex-col">
                    <h1 class="text-3xl text-left font-semibold mt-1 w-full mb-3">Passé</h1>
                    @if (count($reservationsPasse) == 0)
                        <p class="text-left text-gray-500 text-lg text-[#FFEB99]">Vous n'avez pas de réservation passée.</p>
                    @else
                        @foreach($reservationsPasse as $reservation)
                            <div class="rounded border w-full border-zinc-700 text-zinc-200 px-6 py-4 gap-2">
                                <div class="grid grid-cols-2">
                                    <div>
                                        <h1 class="text-xl"><span class="font-bold">Numéro de réservation : </span>{{$reservation->idReservation}}</h1>
                                        <p><span class="font-bold">Date de réservation : </span>{{$reservation->dateReservation}}</p>
                                        <p><span class="font-bold">Nombre de personnes : </span>{{$reservation->nbPersonnes}}</p>
                                        <p><span class="font-bold">Montant total (accompte) : </span>{{$reservation->nbPersonnes * 10}}.00 €</p>
                                    </div>
                                    <div class="flex justify-end">
                                        <a href="/reservation/remove/{{$reservation->idReservation}}">
                                            <button type="button" class="inline-flex items-center justify-center focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                                                </svg>
                                                <span class="ms-2">Supprimer</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="flex flex-col mt-6">
                    <h1 class="text-3xl text-left font-semibold mt-1 w-full mb-3">Prochaines</h1>
                    @if (count($reservationsFutur) == 0)
                        <p class="text-left text-gray-500 text-lg text-[#FFEB99]">Vous n'avez pas de réservation dans le futur.</p>
                    @else
                        @foreach($reservationsFutur as $reservation)
                            <div class="rounded border w-full border-zinc-700 text-zinc-200 px-6 py-4 gap-2">
                                <div class="grid grid-cols-2">
                                    <div>
                                        <h1 class="text-xl"><span class="font-bold">Numéro de réservation : </span>{{$reservation->idReservation}}</h1>
                                        <p><span class="font-bold">Date de réservation : </span>{{$reservation->dateReservation}}</p>
                                        <p><span class="font-bold">Nombre de personnes : </span>{{$reservation->nbPersonnes}}</p>
                                        <p><span class="font-bold">Montant total (accompte) : </span>{{$reservation->nbPersonnes * 10}}.00 €</p>
                                    </div>
                                    <div class="flex justify-end">
                                        <a href="/reservation/remove/{{$reservation->idReservation}}">
                                            <button type="button" class="inline-flex items-center justify-center focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                                                <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                                                </svg>
                                                <span class="ms-2">Supprimer</span>
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </x-card-payment>
    </div>
</x-header>
