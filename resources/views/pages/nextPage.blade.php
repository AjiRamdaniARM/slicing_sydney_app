<x-guest-layout>
    <main>
        <div class="container-content-body">
            <section class="hero-scetion-page-luky bg-cover bg-center">
                <div class="content-hero px-10 w-full min-h-screen flex items-center  justify-center">
                    {{-- === content section hreo === --}}
                    <div class="title-page-content flex flex-col justify-center items-center gap-10 py-44">
                        <h1 class="text-white kanit-medium text-7xl text-center">History Checker</h1>
                        <div class="img-lucky-draw hidden lg:block">
                            <img class="w-full" src="{{ asset('assets/image/number_cheker.png') }}" alt="LukyDraw">
                        </div>
                        <div class="img-lucky-draw block lg:hidden">
                            <img class="w-full" src="{{ asset('assets/image/number_mobile_cheker.png') }}"
                                alt="LukyDraw">
                        </div>
                    </div>
                </div>
            </section>

            <section class="content-card ">
                <div class="content-body py-28 flex flex-col justify-center items-center">
                    <div class="bar bg-[#1A1A1A] py-10 w-full lg:block hidden  text-center">
                        <h2 class="text-white kanit-medium text-3xl">Previous Result</h2>
                    </div>
                    <div class="bar bg-[#1A1A1A] py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex justify-between text-white/50 kanit-medium">
                            <div>Result</div>
                            <div>Numbers</div>
                            <div>Video</div>
                        </div>

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

                    <div class="bar  py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex justify-between items-center text-white/50 kanit-medium">
                            <div class="text-start kanit-regular text-[10px] lg text-white">
                                <div class="list">2046</div>
                                <div class="list">Mon, 21 May 2024</div>
                                <div class="list">11:00 (GMT+7)</div>
                            </div>
                            <div>
                                <img class="lg:w-96 w-44" src="{{ asset('assets/image/flow1.png') }}" alt="">
                            </div>
                            <div>
                                <img class="lg:w-10 w-5" src="{{ asset('assets/image/button-video.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>

                    <div class="bar bg-[#1A1A1A] py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex justify-between items-center text-white/50 kanit-medium">
                            <div class="text-start kanit-regular text-[10px] lg text-white">
                                <div class="list">2046</div>
                                <div class="list">Mon, 21 May 2024</div>
                                <div class="list">11:00 (GMT+7)</div>
                            </div>
                            <div>
                                <img class="lg:w-96 w-44" src="{{ asset('assets/image/flow2.png') }}" alt="">
                            </div>
                            <div>
                                <img class="lg:w-10 w-5" src="{{ asset('assets/image/button-video.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>

                    <div class="bar  py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex justify-between items-center text-white/50 kanit-medium">
                            <div class="text-start kanit-regular text-[10px] lg text-white">
                                <div class="list">2046</div>
                                <div class="list">Mon, 21 May 2024</div>
                                <div class="list">11:00 (GMT+7)</div>
                            </div>
                            <div>
                                <img class="lg:w-96 w-44" src="{{ asset('assets/image/flow3.png') }}" alt="">
                            </div>
                            <div>
                                <img class="lg:w-10 w-5" src="{{ asset('assets/image/button-video.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>

                    <div class="bar bg-[#1A1A1A] py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex justify-between items-center text-white/50 kanit-medium">
                            <div class="text-start kanit-regular text-[10px] lg text-white">
                                <div class="list">2046</div>
                                <div class="list">Mon, 21 May 2024</div>
                                <div class="list">11:00 (GMT+7)</div>
                            </div>
                            <div>
                                <img class="lg:w-96 w-44" src="{{ asset('assets/image/flow4.png') }}" alt="">
                            </div>
                            <div>
                                <img class="lg:w-10 w-5" src="{{ asset('assets/image/button-video.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>

                    <br>
                    <a href="{{ route('popup.index') }}"
                        class="px-10 py-4 text-white kanit-medium hover:scale-105 transition-all focus:scale-105 bg-red-500">See
                        More</a>
                </div>
            </section>
        </div>
    </main>
</x-guest-layout>
