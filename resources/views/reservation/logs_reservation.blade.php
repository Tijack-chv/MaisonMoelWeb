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
                            <div class="rounded border w-full border-zinc-700 text-zinc-200 px-6 py-4 gap-2 mb-4">
                                <div class="grid grid-cols-2">
                                    <div>
                                        <h1 class="text-xl"><span class="font-bold">Numéro de réservation : </span>{{$reservation->idReservation}}</h1>
                                        <p><span class="font-bold">Date de réservation : </span>{{$reservation->dateReservation}}</p>
                                        <p><span class="font-bold">Nombre de personnes : </span>{{$reservation->nbPersonnes}}</p>
                                        @if ($reservation->accompte != 0)
                                            <p><span class="font-bold">Montant total (accompte) : </span>{{$reservation->nbPersonnes * 10}}.00 €</p>
                                        @endif
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
                                        <button data-modal-target="popup-modal-{{$reservation->idReservation}}" data-modal-toggle="popup-modal-{{$reservation->idReservation}}" type="button" class="inline-flex items-center justify-center focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2">
                                            <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
                                            </svg>
                                            <span class="ms-2">Annuler</span>
                                        </button>
                                    </div>
                                    <div id="popup-modal-{{$reservation->idReservation}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                                        <div class="relative p-4 w-full max-w-md max-h-full">
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal-{{$reservation->idReservation}}">
                                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                                <div class="p-4 md:p-5 text-center">
                                                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                                    </svg>
                                                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Êtes-vous sûr d'annuler la réservation ? <span class="text-sm">L'acompte versé ultérieurement ne sera pas remboursé.</span></h3>
                                                    <a href="/reservation/remove/{{$reservation->idReservation}}">
                                                        <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                                            Supprimer la réservation
                                                        </button>
                                                    </a>
                                                    <button data-modal-hide="popup-modal-{{$reservation->idReservation}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-700 focus:z-10 focus:ring-4 focus:ring-gray-100">Annuler</button>
                                                </div>
                                            </div>
                                        </div>
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
