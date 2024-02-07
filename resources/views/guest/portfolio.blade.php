<x-guest-layout>
    {{-- Hero --}}
    <section class="bg-primary relative">
        <div class="relative z-10">
            <div class="items-center px-8 pt-12 pb-20 mx-auto max-w-7xl lg:pt-14 grid grid-cols-12 gap-x-14 mb-16">
                <div class="col-span-6">
                    <h1 class="text-5xl font-bold tracking-tight text-white sora leading-snug capitalize max-w-lg">
                        You bring the&NewLine;Expertise, we'll make
                        it unforgettable.
                    </h1>
                    <p class="text-white leading-7 max-w-md mt-7">
                        Kami dapat mewujudkan keinginan anda dan memotivasi untuk mencapai tujuan bisnis seiring dengan
                        kemajuan teknologi dan pasar.
                    </p>

                    <div class="col-span-2 flex items-center gap-x-11 mt-10">
                        <div class="">
                            <h1 class="text-white font-bold sora text-2xl mb-1">
                                200+
                            </h1>
                            <p class="text-white clear-start">Proyek Selesai</p>
                        </div>
                        <div class="">
                            <h1 class="text-white font-bold sora text-2xl mb-1">
                                1.234+
                            </h1>
                            <p class="text-white clear-start">Klient Terpercaya</p>
                        </div>
                        <div class="">
                            <h1 class="text-white font-bold sora text-2xl mb-1">
                                50+
                            </h1>
                            <p class="text-white clear-start">Partnership</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-6">
                    <img src="{{ asset('assets/bgkarya.png') }}" class="object-cover h-full w-full" alt="">
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/pattern.png') }}" alt="" class="absolute top-2/3 left-0 right-0 z-0 mx-auto"
            width="1100">
    </section>
    {{-- End Hero --}}

    {{-- Portfolio --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 pt-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-32">
            <div class="flex items-center justify-between mb-14">
                <a href="#_"
                    class="items-center justify-center w-full px-7 py-3 text-center text-white duration-200 bg-primary border border-primary rounded-[14px] inline-flex hover:bg-transparent hover:border-primary hover:bg-primary hover:text-primary focus:outline-none lg:w-auto focus-visible:outline-primary shadow-btn">
                    Semua
                </a>
                <a href="#_"
                    class="items-center justify-center w-full px-7 py-3 text-center text-gray-500 duration-200 bg-transparent border border-border-color rounded-[14px] inline-flex hover:bg-transparent focus:outline-none lg:w-auto focus-visible:outline-primary">
                    Toko Online
                </a>
                <a href="#_"
                    class="items-center justify-center w-full px-7 py-3 text-center text-gray-500 duration-200 bg-transparent border border-border-color rounded-[14px] inline-flex hover:bg-transparent focus:outline-none lg:w-auto focus-visible:outline-primary">
                    Company Profile
                </a>
                <a href="#_"
                    class="items-center justify-center w-full px-7 py-3 text-center text-gray-500 duration-200 bg-transparent border border-border-color rounded-[14px] inline-flex hover:bg-transparent focus:outline-none lg:w-auto focus-visible:outline-primary">
                    IoT
                </a>
                <a href="#_"
                    class="items-center justify-center w-full px-7 py-3 text-center text-gray-500 duration-200 bg-transparent border border-border-color rounded-[14px] inline-flex hover:bg-transparent focus:outline-none lg:w-auto focus-visible:outline-primary">
                    Sistem Informasi
                </a>
                <a href="#_"
                    class="items-center justify-center w-full px-7 py-3 text-center text-gray-500 duration-200 bg-transparent border border-border-color rounded-[14px] inline-flex hover:bg-transparent focus:outline-none lg:w-auto focus-visible:outline-primary">
                    UI UX Desain
                </a>
            </div>
            <div class="grid grid-cols-3 gap-6">
                @for ($i = 0; $i <= 6; $i++)
                    <div class="border p-5 rounded-[10px]">
                        <img src="{{ asset('assets/img_portfolio1.png') }}" class="w-full rounded-[7px] mb-5"
                            height="221" alt="">
                        <span class="text-desc-font text-xs mb-2">UI Design \ Brand Identity</span>
                        <h1 class="sora text-black font-semibold mb-2">Merry Christmas - Website</h1>
                        <p class="text-[#556070] text-sm leading-5 mb-3">
                            👉 Relik is a beautiful, simple, developer-friendly, highly customizable admin dashboard
                            template with a 💎 high-quality UI & well-organized Figma file🔥.
                        </p>
                        <div class="flex items-center gap-x-2">
                            <span class="font-medium text-primary text-sm">Lihat Studi Kasus</span>
                            <i class="fas fa-arrow-right text-primary text-sm"></i>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </section>
    {{-- End Portfolio --}}

    {{-- FAQ --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 pt-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-32">
            <div class="mx-auto max-w-xl text-center mb-16">
                <h3 class="font-semibold text-primary text-xl mb-8">FAQs</h3>
                <h1 class="sora text-black font-semibold text-3xl mb-4">
                    Pertanyaan yang Sering Diajukan
                </h1>
                <p class="text-desc-font leading-6">
                    Berkembang bersama untuk wujudkan bisnis yang cemerlang. Gapai mimpimu untuk pemasaran produk yang
                    lebih
                    baik
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4">
                <div class="active-faq">
                    <h1 class="font-semibold text-xl mb-5">
                        Bagaimana cara membeli produk?
                    </h1>
                    <p class="leading-6">
                        Over 350,000 online businesses and entrepreneurs have used Modalyst. It's the easiest way to
                        find the best print on demand companies
                    </p>
                </div>
                <div class="faq">
                    <h1 class="font-semibold text-xl mb-5">
                        Apakah bisa di kostumisasi?
                    </h1>
                    <p class="leading-6">
                        Over 350,000 online businesses and entrepreneurs have used Modalyst. It's the easiest way to
                        find the best print on demand companies
                    </p>
                </div>
                <div class="faq">
                    <h1 class="font-semibold text-xl mb-5">
                        Apakah ada garansi?
                    </h1>
                    <p class="leading-6">
                        Over 350,000 online businesses and entrepreneurs have used Modalyst. It's the easiest way to
                        find the best print on demand companies
                    </p>
                </div>
                <div class="faq">
                    <h1 class="font-semibold text-xl mb-5">
                        Bagaimana dengan keamanan-nya?
                    </h1>
                    <p class="leading-6">
                        Over 350,000 online businesses and entrepreneurs have used Modalyst. It's the easiest way to
                        find the best print on demand companies
                    </p>
                </div>
                <div class="faq">
                    <h1 class="font-semibold text-xl mb-5">
                        Apakah ada biaya tambahan?
                    </h1>
                    <p class="leading-6">
                        Over 350,000 online businesses and entrepreneurs have used Modalyst. It's the easiest way to
                        find the best print on demand companies
                    </p>
                </div>
                <div class="faq">
                    <h1 class="font-semibold text-xl mb-5">
                        Apakah ada maintenance?
                    </h1>
                    <p class="leading-6">
                        Over 350,000 online businesses and entrepreneurs have used Modalyst. It's the easiest way to
                        find the best print on demand companies
                    </p>
                </div>
            </div>
        </div>
    </section>


</x-guest-layout>
