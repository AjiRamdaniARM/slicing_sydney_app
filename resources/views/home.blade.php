<x-guest-layout>
    <main>
        <div class="container-content-body">
            <section class="hero bg-cover bg-center">
                <div class="content-hero px-10 w-full min-h-screen flex items-center pt-36 justify-center">
                    <div class="flex flex-wrap">
                        {{-- === text image section hero === --}}
                        <div class="text-svg">
                            <img class="w-[40em]" src="{{ asset('assets/svg/text-hero.svg') }}" alt="">
                            <div class="text-content-bottom text-white hidden lg:block 2xl:block">
                                <h2 class="font-bold kanit-bold">G’DAY, MATE!</h2>
                                <h6 class="kanit-reguler">Welcome To Sydney Lotto</h6>
                            </div>
                        </div>
                        {{-- === akhir text image section hero === --}}
                        <div class="card-number-box">
                            <img class="w-96" src="{{ asset('assets/image/box.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-video">
                <div class="content-hero px-10 w-full min-h-screen flex items-center justify-center">
                    <div class="content-body">
                        <div
                            class="flex flex-wrap-reverse gap-10 justify-center items-center relative  py-10 lg:left-[104px] 2xl:left-[104px] left-0">
                            <div class="content-style-text text-white flex flex-col gap-10 ">
                                <h2 class="kanit-bold 2xl:text-6xl text-5xl lg:text-6xl">Lotto Live Result</h2>
                                <div class="body-content">
                                    <h6 class="kanit-light text-2xl">Next Draw In</h6>
                                    <div class="container-time">
                                        <div class="lg:text-[60px] 2xl:text-[60px] text-[40px] kanit-medium flex">
                                            <span class="text-white/10">00 <div
                                                    class="text-[20px] kanit-regular text-center">
                                                    Hr </div></span> &nbsp;:&nbsp;
                                            <span class="text-red-500">56<div
                                                    class="text-[20px] text-white kanit-regular text-center">
                                                    Min </div></span>&nbsp; :&nbsp;
                                            <span class="text-red-500">40<div
                                                    class="text-[20px] text-white kanit-regular text-center">
                                                    Sec </div></span>
                                        </div>
                                    </div>
                                    <div
                                        class="container-clock text-[15px] 2xl:text-1xl lg:text-1xl py-10 kanit-regular">
                                        <span>Monday, 10 July 2024</span>&nbsp;&nbsp;
                                        <span class="text-white/50">00:15 pm (GMT+7)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="video-frame-content ">
                                <img class="w-[50em]" src="{{ asset('assets/svg/bg-video.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="content-card bg-[#011335]">
                <div
                    class="content-hero px-10 w-full 2xl:min-h-screen  lg:min-h-screen flex items-center justify-center">
                    <div class="content-body py-28 hidden lg:block 2xl:block">
                        <div class="grid grid-rows-2 grid-flow-col gap-4  ">
                            <div class="col-span-2 flex gap-4 ..."><img
                                    src="{{ asset('assets/svg/card2-desktop.svg') }}"
                                    class="lg:w-[28.5em] hover:scale-95 focus:scale-95 transition-all" alt="">
                                <img src="
                                {{ asset('assets/svg/card1-desktop.svg') }}"
                                    alt="" class="w-[28.5em] hover:scale-95 focus:scale-95 transition-all">
                            </div>
                            <div class="col-span-2..."><img class="hover:scale-95 focus:scale-95 transition-all"
                                    src="{{ asset('assets/svg/card3-dekstop.svg') }}" alt=""></div>
                            <div class="row-span-2 col-span-2 ..."><img
                                    src="{{ asset('assets/svg/card4-dekstop.svg') }}"
                                    class="hover:scale-95 focus:scale-95 transition-all" alt=""></div>

                        </div>
                    </div>
                    {{-- === mobile card === --}}
                    <div class="content-body py-20 block lg:hidden 2xl:hidden">
                        <div class="grid grid-cols-2 gap-4 ">
                            <div><img class="hover:scale-105 focus:scale-105 transition-all"
                                    src="{{ asset('assets/svg/card1-mobile.svg') }}" alt=""></div>
                            <div><img class="hover:scale-105 focus:scale-105 transition-all"
                                    src="{{ asset('assets/svg/card3-mobile.svg') }}" alt=""></div>
                            <div><img class="hover:scale-105 focus:scale-105 transition-all"
                                    src="{{ asset('assets/svg/card2-mobile.svg') }}" alt=""></div>
                            <div><img class="hover:scale-105 focus:scale-105 transition-all"
                                    src="{{ asset('assets/svg/card4-mobile.svg') }}" alt=""></div>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</x-guest-layout>
