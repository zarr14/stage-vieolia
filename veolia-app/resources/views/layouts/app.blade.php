<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEOLIA</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <nav class="bg-white shadow-md fixed w-full z-50 top-0">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center py-0.25">
                <div class="flex">
                    <!-- Website Logo -->
                    <a href="#" class="flex items-center py-2.5 px-2">
                        <img src="{{ asset('logo.veolia.png') }}" alt="VIEOLIA Logo" class="h-10 w-30 mr-2 rounded-lg">
                    </a>
                </div>
                <!-- Centered Navbar items -->
                <div class="flex-grow flex justify-center items-center space-x-4">
                    <a href="{{ url('admin/materiels') }}" class="text-gray-800 font-semibold hover:text-red-600 transition duration-300">
                        <i class="fas fa-laptop fa-fw mr-2"></i> Materiel
                    </a>
                    <a href="{{ url('/employers') }}" class="text-gray-800 font-semibold hover:text-red-600 transition duration-300">
                        <i class="fas fa-users fa-fw mr-2"></i> Employers
                    </a>
                </div>
                <!-- Right-aligned or secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-4">
                    <!-- You can add right-aligned links or buttons here -->
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                    <svg class="w-6 h-6 text-gray-800 hover:text-red-600 transition duration-300"
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
                <li class="active"><a href="{{ url('/materiels') }}" class="block text-sm px-2 py-4 text-gray-800 bg-white hover:bg-gray-100">Materiel</a></li>
                <li><a href="{{ url('/employers') }}" class="block text-sm px-2 py-4 text-gray-800 bg-white hover:bg-gray-100">Employers</a></li>
            </ul>
        </div>
    </nav>

    <!-- Padding for content under the fixed navbar -->
    <div class="pt-16">
        @yield('content')
    </div>

    <!-- Script for toggle mobile menu -->
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</body>
</html>
