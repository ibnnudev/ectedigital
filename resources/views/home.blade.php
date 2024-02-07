<x-guest-layout>

    <div>
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
        <section class="relative bg-primary">
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

        {{-- Let's work together --}}
        <section>
            <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-4">
                        <img src="{{ asset('assets/bgcard.png') }}" alt="">
                    </div>
                    <div class="bg-soft-gray rounded-xl p-10 flex items-center justify-between col-span-8">
                        <div class="max-w-40">
                            <h3 class="font-bold sora text-3xl">
                                Partner Terpercaya
                            </h3>
                            <p class="text-gray-400 font-light mt-5">
                                Kepercayaan dan intergritas adalah kunci keberhasilan
                            </p>
                        </div>
                        <div class="text-center">
                            <h3 class="font-bold text-4xl text-primary">
                                200+
                            </h3>
                            <p class="text-gray-400 font-light mt-4">
                                Proyek Selesai
                            </p>
                        </div>
                        <div class="text-center">
                            <h3 class="font-bold text-4xl text-primary">
                                1.230+
                            </h3>
                            <p class="text-gray-400 font-light mt-4">
                                Klien Terpuaskan
                            </p>
                        </div>
                        <div>
                            <button type="button"
                                class="text-white bg-primary hover:bg-primary focus:outline-none text-sm rounded-full px-6 py-3 text-center me-2 mb-2 shadow-btn">
                                Let's Work
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Let's work together --}}

        {{-- Why Choose Us --}}
        <section>
            <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-6">
                        <p class="text-desc-font text-base">
                            Kenapa memilih kami?
                        </p>
                        <h1 class="text-4xl font-bold text-black sora max-w-md mt-4">
                            Bekerja Cepat adalah fokus kami
                        </h1>
                        <p class="text-desc-font text-base mt-4">
                            Dalam setiap proyek, kami memastikan untuk memberikan hasil dengan cepat tanpa mengorbankan
                            standar kualitas.
                        </p>
                    </div>
                    <div class="col-span-6">
                        <img src="{{ asset('assets/img_timeline.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        {{-- End Why Choose Us --}}

        {{-- Who Us --}}
        <section>
            <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
                <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-6">
                        <img src="{{ asset('assets/img_whous.png') }}" alt="">
                    </div>
                    <div></div>
                    <div class="col-span-5 self-center">
                        <p class="text-desc-font text-base">
                            Siapa kami?
                        </p>
                        <h1 class="text-4xl font-bold text-black sora max-w-md mt-4">
                            Dipercaya 100% oleh banyak orang
                        </h1>
                        <p class="text-desc-font text-base mt-4 max-w-md">
                            Bergabunglah dengan komunitas yang mempercayakan kami, dan rasakan kehandalan
                        </p>

                        <div class="mt-6">
                            <button type="button"
                                class="text-white bg-primary hover:bg-primary focus:outline-none text-sm rounded-full px-6 py-3 text-center me-2 mb-2 shadow-btn">
                                Let's Work
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Who Us --}}

        {{-- Our Portolio --}}
        <section>
            <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
                <div class="grid grid-cols-12 gap-6 items-center">
                    <div class="col-span-6">
                        <p class="text-desc-font text-base">
                            Proyek
                        </p>
                        <h1 class="text-4xl font-bold text-black sora mt-4">
                            Portofolio Terbaik Kami
                        </h1>
                        <p class="text-desc-font text-base mt-4">
                            Selama bertahun-tahun, kami telah membantu ratusan klien yang ingin memulai bisnis di dunia
                            digital. Lihat beberapa karya terbaik kami.
                        </p>
                    </div>
                    <div class="col-span-6 place-self-end self-center">
                        <button type="button"
                            class="text-white bg-primary hover:bg-primary focus:outline-none text-sm rounded-full px-6 py-3 text-center me-2 mb-2 shadow-btn">
                            Lihat proyek lainnya
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Our Portolio --}}

        {{-- Testimonial --}}
        <section>
            <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
                <div class="max-w-3xl mx-auto text-center">
                    <p class="text-desc-font mb-4">
                        Apa yang mereka katakan?
                    </p>
                    <h1 class="text-black text-4xl sora font-bold mb-1">
                        Testimonial
                    </h1>
                    <p class="text-desc-font mb-10">
                        Kesan dari klien yang telah kami kerjakan
                    </p>
                    <img src="{{ asset('assets/img_googlemeet.png') }}" width="170" height="59"
                        alt="img_googlemeet" class="mb-4 mx-auto">
                    <p class="text-xl text-black leading-10 mb-11">
                        Produk ini tidak hanya efektif, tetapi juga memberikan nilai lebih. Sebuah pilihan yang sangat
                        tepat, saya sungguh merekomendasikannya kepada semua orang. Terima kasih
                    </p>
                    <div class="justify-center mb-1">
                        <p class="text-2xl font-bold text-black sora">
                            Moh Ibnu Abdurrohman Sutio
                        </p>
                        <span class="text-black text-sm">
                            Web Developer - Ecte Digital
                        </span>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Testimonial --}}

        {{-- Contact Us --}}
        <section>
            <div class="relative items-center w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
                <div class="bg-primary rounded-4xl p-10 flex items-center justify-between bg-pattern-line">
                    <div class="text-white max-w-xl">
                        <h1 class="font-bold sora text-3xl mb-3">
                            Bekerja Bersama dengan Ecte Digital
                        </h1>
                        <p class="font-light">
                            Perusahaan kami adalah perusahaan profesional, dengan layanan efektif dan tim expert yang
                            bisa diandalkan
                        </p>
                    </div>
                    <div class="place-self-end self-center">
                        <button type="button"
                            class="text-primary bg-white hover:bg-white focus:outline-none text-sm rounded-full px-6 py-3 text-center me-2 mb-2 shadow-btn">
                            Konsultasikan Bisnis Anda
                        </button>
                    </div>
                </div>
            </div>
        </section>
        {{-- End Contact Us --}}

        {{-- Footer --}}

        <footer class="bg-white" aria-labelledby="footer-heading">
            <h2 id="footer-heading" class="sr-only">Footer</h2>
            <div class="px-5 py-12 mx-auto max-w-7xl lg:py-16 md:px-12 lg:px-20">
                <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                    <div class="xl:col-span-1">
                        <h1 class="w-1/2 mt-2 text-2xl text-black font-bold sora">Ecte Digital</h1>
                        <p class="text-desc-font text-sm mt-4 font-light leading-6">
                            Ecte Digital adalah digital agency yang bergerak dibidang pengembangan sistem dan grafis
                            untuk segala skala bisnis
                        </p>
                        <div class="flex gap-x-2 mt-12">
                            <i class="fa-brands fa-instagram text-desc-font text-lg"></i>
                            <i class="fa-brands fa-facebook text-desc-font text-lg"></i>
                            <i class="fa-brands fa-twitter text-desc-font text-lg"></i>
                            <i class="fa-brands fa-youtube text-desc-font text-lg"></i>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-8 mt-12 xl:mt-0 xl:col-span-2">
                        <div class="md:grid md:grid-cols-2 md:gap-8">
                            <div>
                                <h3 class="font-semibold leading-6 text-black">
                                    Navigasi
                                </h3>
                                <ul role="list" class="mt-4 space-y-3">
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Beranda
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Tentang
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Layanan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Produk
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Kontak
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="mt-12 md:mt-0">
                                <h3 class="font-semibold leading-6 uppercase text-black">
                                    Tentang
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Tim
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Perusahaan
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Sejarah
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#_" class="text-sm text-desc-font hover:text-primary">
                                            Berita
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="hidden lg:justify-end md:grid md:grid-cols-1">
                            <div class="mt-12 md:mt-0 w-full">
                                <h3 class="font-semibold leading-6 uppercase text-black">
                                    Tentang
                                </h3>
                                <ul role="list" class="mt-4 space-y-4">
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <i class="fas fa-phone-alt text-black transform scale-x-[-1]"></i>
                                        <p class="text-gray-500 text-sm">
                                            081515 - 1449 - 81
                                        </p>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <i class="fas fa-envelope text-black"></i>
                                        <p class="text-gray-500 text-sm">
                                            ecte.digital@gmail.com
                                        </p>
                                    </li>
                                    <li class="flex items-center space-x-3 rtl:space-x-reverse">
                                        <i class="fas fa-map-marker-alt text-black"></i>
                                        <p class="text-gray-500 text-sm">
                                            Jl. Mastrip Po. Box 164, Kab. Jember Jawa Timur, Indonesia 68121
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div
                class="px-5 py-12 mx-auto border-t max-w-7xl sm:px-6 md:flex md:items-center md:justify-between lg:px-20">
                <div class="flex justify-center mb-8 space-x-6 md:order-last md:mb-0">
                    <span class="inline-flex justify-center w-full gap-3 lg:ml-auto md:justify-start md:w-auto">
                        <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                            <span class="sr-only"> github</span>
                            <ion-icon class="w-5 h-5 md hydrated" name="logo-github" role="img"
                                aria-label="logo github"></ion-icon>
                        </a>
                        <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                            <span class="sr-only"> twitter</span>
                            <ion-icon class="w-5 h-5 md hydrated" name="logo-twitter" role="img"
                                aria-label="logo twitter"></ion-icon>
                        </a>
                        <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                            <span class="sr-only">Instagram</span>
                            <ion-icon class="w-5 h-5 md hydrated" name="logo-instagram" role="img"
                                aria-label="logo instagram"></ion-icon>
                        </a>
                        <a class="w-6 h-6 transition fill-black hover:text-blue-500">
                            <span class="sr-only">Linkedin</span>
                            <ion-icon class="w-5 h-5 md hydrated" name="logo-linkedin" role="img"
                                aria-label="logo linkedin"></ion-icon>
                        </a>
                    </span>
                </div>
                <div class="mt-8 md:mt-0 md:order-1">
                    <span class="mt-2 text-sm font-light text-gray-500">
                        Copyright © 2024
                        <a href="#_" class="mx-2 text-wickedblue hover:text-gray-500"
                            rel="noopener noreferrer">Ecte Digital</a>. Since 2024
                    </span>
                </div>
            </div>
        </footer>
        {{-- End Footer --}}

    </div>


</x-guest-layout>
