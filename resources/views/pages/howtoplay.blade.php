<x-guest-layout>
    <main>
        <div class="container-content-body">
            <section class="hero-scetion-page-luky bg-cover bg-center">
                <div class="content-hero px-10 w-full min-h-screen flex flex-col items-center pt-20 justify-center">
                    {{-- === content section hreo === --}}
                    <div class="title-page-content flex flex-col justify-center items-center py-5 pt-36 gap-5">
                        <h1 class="text-white kanit-medium text-7xl text-center">How To Play</h1>
                        <p class="text-white/50 kanit-regular text-1xl py-2">Never played before? No worries, mate!
                            Here’s how
                            it
                            works:</p>
                        <div class="grup-block-button flex gap-[31px]">
                            <button
                                class="bg-[#DE1E35] hover:scale-105 transition-all focus:scale-105 px-10 rounded-[4px] py-3 kanit-medium text-white">Get
                                It
                                Now</button>
                            <button
                                class="bg-[#FFFFFF] px-10 py-3 kanit-medium text-[#DE1E35] hover:scale-105 transition-all focus:scale-105 rounded-[4px]">Copy</button>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-5 p-5 lg:p-28">
                        <div class="card-1 hover:scale-105 transition-all focus:scale-105">
                            <img src="{{ asset('assets/svg/card11.svg') }}" alt="">
                        </div>
                        <div class="card-2 hover:scale-105 transition-all focus:scale-105">
                            <img src="{{ asset('assets/svg/22.svg') }}" alt="">
                        </div>
                        <div class="card-3 hover:scale-105 transition-all focus:scale-105">
                            <img src="{{ asset('assets/svg/33.svg') }}" alt="">
                        </div>
                        <div class="card-4 hover:scale-105 transition-all focus:scale-105">
                            <img src="{{ asset('assets/svg/44.svg') }}" alt="">
                        </div>
                    </div>

                </div>
            </section>

            <br>

        </div>
    </main>
</x-guest-layout>
