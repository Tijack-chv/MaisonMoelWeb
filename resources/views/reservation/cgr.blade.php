<x-header title="bg-[#353535]">
    <x-navbar></x-navbar>
    <div id="toast-success" class="absolute right-5 bottom-3 flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800" role="alert" style="display:none;">
        <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
            </svg>
            <span class="sr-only">Check icon</span>
        </div>
        <div class="ms-3 text-sm font-normal">Votre réservation a été pris en compte.</div>
        <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
        </button>
    </div>
    <div class="mt-6 mb-6">
        <x-card-payment>
            <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base mb-2 mt-4 sm:flex hidden">
                <li class="flex md:w-full items-center text-[#FFEB99] sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                    <span class="flex items-center after:content-['/'] sm:after:hidden after:mx-2 after:text-[#FFEB99] dark:after:text-[#FFEB99]">
                        <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                        </svg>
                        Réservation
                    </span>
                </li>
                <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                    CGR
                </li>
                <li class="flex items-center">
                    Paiement
                </li>
            </ol>
            <section class="py-2 antialiased md:pb-2">
                <div class="container mx-auto px-6 py-6">
                    <h1 class="place-self-center text-center text-2xl lg:text-4xl text-[#FFEB99] titre-font mb-4">Conditions Générales de Réservation</h1>
                    <p class="text-lg mb-4">Bienvenue chez <span class="font-semibold">Maison Moël</span>. Les présentes Conditions Générales de Réservation (CGR) définissent les modalités de réservation au sein de notre établissement.</p>
                    <hr class="border-gray-300 mb-6">

                    <!-- Section 1 -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">1. Objet</h2>
                        <p class="text-white">Les CGR ont pour objectif de définir les droits et obligations des parties concernant toute réservation effectuée auprès de <span class="font-semibold">Maison Moël</span>.</p>
                    </section>

                    <!-- Section 2 -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">2. Modalités de réservation</h2>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-xl font-medium mb-2">2.1. Réservation en ligne ou par téléphone</h3>
                                <p class="text-white">Les réservations peuvent être effectuées via :</p>
                                <ul class="list-disc list-inside text-white">
                                    <li>Notre site internet : <a href="http://maisonmoel-192-168-143-12.traefik.me/" class="text-blue-500 hover:underline">maisonmoel.fr</a></li>
                                    <li>Par téléphone au <span class="font-medium">+33 2 99 90 90 90</span>.</li>
                                </ul>
                                <p class="text-white mt-2">Lors de la réservation, nous demandons les informations suivantes :</p>
                                <ul class="list-disc list-inside text-white">
                                    <li>Nom et prénom</li>
                                    <li>Nombre de personnes</li>
                                    <li>Date et heure souhaitées</li>
                                    <li>Coordonnées (e-mail ou téléphone)</li>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-xl font-medium mb-2">2.2. Réservations pour groupes</h3>
                                <p class="text-white">Pour les groupes de <span class="font-medium">6 personnes ou plus</span>, des conditions particulières peuvent s’appliquer, comme un menu préétabli.</p>
                            </div>
                            <div>
                                <h3 class="text-xl font-medium mb-2">2.3. Confirmation de réservation</h3>
                                <p class="text-white">Une réservation n’est confirmée qu’après réception d’un e-mail de confirmation envoyé par <span class="font-semibold">Maison Moël</span>.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Section 3 -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">3. Modifications et annulations</h2>
                        <div class="space-y-4">
                            <div>
                                <h3 class="text-xl font-medium  mb-2">3.1. Par le client</h3>
                                <p class="text-white">En cas d'annulation', <span class="font-semibold">Maison Moël</span> se réserve le droit de facturer des frais d’annulation de <span class="font-medium">10€ par personne</span>.</p>
                            </div>
                            <div>
                                <h3 class="text-xl font-medium mb-2">3.2. Par le restaurant</h3>
                                <p class="text-white">En cas de force majeure ou d’imprévu (fermeture exceptionnelle, conditions climatiques, etc.), <span class="font-semibold">Maison Moël</span> se réserve le droit d’annuler une réservation. Dans ce cas, le client sera informé dans les meilleurs délais.</p>
                            </div>
                        </div>
                    </section>

                    <!-- Section 4 -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">4. Politique de dépôt et frais d’annulation</h2>
                        <p class="text-white">Pour les réservations à distance, un acompte peut être demandé. Ce montant sera déduit de la facture finale lors de votre visite. En cas d’annulation ou de non-présentation, l’acompte ne sera pas remboursé.</p>
                    </section>

                    <!-- Section 5 -->
                    <section class="mb-8">
                        <h2 class="text-2xl font-semibold mb-4">5. Confidentialité des données</h2>
                        <p class="text-white">Les informations personnelles collectées lors de la réservation sont strictement utilisées pour la gestion des réservations et ne seront jamais partagées avec des tiers sans consentement.</p>
                    </section>

                    <!-- Conclusion -->
                    <p class="text-white">Merci de votre compréhension. Pour toute question ou demande particulière, veuillez nous contacter au <span class="font-medium">+33 2 99 90 90 90</span> ou à l’adresse e-mail suivante : <a href="mailto:hello@maisonmoel.com" class="text-blue-500 hover:underline">hello@maisonmoel.com</a>.</p>
                    <p class=" font-medium mt-6">L’équipe de Maison Moël</p>
                    <form action="/reservation/payment" method="post">
                        @csrf
                        <div class="flex items-center mt-4 mb-2">
                            <input id="default-checkbox" name="cb-cgr" type="checkbox" class="w-4 h-4 bg-[#292929] border-zinc-700 rounded focus:ring-zinc-700 focus:ring-2" required>
                            <label for="default-checkbox" class="ms-2 text-md font-medium text-white">J'accepte les conditions</label>
                        </div>
                        <button type="submit" class="bg-[#FFEB99] text-[#333333] py-2 px-4 rounded hover:bg-[#FFD966] inline-flex">
                            Suivant
                            <svg class="w-6 h-6 text-gray-800 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/>
                            </svg>
                        </button>
                    </form>
                </div>
            </section>
        </x-card-payment>
    </div>
</x-header>
