<div class="border-[0.1rem] border-[#FFEB99] bg-[#292929] sm:w-full md:w-2/4 lg:w-1/3 h-fit p-6 rounded mx-auto">
    <h1 class="text-xl md:text-3xl text-[#FFEB99] text-center mb-3">
        Inscription
    </h1>
    @if (session('error'))
        <x-alert-danger>
            <span class="font-medium">Erreur !</span> {{ session('error') }}
        </x-alert-danger>
    @endif
    <form method="post" action="/register">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-[#FFEB99] text-sm font-medium mb-1">Nom</label>
            <input type="text" name="name" id="name" class="bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
            @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="prenom" class="block text-[#FFEB99] text-sm font-medium mb-1">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
            @error('prenom')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-[#FFEB99] text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" class="bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="date_naissance" class="block text-[#FFEB99] text-sm font-medium mb-1">Date de naissance</label>
            <input type="date" name="date_naissance" style="color-scheme: dark;" id="date_naissance" class="bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
            @error('date_naissance')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="password" class="block text-[#FFEB99] text-sm font-medium mb-1">Mot de passe</label>
            <input type="password" name="password" id="password" class="bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
            @error('password')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-4">
            <label for="password_confirmation" class="block text-[#FFEB99] text-sm font-medium mb-1">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
            @error('password_confirmation')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div>
            <button type="submit" class="bg-[#FFEB99] text-[#333333] py-2 px-4 rounded hover:bg-[#FFD966]">S'inscrire</button>
        </div>
    </form>
    <div class="mt-4">
        <a href="/login" class="text-[#FFEB99] text-sm underline">Se connecter</a>
    </div>
    
</div>