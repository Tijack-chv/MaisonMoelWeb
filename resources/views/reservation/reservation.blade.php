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
            <section class="py-2">
                <h1 class="text-2xl text-center font-semibold">Votre réservation</h1>
                <div class="flex flex-col items-center justify-center mt-6">
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input datepicker id="default-datepicker" type="text" class="bg-[#292929] border border-zinc-700 text-zinc-200 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5" placeholder="Sélectionner une date">
                    </div>
                    <div class="flex items-left">
                        <div class="rounded border border-zinc-700 w-1/2 text-zinc-200 mt-6 px-2 py-4 gap-2 flex flex-wrap justify-center">
                            @for ($time = strtotime('12:30'); $time <= strtotime('22:00'); $time = strtotime('+30 minutes', $time))
                                <button class="bg-[#292929] focus:border-3 focus:bg-[#313131] hover:bg-[#323232] rounded border border-zinc-700 px-3 py-2">{{ date('H:i', $time) }}</button>
                            @endfor
                        </div>
                    </div>
                    <input type="hidden" id="default-time" value="">
                    <script type="text/javascript">
                        document.querySelectorAll('#default-time').forEach((element) => {
                            document.querySelectorAll('.rounded').forEach((button) => {
                                button.addEventListener('click', () => {
                                    element.value = button.innerText;
                                });
                            });
                        });
                    </script>
                    <select id="default" class="mt-6 bg-[#292929] border border-zinc-700 text-zinc-200 mb-6 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Choisir un type de table</option>
                        @foreach($tables as $table)
                            <option value="{{ $table->idTypeTable }}">{{ $table->libelleTypeTable }}</option>
                        @endforeach
                    </select>
                </div>
            </section>
        </x-card-payment>
    </div>
</x-header>