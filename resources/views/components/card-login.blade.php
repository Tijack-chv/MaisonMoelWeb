<div class="border-[0.1rem] border-[#FFEB99] w-1/4 h-fit p-6 rounded mx-auto">
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
        <div class="mb-4">
            <label for="email" class="block text-sm text-[#FFEB99]">Email</label>
            <input type="email" name="email" id="email" class="bg-[#292929] text-[#FFEB99] border-2 w-full p-4 rounded-lg" value="{{ old('email') }}">
            @error('email')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm text-[#FFEB99]">Mot de passe</label>
            <input type="password" name="password" id="password" class="bg-[#292929] text-[#FFEB99] border-2 w-full p-4 rounded-lg">
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