<x-header title="bg-[#353535]">
    <x-navbar></x-navbar>


    <div class="mt-6">
        <x-card>
            <h1 class="text-2xl">Modification du profil</h1>
        </x-card>
    </div>

    <div class="mt-6">
        <x-card>
            <h2 class="text-xl">Vos informations</h2>
            <div class="grid grid-cols-2">
                <form action="/profile/edit" method="post" class="pt-4">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-md text-[#FFEB99]">Nom du compte</label>
                        <input type="text" value="{{$user['nom']}}" name="name" id="name" class="border-2 bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                        @error('nom')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="prenom" class="block text-md text-[#FFEB99]">Prénom du compte</label>
                        <input type="text" value="{{$user['prenom']}}" name="prenom" id="prenom" class="border-2 bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                        @error('prenom')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-md text-[#FFEB99]">Email</label>
                        <input type="email" value="{{ $user['email'] }}" name="email" id="email" class="border-2 bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="date_naissance" class="block text-[#FFEB99] text-sm font-medium mb-1">Date de naissance</label>
                        <input type="date" value="{{ \Carbon\Carbon::parse($user['dateNaiss'])->format('Y-m-d') }}" name="date_naissance" style="color-scheme: dark;" id="date_naissance" class="bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                        @error('date_naissance')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <button type="submit" class="bg-[#FFEB99] text-[#333333] py-2 px-4 rounded hover:bg-[#FFD966]">
                            Modifier
                        </button>
                    </div>
                </form>
                <div class="text-center">
                    <div class="flex justify-center">
                    @if ($user['imageClient'])
                        <img src="http://192.168.143.9:8080/images/{{ $user['imageClient'] }}" alt="avatar" class="w-32 h-32 rounded-full">
                    @else
                        <img src="http://192.168.143.9:8080/images/defautProfil.png" alt="avatar" class="w-32 h-32 rounded-full">
                    @endif
                    </div>
                    <div class="flex justify-center">
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        Choisir une image
                        </button>
                    </div>
                    <div id="popup-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-4 md:p-5 text-center">
                                    <h2 class="text-xl font-semibold text-gray-900 dark:text-gray-100">Choisir une image</h2>
                                    <div class="flex justify-center mt-4">
                                        <img src="http://192.168.143.9:8080/images/defautProfil.png" alt="avatar" class="w-32 h-32 rounded-full">
                                        <img src="http://192.168.143.9:8080/images/defautProfil.png" alt="avatar" class="w-32 h-32 rounded-full">
                                        <img src="http://192.168.143.9:8080/images/defautProfil.png" alt="avatar" class="w-32 h-32 rounded-full">
                                    </div>
                                    <button data-modal-hide="popup-modal" type="button" class="text-[#292929] bg-[#FFEB99] focus:ring-4 focus:outline-none focus:ring-[#FFEB99] font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Choisir cet avatar
                                    </button>
                                    <button data-modal-hide="popup-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-gray-900 focus:z-10 focus:ring-4 focus:ring-gray-100">Annuler</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </x-card>
    </div>


    <div class="mt-6 mb-6">
        <x-card>
            <h2 class="text-xl">Modification du mot de passe</h2>
            <form action="/profile/edit_password" method="post" class="pt-4">
                @csrf
                <div class="mb-4">
                    <label for="current_password" class="block text-md text-[#FFEB99]">Mot de passe actuel</label>
                    <input placeholder="••••••••" type="password" name="current_password" id="current_password" class="border-2 bg-transparent rounded w-full md:w-1/2 py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                    @error('current_password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                    @if(session('error'))
                        <div class="text-red-500 mt-2 text-sm">
                            {{ session('error') }}
                        </div>
                    @endif
                </div>
                <div class="mb-4">
                    <label for="new_password" class="block text-md text-[#FFEB99]">Nouveau mot de passe</label>
                    <input placeholder="••••••••" type="password" name="new_password" id="new_password" class="border-2 bg-transparent rounded w-full md:w-1/2 py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                    @error('new_password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="new_password_confirmation" class="block text-md text-[#FFEB99]">Confirmation du mot de passe</label>
                    <input placeholder="••••••••" type="password" name="new_password_confirmation" id="new_password_confirmation" class="border-2 bg-transparent rounded w-full md:w-1/2 py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                    @error('new_password_confirmation')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-[#FFEB99] text-[#333333] py-2 px-4 rounded hover:bg-[#FFD966]">
                        Modifier
                    </button>
                </div>
            </form>
        </x-card>
    </div>
</x-header>