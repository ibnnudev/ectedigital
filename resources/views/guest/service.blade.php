<x-guest-layout>
    {{-- Hero --}}
    <section class="bg-primary relative">
        <div class="relative z-10">
            <div class="items-center px-8 pt-12 pb-20 mx-auto max-w-7xl lg:pt-14 grid grid-cols-12 gap-x-14 mb-16">
                <div class="col-span-6">
                    <img src="{{ asset('assets/imglayanan.png')}}" class="object-cover h-full w-full" alt="">
                </div>
                <div class="col-span-6">
                    <h1 class="text-5xl font-bold tracking-tight text-white sora leading-snug capitalize max-w-lg">
                        Kami Menyediakan&NewLine;Layanan Terbaik
                    </h1>
                    <p class="text-white leading-7 max-w-lg mt-7">
                        Kami dengan bangga menghadirkan solusi terbaik untuk memenuhi kebutuhan Anda.
                    </p>

                    <p class="text-white leading-7 max-w-lg mt-4">
                        Dengan komitmen kami terhadap kualitas dan inovasi, 
                        layanan kami dirancang untuk memberikan pengalaman luar biasa yang melebihi ekspektasi. 
                        Percayakan kebutuhan Anda kepada kami, dan rasakan perbedaan layanan terbaik yang kami tawarkan
                    </p>

                    <div class="col-span-2 flex items-center gap-x-11 mt-3">
                        <a href="#_"
                            class=" w-full px-6 py-2.5 text-center text-primary font-medium mt-10 duration-200 bg-white border-2 border-white rounded-full inline-flex hover:bg-transparent hover:border-white hover:bg-primary hover:text-white focus:outline-none lg:w-auto focus-visible:outline-white">
                            Let's Work
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('assets/pattern.png') }}" alt="" class="absolute top-2/3 left-0 right-0 z-0 mx-auto"
            width="1100">
    </section>
    {{-- End Hero --}}

    {{-- Our Services --}}
    <section class="bg-white">
        <div
            class="relative items-start w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:pt-22 lg:pb-32 grid grid-cols-12">
            <div class="col-span-5">
                <span class="bg-gray-100 text-[#132238] text-xs font-medium me-2 px-4 py-2 rounded-full dark:bg-gray-200">99.96% CLIENT SATISFACTION</span>
                <h1 class="text-[#132238] text-5xl sora mt-5 font-bold">
                    Layanan Kami
                </h1>
                <p class="text-desc-font  leading-7 max-w-lg mt-7">
                    Kami akan membantu Anda menemukan solusi dan menyelesaikan masalah Anda, 
                    Kami menggunakan desain proses untuk membuat produk digital. 
                    Selain itu juga membantu bisnis mereka.
                </p>

                <p class="text-desc-font  leading-7 max-w-lg mt-4">
                    Kami menggunakan desain proses untuk membuat produk digital. 
                    selain itu juga membantu bisnis mereka
                </p>

                <div class="col-span-2 flex items-center gap-x-11 mt-3">
                    <a href="#_"
                        class=" w-full px-6 py-2.5 text-center text-white font-medium mt-10 duration-200 bg-primary border-2 border-primary rounded-full inline-flex hover:bg-transparent hover:border-primary hover:bg-primary hover:text-primary focus:outline-none lg:w-auto focus-visible:outline-primary">
                        Let's Work
                    </a>
                </div>
            </div>
            <div></div>
            <div class="col-span-5">
                <ul class="space-y-4 text-left">
                    <li>
                        <a href="#" class="flex items-start space-x-3 rtl:space-x-reverse max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <img src="{{ asset('assets/ServicesWebDev.png')}}" class=" h-full w-full" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-start space-x-3 rtl:space-x-reverse max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <img src="{{ asset('assets/ServicesAndroApps.png')}}" class=" h-full w-full" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-start space-x-3 rtl:space-x-reverse max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <img src="{{ asset('assets/ServicesIOT.png')}}" class=" h-full w-full" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-start space-x-3 rtl:space-x-reverse max-w-lg p-6 bg-white border border-gray-200 rounded-lg shadow">
                            <img src="{{ asset('assets/ServicesDesign.png')}}" class=" h-full w-full" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{-- End Our Services --}}

    {{-- Start How We Work --}}
    <section class="bg-white">
        <div class="relative items-center w-full px-5 pt-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:pt-22 lg:pb-22">
            <div class="mx-auto max-w-xl text-center mb-16">
                <h1 class="sora text-[#132238] font-semibold text-3xl mb-4">
                    Bagaimana Kami Bekerja?
                </h1>
                <p class="text-desc-font leading-6 text-center">
                    Kami mengutamakan proses daripada sekedar eksekusi. Untuk memastikan setiap langkah tepat
                </p>
            </div>
            <div class="grid grid-cols-4 gap-4">
                <div class="border shadow rounded-lg">
                    <img src="{{ asset('assets/Introductions.png')}}" class=" h-auto w-full" alt="">
                </div>
                <div class="border shadow rounded-lg">
                    <img src="{{ asset('assets/uxdesign.png')}}" class=" h-auto w-full" alt="">
                </div>
                <div class="border shadow rounded-lg">
                    <img src="{{ asset('assets/uidesign.png')}}" class=" h-auto w-full" alt="">
                </div>
                <div class="border shadow rounded-lg">
                    <img src="{{ asset('assets/usabilitytesting.png')}}" class=" h-auto w-full" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- End How We Work --}}

    {{-- Recents Projects --}}
    <section class="bg-white">
        <div
            class="relative items-start w-full px-5 pt-24 mx-auto md:px-12 lg:px-16 max-w-7xl lg:pt-22 lg:pb-32 grid grid-cols-12">
            <div class="col-span-5">
                <h1 class="text-[#132238] text-5xl sora mt-5 font-bold">
                    Recent Project
                </h1>
                <p class="text-desc-font  leading-7 max-w-lg mt-7">
                    Segera hubungi kami, sampaikan kebutuhan usaha Anda, diskusikan konsep dengan tim kami.
                </p>
            </div>
            <div></div>
            <div class="col-span-6 mt-10 text-end">
                <button type="button" class="me-2 text-primary border shadow border-primary bg-white focus:ring-4 focus:outline-none font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                    <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5H1m0 0 4 4M1 5l4-4"/>
                    </svg>
                    <span class="sr-only">Icon description</span>
                </button>
                <button type="button" class="text-white border shadowborder-white bg-primary  focus:ring-4 focus:outline-none font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                    <svg class="w-10 h-10" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                    
                    <span class="sr-only">Icon description</span>
                </button>
            </div>
            <div class="col-span-12 mt-10">
                <div class="grid grid-cols-3 gap-6">
                    @for ($i = 0; $i <= 2; $i++)
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
        </div>
    </section>
    {{-- End Recents Projects  --}}
</x-guest-layout>
