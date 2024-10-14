<x-guest-layout>
    <main>
        <div class="container-content-body">
            <section class="hero-scetion-page-luky bg-cover bg-center">
                <div class="content-hero px-10 w-full min-h-screen flex items-center  justify-center">
                    {{-- === content section hreo === --}}
                    <div class="title-page-content flex flex-col justify-center items-center gap-10 py-44">
                        <h1 class="text-white kanit-medium text-7xl text-center">History Checker</h1>
                        <div class="img-lucky-draw lg:block">
                            <div
                                class="container mx-auto py-10 px-4 sm:px-10 md:px-20 lg:px-44  rounded-[13.87px] border-[6.94px] border-blue-500 shadow-[#1876D0] shadow-xl bg-gradient-to-r from-blue-400/50 to-blue-800/50">
                                <h1 class="text-center text-xl sm:text-2xl font-bold text-white">Select 4 Numbers</h1>

                                <div class="flex justify-center mt-4 space-x-2 flex-wrap">
                                    <!-- Number Circles -->
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        0
                                    </div>
                                    <!-- Repeat for other numbers -->
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        1
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        2
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        3
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        4
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        5
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        6
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        7
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        8
                                    </div>
                                    <div
                                        class="flex items-center justify-center h-[60px] w-[60px] sm:h-[80px] sm:w-[80px] lg:h-[100px] lg:w-[100px] rounded-full border-[6px] sm:border-[8px] lg:border-[9px] border-red-500 bg-white text-red-500 text-xl sm:text-2xl font-bold">
                                        9
                                    </div>
                                    <!-- Add more numbers as needed -->
                                </div>

                                <div class="flex justify-center mt-8 space-x-2 sm:space-x-4 flex-wrap">
                                    <div
                                        class="w-16 h-10 sm:w-20 sm:h-14 lg:w-24 lg:h-16 bg-white rounded-lg text-center font-bold text-lg sm:text-xl p-2 sm:p-4">
                                        1</div>
                                    <div
                                        class="w-16 h-10 sm:w-20 sm:h-14 lg:w-24 lg:h-16 bg-white rounded-lg text-center font-bold text-lg sm:text-xl p-2 sm:p-4">
                                        2</div>
                                    <div
                                        class="w-16 h-10 sm:w-20 sm:h-14 lg:w-24 lg:h-16 bg-white rounded-lg text-center font-bold text-lg sm:text-xl p-2 sm:p-4">
                                        -</div>
                                    <div
                                        class="w-16 h-10 sm:w-20 sm:h-14 lg:w-24 lg:h-16 bg-white rounded-lg text-center font-bold text-lg sm:text-xl p-2 sm:p-4">
                                        -</div>
                                    <div class="grup flex flex-wrap gap-4 pt-10 lg:pt-0 justify-center items-center">
                                        <button
                                            class="bg-red-500 text-white rounded-lg hover:scale-105 transition-all focus:scale-105 px-4 py-2 sm:px-6 sm:py-3 lg:px-8 lg:py-3 font-bold">Check
                                            Numbers</button>
                                        <button
                                            class="bg-red-500 text-white rounded-lg hover:scale-105 transition-all focus:scale-105 px-4 py-2 sm:px-6 sm:py-3 lg:px-8 lg:py-3 font-bold">Reset
                                            Number</button>
                                    </div>

                                </div>
                            </div>
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


                    <div class="bar bg-[#1A1A1A] py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex flex-wrap justify-between items-center text-white/50 kanit-medium">
                            <div class="text-start kanit-regular text-2xl py-3 lg:text-1xl text-white">
                                <div class="list">2046</div>
                                <div class="list">Mon, 21 May 2024</div>
                                <div class="list">11:00 (GMT+7)</div>
                            </div>
                            <div>

                                <div
                                    class="w-full h-full border-[6.94px] border-blue-500 shadow-[#1876D0] shadow-lg bg-gradient-to-r from-blue-400/50 to-blue-800/50 text-white p-4 rounded-lg">
                                    <div class="flex items-center justify-between w-full mb-4">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            First Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between w-full mb-4">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            Second Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between w-full">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            Third Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-10 lg:py-0 mx-auto lg:mx-0">
                                <img class="lg:w-10 w-10" src="{{ asset('assets/image/button-video.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>
                    <div class="bar  py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex flex-wrap justify-between items-center text-white/50 kanit-medium">
                            <div class="text-start kanit-regular text-2xl py-3 lg:text-1xl text-white">
                                <div class="list">2046</div>
                                <div class="list">Mon, 21 May 2024</div>
                                <div class="list">11:00 (GMT+7)</div>
                            </div>
                            <div>

                                <div
                                    class="w-full h-full border-[6.94px] border-blue-500 shadow-[#1876D0] shadow-lg bg-gradient-to-r from-blue-400/50 to-blue-800/50 text-white p-4 rounded-lg">
                                    <div class="flex items-center justify-between w-full mb-4">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            First Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between w-full mb-4">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            Second Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between w-full">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            Third Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-10 lg:py-0 mx-auto lg:mx-0">
                                <img class="lg:w-10 w-10" src="{{ asset('assets/image/button-video.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>

                    <div class="bar bg-[#1A1A1A] py-10 w-full  text-center px-10 lg:px-44">
                        <div class="list flex flex-wrap justify-between items-center text-white/50 kanit-medium">
                            <div class="text-start kanit-regular text-2xl py-3 lg:text-1xl text-white">
                                <div class="list">2046</div>
                                <div class="list">Mon, 21 May 2024</div>
                                <div class="list">11:00 (GMT+7)</div>
                            </div>
                            <div>

                                <div
                                    class="w-full h-full border-[6.94px] border-blue-500 shadow-[#1876D0] shadow-lg bg-gradient-to-r from-blue-400/50 to-blue-800/50 text-white p-4 rounded-lg">
                                    <div class="flex items-center justify-between w-full mb-4">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            First Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between w-full mb-4">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            Second Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between w-full">
                                        <p
                                            class="kanit-medium px-5 bg-gradient-to-r from-transparent via-blue-500 to-transparent ">
                                            Third Result</p>
                                        <div class="flex items-center space-x-2">
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                6</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                8</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                2</div>
                                            <div
                                                class="w-10 h-10 rounded-full  flex items-center border-[5px] justify-center border-red-500 bg-white text-red-500 font-bold">
                                                0</div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="py-10 lg:py-0 mx-auto lg:mx-0">
                                <img class="lg:w-10 w-10" src="{{ asset('assets/image/button-video.png') }}"
                                    alt="">
                            </div>
                        </div>

                    </div>






                    <br>
                    <a href="{{ route('next.index') }}"
                        class="px-10 py-4 text-white kanit-medium hover:scale-105 transition-all focus:scale-105 bg-red-500">See
                        More</a>
                </div>
            </section>
        </div>
    </main>
</x-guest-layout>
