{{-- Navbar --}}
<nav class="border-gray-200 bg-primary">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('assets/logo mini.png') }}" class="h-10" alt="Flowbite Logo" />
        </a>
        <div class="flex md:order-2 gap-x-3 items-center">
            <div class="flex rounded-full w-10 h-10 border border-white justify-center items-center">
                <span class="text-white text-sm">
                    EN
                </span>
            </div>
            <div class="flex rounded-full w-8 h-8 justify-center items-center">
                <span class="text-secondary-font text-sm">
                    ID
                </span>
            </div>
            <i class="fa-brands fa-instagram text-white text-lg"></i>
            <i class="fa-brands fa-facebook text-white text-lg"></i>
            <i class="fa-brands fa-twitter text-white text-lg"></i>
            <i class="fa-brands fa-youtube text-white text-lg"></i>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul
                class="flex flex-col text-sm p-4 md:p-0 mt-4 border border-gray-100 rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                <li>
                    <a href="/"
                        class="block py-2 px-3 md:p-0 rounded md:bg-transparent {{ request()->routeIs('guest.home') ? 'font-medium text-white' : 'text-secondary-font' }}"
                        aria-current="page">Beranda</a>
                </li>
                <li>
                    <a href="{{ route('guest.about') }}"
                        class="block py-2 px-3 md:p-0 rounded md:hover:bg-transparent md:hover:text-white {{ request()->routeIs('guest.about') ? 'font-medium text-white' : 'text-secondary-font' }}">Tentang</a>
                </li>
                <li>
                    <a href="{{ route('guest.service') }}"
                        class="block py-2 px-3 md:p-0 rounded md:hover:bg-transparent md:hover:text-white {{ request()->routeIs('guest.service') ? 'font-medium text-white' : 'text-secondary-font' }}">Layanan</a>
                </li>
                <li>
                    <a href="{{ route('guest.portfolio') }}"
                        class="block py-2 px-3 md:p-0 rounded md:hover:bg-transparent md:hover:text-white {{ request()->routeIs('guest.portfolio') ? 'font-medium text-white' : 'text-secondary-font' }}">Karya</a>
                </li>
                <li>
                    <a href="{{ route('guest.contact') }}"
                        class="block py-2 px-3 md:p-0 rounded md:hover:bg-transparent md:hover:text-white {{ request()->routeIs('guest.contact') ? 'font-medium text-white' : 'text-secondary-font' }}">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
{{-- End Navbar --}}
