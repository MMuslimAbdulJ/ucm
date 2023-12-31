<nav class="top-0 left-0 z-20 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-none">
    <div class="flex flex-wrap items-center justify-between max-w-screen-md p-4 mx-auto">
        <a href="https://flowbite.com/" class="flex items-center">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 mr-3" alt="Flowbite Logo" />
            <span class="self-center text-lg font-semibold whitespace-nowrap dark:text-white">UNPI CLASS
                MANAGEMENT</span>
        </a>
        <div class="flex md:order-2">
            <button data-collapse-toggle="navbar-sticky" type="button"
                class="inline-flex items-center justify-center w-10 h-10 p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul
                class="flex flex-col p-4 mt-4 font-medium border border-gray-100 rounded-lg md:p-0 bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-800 dark:border-gray-700">
                <li>
                    <a href="{{ route('home') }}" wire:navigate
                        class="block py-2 pl-3 pr-4 text-white  rounded md:bg-transparent  md:p-0  {{ request()->routeIs('home') ? 'bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : '' }} dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('jadwal') }}" wire:navigate
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded md:bg-transparent hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ request()->routeIs('jadwal') ? 'bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : '' }} dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Jadwal</a>
                </li>
                <li>
                    <a href="{{ route('faq') }}" wire:navigate
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded md:bg-transparent hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ request()->routeIs('faq') ? 'bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : '' }} dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">FAQ</a>
                </li>
                <li>
                    <a href="{{ route('about') }}" wire:navigate
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded md:bg-transparent hover:bg-gray-100 md:hover:bg-transparent md:p-0 {{ request()->routeIs('about') ? 'bg-blue-700 md:text-blue-700 md:dark:text-blue-500' : '' }} dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tentang</a>
                </li>
            </ul>
            <button id="theme-toggle" type="button"
                class="text-gray-500 ml-5 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>
    </div>
</nav>
