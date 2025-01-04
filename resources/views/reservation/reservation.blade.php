<x-header title="bg-[#353535]">
    <x-navbar></x-navbar>
    <div class="mt-6 mb-6">
        <x-card-payment>
            <ol class="flex items-center w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400 sm:text-base mb-2 mt-4 sm:flex hidden">
                <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                    Réservation
                </li>
                <li class="flex md:w-full items-center sm:after:content-[''] after:w-full after:h-1 after:border-b after:border-gray-200 after:border-1 after:hidden sm:after:inline-block after:mx-6 xl:after:mx-10">
                    CGR
                </li>
                <li class="flex items-center">
                    Paiement
                </li>
            </ol>
            <section class="pb-2 pt-6">
                <h1 class="place-self-center text-center text-2xl lg:text-4xl text-[#FFEB99] titre-font">Votre réservation</h1>
                <div class="flex flex-col items-center justify-center">
                    <form method="post" id="form_test" action="/reservation" class="rounded border border-zinc-700 md:w-9/12 text-zinc-200 mt-2 px-2 py-4 gap-2 flex flex-wrap justify-center">
                        @csrf
                        <h1 class="text-xl text-left font-semibold mt-1 w-full mx-2">La date :</h1>
                        <div class="relative w-full mx-2 mb-4">
                            <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                                <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                </svg>
                            </div>
                            <input id="default-datepicker" value="{{ date('Y-m-d') }}" min="{{ date('Y-m-d') }}" type="date" class="bg-[#292929] border border-zinc-700 text-white font-semibold text-sm rounded-lg focus:ring-zinc-700 focus:border-zinc-700 block w-full ps-10 p-2.5" placeholder="Sélectionner une date">
                        </div>
                        <div class="flex items-center justify-center flex-wrap w-full gap-2 mx-2">
                            <ul class="grid w-full gap-3 md:grid-cols-4" id="hours">
                                
                            </ul>
                        </div>
                        <h1 class="text-lg text-center font-medium mt-2" id="date_resume">Date : xx/xx/xxxx à xx:xx</h1>
                        <input type="hidden" id="datetime_reservation" name="datetime_reservation" value="">
                        <script type="text/javascript">
                            function updateDate() {
                                var date = document.getElementById('default-datepicker').value ? document.getElementById('default-datepicker').value : 'xx/xx/xxxx';
                                var time = document.querySelector('input[name="hosting"]:checked')?.value ? document.querySelector('input[name="hosting"]:checked').value : 'xx:xx';
                                var date_time = date + ' à ' + time;
                                document.getElementById('date_resume').innerHTML = 'Date : ' + date_time;
                                document.getElementById('datetime_reservation').value = date + ' ' + time + ':00';
                            }

                            $('input[name="hosting"]').change(function() {
                                updateDate();
                            });

                            $('#default-datepicker').change(function() {
                                fetch('/reservation/hours?date=' + document.getElementById('default-datepicker').value)
                                    .then(response => response.text())
                                    .then(html => {
                                        document.getElementById('hours').innerHTML = html;
                                });
                                updateDate();
                            });
                        </script>

                        <h1 class="text-xl text-left font-semibold mt-4 w-full mx-2">La table :</h1>
                        <select name="type_table" id="default" class="mx-2 bg-[#292929] border border-zinc-700 text-white mb-2 text-sm rounded-lg focus:ring-zinc-700 focus:border-zinc-700 block w-full p-2.5">
                            <option selected>Choisir un type de table</option>
                            @foreach($tables as $table)
                                <option value="{{ $table->idTypeTable }}">{{ $table->libelleTypeTable }}</option>
                            @endforeach
                        </select>
                        <h1 class="text-xl text-left font-semibold mt-4 w-full mx-2">Nombres de personnes :</h1>
                        <input type="number" name="nb_personnes" min="1" max="99" id="nb_personnes" class="text-white mx-2 bg-[#292929] border border-zinc-700 text-zinc-200 mb-2 text-sm rounded-lg focus:ring-zinc-700 focus:border-zinc-700 block w-full p-2.5" placeholder="Nombre de personnes">

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
