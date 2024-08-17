<x-guest-layout>
    <main>
        <div class="container-content-body">
            <section class="hero-scetion-page-luky bg-cover bg-center">
                <div class="content-hero px-10 w-full min-h-screen flex items-center pt-20 justify-center">
                    {{-- === content section hreo === --}}
                    <div class="title-page-content flex flex-col justify-center items-center gap-10">
                        <h1 class="text-white kanit-medium text-7xl text-center">Lucky Number</h1>
                        <div class="img-lucky-draw">
                            <img class="w-full" src="{{ asset('assets/image/element-lucky.png') }}" alt="LukyDraw">
                        </div>
                        <div class="grup-block-button flex gap-[31px]">
                            <button
                                class="bg-[#DE1E35] hover:scale-105 transition-all focus:scale-105 px-10 rounded-[4px] py-3 kanit-medium text-white">Get
                                It
                                Now</button>
                            <button
                                class="bg-[#FFFFFF] px-10 py-3 kanit-medium text-[#DE1E35] hover:scale-105 transition-all focus:scale-105 rounded-[4px]">Copy</button>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content-card ">
                <div class="content-body py-28 flex flex-col justify-center items-center gap-10">
                    <div class="bar bg-[#1A1A1A] py-10 w-full  text-center">
                        <h2 class="text-white kanit-medium text-3xl">Generate Another Set Of Number</h2>
                    </div>

                    <div class="content-block-container flex justify-center gap-[12px]">
                        <div class="number-input">
                            <button class="minus">-</button>
                            <input type="number" value="0" min="0" max="100" step="1">
                            <button class="plus">+</button>
                        </div>
                        <button
                            class="bg-[#DE1E35] hover:scale-105 transition-all focus:scale-105 px-10 rounded-[4px] py-3 kanit-medium text-white">Generate</button>
                    </div>
                    <div
                        class="bar bg-[#1A1A1A] py-10 lg:px-0  w-full flex justify-center place-items-end gap-10 text-center">
                        <img class="lg:w-96 w-64" src="{{ asset('assets/image/number2.png') }}" alt="">
                        <button
                            class="bg-white lg:h-10 lg:w-28 p-3 hover:scale-105 transition-all focus:scale-105 rounded-md text-red-500">Copy</button>
                    </div>
                    <div
                        class="bar bg-[#1A1A1A] py-10 lg:px-0  w-full flex justify-center place-items-end gap-10 text-center">
                        <img class="lg:w-96 w-64" src="{{ asset('assets/image/numer3.png') }}" alt="">
                        <button
                            class="bg-white lg:h-10 lg:w-28 p-3 hover:scale-105 transition-all focus:scale-105 rounded-md text-red-500">Copy</button>
                    </div>
                    <div
                        class="bar bg-[#1A1A1A] py-10 lg:px-0  w-full flex justify-center place-items-end gap-10 text-center">
                        <img class="lg:w-96 w-64" src="{{ asset('assets/image/numer4.png') }}" alt="">
                        <button
                            class="bg-white lg:h-10 lg:w-28 p-3 hover:scale-105 transition-all focus:scale-105 rounded-md text-red-500">Copy</button>
                    </div>
                    <div
                        class="bar bg-[#1A1A1A] py-10 lg:px-0  w-full flex justify-center place-items-end gap-10 text-center">
                        <img class="lg:w-96 w-64" src="{{ asset('assets/image/number5.png') }}" alt="">
                        <button
                            class="bg-white lg:h-10 lg:w-28 p-3 hover:scale-105 transition-all focus:scale-105 rounded-md text-red-500">Copy</button>
                    </div>
                </div>
            </section>
        </div>
    </main>
</x-guest-layout>
