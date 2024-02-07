<x-guest-layout>

    <div class="bg-primary">
        {{-- Navbar --}}
        <nav class="border-gray-200">
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
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-white bg-blue-700 rounded md:bg-transparent md:text-white font-medium"
                                aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-secondary-font rounded md:hover:bg-transparent md:hover:text-white">Tentang</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-secondary-font rounded md:hover:bg-transparent md:hover:text-white">Layanan</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-secondary-font rounded md:hover:bg-transparent md:hover:text-white">Karya</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 md:p-0 text-secondary-font rounded md:hover:bg-transparent md:hover:text-white">Kontak</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {{-- End Navbar --}}

        {{-- Hero --}}

        <section class="relative">
            <div class="relative z-10">
                <div class="items-center px-8 pt-12 mx-auto max-w-7xl lg:pt-14 flex">
                    <img src="{{ asset('assets/weekly_growth.png') }}" class="h-64" alt="">
                    <div class="justify-center w-full text-center max-auto">
                        <div class="justify-center w-full mx-auto">

                            <p class="text-white font-light">
                                Mari berkembang bersama kami!
                            </p>

                            <p
                                class="text-7xl font-bold tracking-tight text-white sora mt-6 max-w-xl mx-auto leading-snug">
                                Your Go-To Digital Partner
                            </p>
                            <p class="max-w-xl mx-auto font-light text-white mt-6">
                                Bersama kami mencapai impian dalam membangun produk Anda, bersama-sama mengatakan "Ya"
                                untuk
                                proyek-proyek yang luar biasa
                            </p>
                        </div>
                    </div>
                    <img src="{{ asset('assets/trusted_client.png') }}" class="h-40" alt="">
                </div>
                <div class="items-center px-8 w-full text-center pb-56">
                    <ul class="text-white font-light list-disc flex w-full gap-x-10 justify-center items-center mt-6">
                        <li>Toko Online</li>
                        <li>Point of Sales</li>
                        <li>Company Profile</li>
                        <li>Sistem Informasi</li>
                        <li>IoT</li>
                        <li>Desain Grafis/UI UX</li>
                    </ul>

                    <a href="#_"
                        class="items-center justify-center w-full px-6 py-2.5 text-center text-primary font-medium mt-10 duration-200 bg-white border-2 border-white rounded-full inline-flex hover:bg-transparent hover:border-white hover:bg-primary hover:text-white focus:outline-none lg:w-auto focus-visible:outline-white">
                        Start Project
                    </a>
                </div>
            </div>
            <img src="{{ asset('assets/pattern.png') }}" alt=""
                class="absolute top-2/3 left-0 right-0 z-0 mx-auto" width="1100">
        </section>

    </div>


</x-guest-layout>
