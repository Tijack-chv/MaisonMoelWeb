<div class="border-[0.1rem] border-[#FFEB99] w-1/4 h-fit p-6 rounded mx-auto">
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
            <input type="text" name="name" id="name" class="border-[0.1rem] border-[#FFEB99] bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
        </div>
        
        <div class="mb-4">
            <label for="email" class="block text-[#FFEB99] text-sm font-medium mb-1">Email</label>
            <input type="email" name="email" id="email" class="border-[0.1rem] border-[#FFEB99] bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
        </div>
        
        <div class="mb-4">
            <label for="password" class="block text-[#FFEB99] text-sm font-medium mb-1">Mot de passe</label>
            <input type="password" name="password" id="password" class="border-[0.1rem] border-[#FFEB99] bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
        </div>
        
        <div class="mb-4">
            <label for="password_confirmation" class="block text-[#FFEB99] text-sm font-medium mb-1">Confirmer le mot de passe</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="border-[0.1rem] border-[#FFEB99] bg-transparent rounded w-full py-2 px-3 text-[#FFEB99] placeholder-[#FFEB99]::placeholder focus:outline-none focus:border-[#FFEB99]">
        </div>
        
        <div>
            <button type="submit" class="bg-[#FFEB99] text-[#333333] py-2 px-4 rounded hover:bg-[#FFD966]">S'inscrire</button>
        </div>
    </form>
    <div class="mt-4">
        <a href="/login" class="text-[#FFEB99] text-sm underline">Se connecter</a>
    </div>
    
</div>