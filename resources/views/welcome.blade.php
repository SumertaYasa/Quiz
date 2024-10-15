<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNB Quiz - Platform Quiz Interaktif Politeknik Negeri Bali</title>
    @vite('resources/css/app.css')
    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <nav class="bg-white py-4 px-6 shadow-sm w-full z-10 mb-12">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-10">
                    <span class="text-blue-600 text-3xl font-bold">PNB Quiz</span>
                    <div class="hidden md:flex space-x-8">
                        <a href="#" class="text-gray-600 hover:text-gray-900">Beranda</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Kategori Quiz</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Leaderboard</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Buat Quiz</a>
                        <a href="#" class="text-gray-600 hover:text-gray-900">Bantuan</a>
                    </div>
                </div>
                <div class="hidden md:flex items-center space-x-6">
                    <a href="#" class="text-gray-600 hover:text-gray-900">Cari Quiz</a>
                    <a href="#" class="text-gray-600 hover:text-gray-900">Masuk</a>
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">Daftar</a>
                </div>
                <div class="md:hidden">
                    <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="md:hidden hidden mt-4">
                <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Beranda</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Kategori Quiz</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Leaderboard</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Buat Quiz</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Bantuan</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Cari Quiz</a>
                <a href="#" class="block py-2 text-gray-600 hover:text-gray-900">Masuk</a>
                <a href="#" class="block py-2 bg-blue-600 text-white px-4 rounded-md hover:bg-blue-700 transition duration-300">Daftar</a>
            </div>
        </div>
    </nav>

    <main class="pt-8 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col lg:flex-row lg:items-center">
                <div class="lg:w-1/2 lg:pr-16">
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-4">
                        Uji Pengetahuanmu dengan <span class="text-blue-600">PNB Quiz</span>
                    </h1>
                    <p class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight mb-4">
                        "Belajar jadi lebih seru dan menantang!"
                    </p>
                    <p class="text-gray-500 text-xl mb-6">
                        - Platform quiz interaktif terbaik untuk mahasiswa PNB
                    </p>
                    <p class="text-gray-700 text-lg mb-8">
                        Akses berbagai jenis quiz, tantang teman-temanmu, dan tingkatkan pemahamanmu tentang materi kuliah melalui quiz yang menyenangkan dan informatif.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300 text-center">
                            <span class="block font-semibold">MULAI QUIZ</span>
                            <span class="text-sm">Gratis</span>
                        </a>
                        <a href="#" class="bg-blue-100 text-blue-700 px-6 py-3 rounded-md hover:bg-blue-200 transition duration-300 text-center">
                            <span class="block font-semibold">BUAT QUIZ</span>
                            <span class="text-sm">Untuk Dosen</span>
                        </a>
                    </div>
                </div>
                <div class="lg:w-1/2 mt-12 lg:mt-0">
                    <div class="h-96 flex items-center justify-center">
                        <img src="/img/logo-pnb.png" alt="Logo PNB" class="max-h-full max-w-full object-contain">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
