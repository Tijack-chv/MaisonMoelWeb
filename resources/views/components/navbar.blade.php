<nav class="bg-[#292929] border-solid border-[0.1rem] border-b-[#FFEB99] border-x-transparent border-t-transparent">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('LOGO_TRANS.png') }}" class="h-[4rem]" alt="Maison Moël Logo" />
        <span class="self-center text-[#FFEB99] text-2xl font-semibold whitespace-nowrap">Maison Moël</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse">
        <li>
          <a href="#" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">Accueil</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">Carte</a>
        </li>
        <li>
          <a href="#about" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">À propos</a>
        </li>
        <li>
          <a href="/login" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">Connexion</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
