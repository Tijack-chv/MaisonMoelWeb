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
            <form action="/profile/edit" method="post" class="pt-4">
                @csrf
                <div class="mb-4">
                    <label for="nom" class="block text-md text-[#FFEB99]">Nom du compte</label>
                    <input type="text" value="{{$user['nom']}}" name="nom" id="nom" class="border-2 bg-transparent rounded w-full md:w-1/2 py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                    @error('nom')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="prenom" class="block text-md text-[#FFEB99]">Prénom du compte</label>
                    <input type="text" value="{{$user['prenom']}}" name="prenom" id="prenom" class="border-2 bg-transparent rounded w-full md:w-1/2 py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                    @error('prenom')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-md text-[#FFEB99]">Email</label>
                    <input type="email" value="{{ $user['email'] }}" name="email" id="email" class="border-2 bg-transparent rounded w-full md:w-1/2 py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]" value="{{ old('email') }}">
                    @error('email')
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


    <div class="mt-6 mb-6">
        <x-card>
            <h2 class="text-xl">Modification du mot de passe</h2>
            <form action="/profile/" method="post" class="pt-4">
                @csrf
                <div class="mb-4">
                    <label for="current_password" class="block text-md text-[#FFEB99]">Mot de passe actuel</label>
                    <input placeholder="••••••••" type="password" name="current_password" id="current_password" class="border-2 bg-transparent rounded w-full md:w-1/2 py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
                    @error('current_password')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
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