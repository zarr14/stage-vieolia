<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEOLIA </title>
    @vite('resources/css/app.css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-lg">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <div>
                        <!-- Website Logo -->
                        <a href="#" class="flex items-center py-4 px-2">
                            <span class="font-semibold text-red-500 text-lg">VIEOLIA</span>
                        </a>
                    </div>
                    <!-- Primary Navbar items -->
                    <div class="hidden md:flex items-center space-x-1">
                        <a href="{{ url('admin/materiels') }}" class="py-4 px-2 text-green-500 border-b-4 border-green-500 font-semibold ">Materiel</a>
                        <a href="{{ url('/employers') }}" class="py-4 px-2 text-gray-500 font-semibold hover:text-green-500 transition duration-300">Employers</a>
                    </div>
                </div>
                <!-- Secondary Navbar items -->
                
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                    <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                        x-show="!showMenu"
                        fill="none"
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- mobile menu -->
        <div class="hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="{{ url('/materiels') }}" class="block text-sm px-2 py-4 text-white bg-green-500 font-semibold">Materiel</a></li>
                <li><a href="{{ url('/employers') }}" class="block text-sm px-2 py-4 hover:bg-green-500 transition duration-300">Employers</a></li>
            </ul>
        </div>
    </nav>

    <!-- Script for toggle mobile menu -->
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>

    @yield('content')
</body>
</html>
