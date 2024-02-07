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
                <div class="items-center px-8 w-full text-center pb-48">
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
        {{-- End Hero --}}

        {{-- Our Expertise --}}

        <section class="bg-white">
            <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-32">
                <div class="max-w-2xl mx-auto text-center mb-8">
                    <p class="font-semibold text-2xl text-primary mb-4">
                        Kelebihan Kami
                    </p>
                    <p class="text-5xl font-bold sora tracking-tight text-black sm:text-4xl max-w-xl mx-auto">
                        Bergabung Bersama Kembangkan Bisnismu
                    </p>
                    <p class="max-w-lg mt-7 tracking-tight text-black mx-auto">
                        Berkembang bersama untuk wujudkan bisnis yang cemerlang. Gapai mimpimu untuk pemasaran
                        produk yang lebih baik
                    </p>
                </div>
                <div class="">
                    <div class="max-w-xl py-12 mx-auto text-left lg:max-w-7xl">
                        <div>
                            <div class="grid grid-cols-2 gap-12 lg:grid-cols-3 lg:space-y-0">
                                <div class="bg-soft-green p-5 rounded-xl">
                                    <div class="h-14 w-14 number-right  flex items-center justify-center">
                                        <span class="text-primary sora font-semibold text-3xl">01</span>
                                    </div>
                                    <div>
                                        <p class="mt-4 sora text-2xl font-semibold leading-6 text-black">
                                            Terstandarisasi
                                        </p>
                                    </div>
                                    <div class="mt-4 text-black line-clamp-3 hover:line-clamp-none text-sm">
                                        Saat bekerja di tempat kerja global, seringkali sulit untuk mengukur pengalaman
                                        pelatihan peserta didik, yang dapat menghambat kemajuan mereka.
                                    </div>
                                </div>
                                <div class="border border-soft-white p-5 rounded-xl">
                                    <div class="h-14 w-14 number-right  flex items-center justify-center">
                                        <span class="text-primary sora font-semibold text-3xl">02</span>
                                    </div>
                                    <div>
                                        <p class="mt-4 sora text-2xl font-semibold leading-6 text-black">
                                            Pengurangan Biaya
                                        </p>
                                    </div>
                                    <div class="mt-4 text-black line-clamp-3 hover:line-clamp-none text-sm">
                                        Pengurangan biaya pelatihan adalah salah satu manfaat terbesar dari pelatihan
                                        online. Ini dapat mengurangi biaya perjalanan, akomodasi, dan biaya pelatihan
                                        lainnya.
                                    </div>
                                </div>
                                <div class="bg-soft-green p-5 rounded-xl">
                                    <div class="h-14 w-14 number-right  flex items-center justify-center">
                                        <span class="text-primary sora font-semibold text-3xl">03</span>
                                    </div>
                                    <div>
                                        <p class="mt-4 sora text-2xl font-semibold leading-6 text-black">
                                            Kostumisasi Berlebih
                                        </p>
                                    </div>
                                    <div class="mt-4 text-black line-clamp-3 hover:line-clamp-none text-sm">
                                        Kami dapat menyesuaikan pelatihan online dengan kebutuhan peserta didik. Ini
                                        dapat di lakukan dengan menyesuaikan materi pelatihan, waktu, dan tempat. Ini
                                        dapat membantu peserta didik untuk belajar dengan cara yang lebih efektif.
                                    </div>
                                </div>
                                <div class="border border-soft-white p-5 rounded-xl">
                                    <div class="h-14 w-14 number-right  flex items-center justify-center">
                                        <span class="text-primary sora font-semibold text-3xl">04</span>
                                    </div>
                                    <div>
                                        <p class="mt-4 sora text-2xl font-semibold leading-6 text-black">
                                            Harga Terjangkau
                                        </p>
                                    </div>
                                    <div class="mt-4 text-black line-clamp-3 hover:line-clamp-none text-sm">
                                        Hemat biaya dengan pelatihan online. Ini dapat mengurangi biaya perjalanan,
                                        akomodasi, dan biaya pelatihan lainnya. Ini juga dapat mengurangi biaya
                                        pelatihan yang terkait dengan penggunaan kelas pelatihan.
                                    </div>
                                </div>
                                <div class="bg-soft-green p-5 rounded-xl">
                                    <div class="h-14 w-14 number-right  flex items-center justify-center">
                                        <span class="text-primary sora font-semibold text-3xl">03</span>
                                    </div>
                                    <div>
                                        <p class="mt-4 sora text-2xl font-semibold leading-6 text-black">
                                            Kepuasan Klien
                                        </p>
                                    </div>
                                    <div class="mt-4 text-black line-clamp-3 hover:line-clamp-none text-sm">
                                        Mari ciptakan kepuasan klien bersama kami. Kami akan membantu Anda dalam proses
                                        pembuatan website yang sesuai dengan keinginan Anda. Kami akan memberikan
                                        layanan terbaik untuk Anda.
                                    </div>
                                </div>
                                <div class="border border-soft-white p-5 rounded-xl">
                                    <div class="h-14 w-14 number-right  flex items-center justify-center">
                                        <span class="text-primary sora font-semibold text-3xl">02</span>
                                    </div>
                                    <div>
                                        <p class="mt-4 sora text-2xl font-semibold leading-6 text-black">
                                            Efektifitas Bisnis
                                        </p>
                                    </div>
                                    <div class="mt-4 text-black line-clamp-3 hover:line-clamp-none text-sm">
                                        Pengembangan website akan membantu Anda dalam meningkatkan efektifitas bisnis
                                        Anda. Kami akan membantu Anda dalam proses pembuatan website yang sesuai dengan
                                        keinginan Anda.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Our Expertise --}}

    </div>


</x-guest-layout>
