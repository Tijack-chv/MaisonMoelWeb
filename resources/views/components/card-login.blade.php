<div class="border-[0.1rem] bg-[#292929] border-[#FFEB99] sm:w-full md:w-2/4 lg:w-1/3 h-fit p-6 rounded mx-auto">
    <h1 class="text-xl md:text-3xl text-[#FFEB99] text-center mb-3">
        Connexion
    </h1>
    @if (session('error'))
        <x-alert-danger>
            <span class="font-medium">Erreur !</span> {{ session('error') }}
        </x-alert-danger>
    @endif
    <form method="post" action="/login" class="mt-3">
        @csrf

        <div>
            
        </div>
        <div class="mb-4">
            <label for="email" class="block text-sm text-[#FFEB99]">Email</label>
            <input type="email" name="email" id="email" class="border-2 bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]" value="{{ old('email') }}">
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm text-[#FFEB99]">Mot de passe</label>
            <input type="password" name="password" id="password" class="border-2 bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <button type="submit" class="bg-[#FFEB99] text-[#333333] py-2 px-4 rounded hover:bg-[#FFD966]">
                Se connecter
            </button>
        </div>
    </form>
    <div class="mt-4">
        <a href="/register" class="text-[#FFEB99] text-sm underline">S'inscrire</a>
    </div>
</div>