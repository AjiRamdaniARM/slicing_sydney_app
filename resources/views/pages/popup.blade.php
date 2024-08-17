<x-guest-layout>
    <main>
        <div class="container-content-body">
            <section class="hero-scetion-page-luky bg-cover bg-center">
                <div class="content-hero px-10 w-full relative   flex items-center  justify-center">
                    {{-- === content section hreo === --}}
                    <div class="title-page-content flex flex-col justify-center items-center gap-10 py-44">
                        <h1 class="text-white kanit-medium text-7xl text-center">History Checker</h1>
                    </div>

                </div>
                <div class="grup  flex flex-col justify-center items-center">
                    <div class=" py-10 ">
                        <img class="w-full px-10" src="{{ asset('assets/image/popmodal2.png') }}" alt="">
                    </div>
                    <a href="{{ route('next.index') }}"
                        class="px-10   w-44 py-4 text-white kanit-medium hover:scale-105 transition-all focus:scale-105 bg-red-500">See
                        More</a>
                </div>\
                <br>
                <br>
            </section>


        </div>
    </main>
</x-guest-layout>
