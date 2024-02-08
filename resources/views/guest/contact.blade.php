<x-guest-layout>
    {{-- Hero --}}
    <section class="relative flex items-center w-full bg-primary md:h-screen">
        <div class="relative items-center w-full px-5 py-24 mx-auto lg:px-16 lg:py-36 max-w-7xl md:px-12">
            <div class="relative flex-col items-start m-auto align-middle z-10">
                <div class="grid grid-cols-1 gap-6 lg:gap-24 lg:grid-cols-2">
                    <div class="relative items-center gap-12 m-auto lg:inline-flex">
                        <div class="max-w-xl text-center lg:text-left">
                            <div>
                                <p class="mt-8 font-bold tracking-tighter lg:text-6xl text-white sora leading-6">
                                    Find your next favorite
                                    products before everyone
                                </p>
                                <p class="max-w-xl mt-10 tracking-tight text-white">
                                    Apakah Anda memiliki proyek yang menurut Anda cocok untuk kami? Kami ingin tahu apa
                                    yang Anda pikirkan
                                </p>
                            </div>
                            <div class="flex items-center justify-center w-full pt-8 mx-auto lg:justify-start md:pt-6">
                                <form>
                                    <div
                                        class="w-full p-2 rounded-xl md:rounded-full bg-white sm:flex sm:items-center sm:relative">
                                        <div class="min-w-0 shrink w-60">
                                            <input aria-label="Email address" autocomplete="email"
                                                class="block w-full p-3 text-black bg-transparent border border-transparent appearance-none rounded-xl focus:border-transparent focus:outline-none focus:ring-transparent placeholder:text-gray-400 sm:text-sm"
                                                placeholder="Email address" required="" type="email">
                                        </div>
                                        <button
                                            class="relative inline-flex justify-center flex-none w-full px-6 py-3 ml-1 overflow-hidden text-sm font-medium text-white transition-colors bg-primary rounded-xl md:rounded-full active:before:bg-transparent active:bg-primary active:text-white/80 before:absolute before:inset-0 before:transition-colors hover:before:bg-white/10 md:w-auto outline-2 outline-offset-2"
                                            type="submit">
                                            <span class="inline">
                                                Mulai Sebuah Proyek!
                                            </span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full mt-12lg:mt-0">
                        <img alt="hero"
                            class="object-cover object-center w-full h-full mx-auto lg:ml-auto rounded-2xl"
                            src="{{ asset('assets/imglayanan.png') }}">
                    </div>
                </div>
            </div>
            <img src="{{ asset('assets/pattern.png') }}" alt=""
                class="absolute top-2/3 left-0 right-0 z-0 mx-auto" width="1100">
        </div>
    </section>
    {{-- End Hero --}}

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
    {{-- End FAQ --}}
</x-guest-layout>
