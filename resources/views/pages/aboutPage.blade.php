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
                            About Sydney
                            Lotto</h1>
                        <p class="text-white/50 text-center text-1xl">Cheers, mate! We’re a bunch of true-blue Aussies
                            bringing you
                            the best
                            lottery experience
                            around. From day one, our mission has been to give you a fair go at winning big.</p>
                    </div>
                </div>
            </section>

            <section class="content-card ">
                <div
                    class="content-hero px-5 sm:px-10 w-full lg:min-h-screen flex flex-wrap items-center justify-center  gap-10 py-20 ">
                    <div class="content-body  lg:py-28 lg:w-1/2">
                        <div class="flex flex-col  gap-5">
                            <h1 class="text-white text-2xl lg:text-6xl font-bold">Why Play With Sydney Lotto?</h1>
                            <p class="text-white/50 lg:w-[28em] ">
                                Sydney Lotto is committed to providing a fair and thrilling lottery experience. We pride
                                ourselves on transparency and fairness, with live streaming of results so you can watch
                                the draw as it happens.
                            </p>
                        </div>
                    </div>
                    <div class="content-card flex flex-col gap-5 lg:w-[39em] w-full">
                        <div
                            class="card-1 flex flex-row justify-around items-center px-5 py-3 gap-5 rounded-[3px] bg-white hover:scale-105 transition-all focus:scale-105">
                            <div class="icon">
                                <img src="{{ asset('assets/svg/video-player_669533.svg') }}" alt="youtube">
                            </div>
                            <div class="text-content text-left">
                                <h6 class="kanit-bold">Live Streaming</h6>
                                <p class="kanit-regular sm:w-96 w-full">Watch the draws live and see the result in
                                    real-time.</p>
                            </div>
                        </div>
                        <div
                            class="card-1 flex flex-row justify-around items-center px-5 py-3 gap-5 rounded-[3px] bg-[#DE1E35] hover:scale-105 transition-all focus:scale-105">
                            <div class="icon">
                                <img src="{{ asset('assets/svg/movie-theater_669532 1.svg') }}" alt="youtube">
                            </div>
                            <div class="text-content text-white text-left">
                                <h6 class="kanit-bold">Fair Play</h6>
                                <p class="kanit-regular sm:w-96 w-full">Our transparent process ensures every draw is
                                    fair.</p>
                            </div>
                        </div>
                        <div
                            class="card-1 flex flex-row justify-around items-center px-5 py-3 gap-5 rounded-[3px] bg-white hover:scale-105 transition-all focus:scale-105">
                            <div class="icon">
                                <img src="{{ asset('assets/svg/browser_668449.svg') }}" alt="youtube">
                            </div>
                            <div class="text-content text-left">
                                <h6 class="kanit-bold">Easy Access</h6>
                                <p class="kanit-regular sm:w-96 w-full">Check results, generate lucky numbers, and more,
                                    all from our
                                    user-friendly platform.</p>
                            </div>
                        </div>
                        <div
                            class="card-1 flex flex-row justify-around items-center px-5 py-3 gap-5 rounded-[3px] bg-white hover:scale-105 transition-all focus:scale-105">
                            <div class="icon">
                                <img src="{{ asset('assets/svg/2323.svg') }}" alt="youtube">
                            </div>
                            <div class="text-content text-left">
                                <h6 class="kanit-bold">Trusted Platform</h6>
                                <p class="kanit-regular sm:w-96 w-full">We’re a trusted name in the industry, offering a
                                    secure and
                                    reliable lottery experience.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>
    </main>
</x-guest-layout>
