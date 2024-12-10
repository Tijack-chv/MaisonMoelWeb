<nav class="bg-[#292929] border-solid border-[0.1rem] border-b-[#FFEB99] border-x-transparent border-t-transparent">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="http://192.168.143.9:8080/images/LOGO_TRANS.png" class="h-[4rem]" alt="Maison Moël Logo" />
        <span class="self-center text-[#FFEB99] text-2xl font-semibold whitespace-nowrap titre-font">Maison Moël</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 active:bg-[#292929] focus:bg-[#292929] justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse">
        <li>
          <a href="/" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-zinc-700 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">Accueil</a>
        </li>
        <li>
          <a href="#" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-zinc-700 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">Carte</a>
        </li>
        <li>
          <a href="#about" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-zinc-700 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">À propos</a>
        </li>
        <li>
          @if(session('client'))
            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between w-full py-2 px-3 text-[#FFEB99] rounded hover:bg-gray-600 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0 md:w-auto">Mon compte 
              <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
              </svg>
            </button>
            <div id="dropdownNavbar" class="z-10 hidden font-normal bg-[#292929] border-2 border-[#565656] divide-y divide-gray-600 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="/reservation" class="block px-4 py-2 hover:bg-zinc-700 text-[#FFEB99]">Mes réservations</a>
                  </li>
                  <li>
                    <a href="/profile" class="block px-4 py-2 hover:bg-zinc-700 text-[#FFEB99]">Mon profil</a>
                  </li>
                </ul>
                <div class="py-1">
                  <a href="logout" class="block px-4 py-2 text-sm text-[#FFEB99] hover:bg-zinc-700">Déconnexion</a>
                </div>
            </div>
          @else
            <a href="/login" class="block py-2 px-3 text-[#FFEB99] rounded hover:bg-zinc-700 md:hover:bg-transparent md:border-0 md:hover:text-[#bfaf6e] md:p-0">Connexion</a>
          @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
