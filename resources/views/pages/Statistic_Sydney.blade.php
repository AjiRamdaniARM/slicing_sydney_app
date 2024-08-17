<x-guest-layout>
    <main>
        <div class="container-content-body ">
            <section class="hero-scetion-page-luky  bg-cover bg-center" style="height:30em">
                <div class="content-hero px-10 w-full flex items-center py-44  justify-center">
                    {{-- === content section hreo === --}}
                    <div
                        class="title-page-content flex flex-col justify-center items-center gap-4 lg:gap-10 px-2 lg:px-96 ">
                        <h1 class="text-white
                        kanit-medium text-5xl lg:text-7xl text-center">
                            Statistic</h1>
                        <p class="text-white/50 text-center text-1xl">Check out the percentages of the most drawn numbers
                            and see if you can find a pattern.</p>
                    </div>
                </div>
            </section>

            <section class="content-card ">
                <div class="content-body py-28 flex flex-col justify-center items-center gap-10">
                    <div class="bar bg-[#1A1A1A] py-10 w-full  text-center">
                        <h2 class="text-white kanit-medium text-3xl">Sydney Lotto Number Frequency Table</h2>
                    </div>

                    <div class="py-10 flex flex-wrap justify-center items-center gap-10 w-full text-center">
                        <div class="from-this relative w-80">
                            <label for="from-date" class="block text-start text-gray-400 mb-2">From Date</label>
                            <div
                                class="relative bg-[#474747] text-white p-3 rounded-lg pl-4 pr-10 cursor-pointer w-full">
                                <input type="date" id="from-date"
                                    class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                                    onchange="this.nextElementSibling.innerText = this.value">
                                <span class="date-text">Select Date</span>
                                <span class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3M16 7V3M3 13h18M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="to-this relative w-80">
                            <label for="to-date" class="block text-start text-gray-400 mb-2">To Date</label>
                            <div
                                class="relative bg-[#474747] text-white p-3 rounded-lg pl-4 pr-10 cursor-pointer w-full">
                                <input type="date" id="to-date"
                                    class="absolute inset-0 opacity-0 cursor-pointer w-full h-full"
                                    onchange="this.nextElementSibling.innerText = this.value">
                                <span class="date-text">Select Date</span>
                                <span class="absolute inset-y-0 right-3 flex items-center pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3M16 7V3M3 13h18M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>






                    <div
                        class="bar  bg-[#1A1A1A] py-10 lg:px-0  w-full flex justify-center place-items-end gap-10 text-center">
                        <img class="w-full px-10 lg:px-44" src="{{ asset('assets/image/number_grup.png') }}"
                            alt="">
                    </div>

                    <div class="container py-20">
                        <div class="chart">
                            <img class="w-full  px-10 lg:px-44 " src="{{ asset('assets/image/chart.png') }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </main>
</x-guest-layout>
