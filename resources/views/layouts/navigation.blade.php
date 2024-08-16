{{-- === component navbar home desktop === --}}
<nav id="navbar-desktop" class="hidden lg:block 2xl:block">
    <div class="mx-auto max-w-7xl px-2 py-8 sm:px-6 lg:px-8">
        <div class="relative left-0 flex items-center justify-between">
            <div class="asset-logo">
                <img class="w-[211.68px]" src="{{ asset('assets/image/logo_sydney.png') }}" alt="">
            </div>
            <div class="list-div lg:flex gap-[12px] items-center kanit-regular">
                <a href="" class="active text-white font-bold">Home</a>
                <a href="" class="text-white/50">Lucky Number</a>
                <a href="" class="text-white/50">Previous Result</a>
                <a href="" class="text-white/50">Statistic</a>
                <a href="" class="text-white/50">About Us</a>
                <a href="" class="text-white/50">How To Play</a>
                <div class="box-select-bahasa relative">
                    <select class="appearance-none w-full bg-transparent border-none text-white pl-8 pr-4 py-2">
                        <option value="" data-img-src="{{ asset('assets/svg/united.svg') }}">&nbsp;English
                        </option>
                        <option value="" data-img-src="{{ asset('assets/svg/indonesia.svg') }}">&nbsp;Indonesia
                        </option>
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-2">
                        <img id="selected-img" class="w-6 h-6" src="{{ asset('assets/svg/united.svg') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
{{-- ===  akhir component navbar home desktop === --}}

{{-- === component navbar home mobile === --}}
<nav id="navbar-mobile" class="lg:hidden 2xl:hidden">
    <div class="mx-auto max-w-7xl px-10 py-8 sm:px-6 lg:px-8">
        <div class="relative left-0 flex items-center justify-between">
            <div class="asset-logo">
                <img class="w-[140.68px]" src="{{ asset('assets/image/logo_sydney.png') }}" alt="">
            </div>
            <div class="grup-content flex gap-5 items-center">
                <img id="menu-icon" class="w-[30.68px] jumbotron cursor-pointer"
                    src="{{ asset('assets/svg/menu.svg') }}" alt="">
                <div class="dropdown relative">
                    <button class="dropdown-button bg-transparent border-none cursor-pointer">
                        <img id="dropdown-img" src="{{ asset('assets/svg/united.svg') }}" alt="Dropdown"
                            class="w-10 h-10">
                    </button>
                    <div class="dropdown-menu absolute hidden bg-transparent">
                        <div class="dropdown-item" data-img-src="{{ asset('assets/svg/united.svg') }}">
                            <img src="{{ asset('assets/svg/united.svg') }}" alt="English" class="w-10 h-10">
                        </div>
                        <div class="dropdown-item" data-img-src="{{ asset('assets/svg/indonesia.svg') }}">
                            <img src="{{ asset('assets/svg/indonesia.svg') }}" alt="Indonesia" class="w-10 h-10">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Overlay -->
        <div id="overlay" class="fixed inset-0 bg-gray-900 bg-opacity-75 hidden"></div>
        <!-- Sidebar -->
        <div id="sidebar"
            class="fixed inset-y-0 right-0 w-64 bg-white transform translate-x-full transition-transform duration-300 ease-in-out z-50">
            <div class="relative w-full h-full p-4">
                <button id="close-sidebar" class="absolute top-4 right-4 text-gray-600 hover:text-gray-900">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                        </path>
                    </svg>
                </button>
                <ul class="space-y-4 mt-8">
                    <li><a href="" class="text-gray-900 font-bold">Home</a></li>
                    <li><a href="" class="text-gray-600">Lucky Number</a></li>
                    <li><a href="" class="text-gray-600">Previous Result</a></li>
                    <li><a href="" class="text-gray-600">Statistic</a></li>
                    <li><a href="" class="text-gray-600">About Us</a></li>
                    <li><a href="" class="text-gray-600">How To Play</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>


{{-- ===  akhir component navbar home mobile === --}}
