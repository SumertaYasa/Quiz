<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PNB Quiz - Platform Quiz Interaktif Politeknik Negeri Bali</title>
    @vite('resources/css/welcome.css')
    @vite('resources/js/welcome.js')
</head>
<body class="bg-gray-100">
    <nav class="bg-white py-4 mb-8 px-6 shadow-md w-full z-10">
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
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">Masuk</a>
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
                <a href="#" class="block py-2 bg-blue-600 text-white px-4 rounded-md hover:bg-blue-700 transition duration-300">Masuk</a>
            </div>
        </div>
    </nav>

    <main class="pt-10 px-6">
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
                    <div class="h-60 lg:h-96 flex items-center justify-center">
                        <img src="/img/logo-pnb.png" alt="Logo PNB" class="max-h-full max-w-full object-contain">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <section class="bg-white py-16 px-6 mt-16">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Panduan Singkat Penggunaan PNB Quiz</h2>

            <div class="flex justify-center space-x-4 mb-12">
                <button id="btn-mendapatkan-akun" class="bg-blue-600 text-bold text-white px-6 py-3 rounded-md hover:bg-blue-700 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Mendaftar Akun</button>
                <button id="btn-masuk-sistem" class="text-blue-600 bg-blue-100 text-bold px-6 py-3 rounded-md hover:bg-blue-200 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Masuk Sistem</button>
                <button id="btn-buku-panduan" class="text-blue-600 bg-blue-100 text-bold px-6 py-3 rounded-md hover:bg-blue-200 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">Buku Panduan</button>
            </div>

            <div id="panduan-content" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- dimasuin dari jsnya -->
            </div>
        </div>
    </section>

    <section class="bg-blue-600 py-16 px-6">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Siap untuk Meningkatkan Pengetahuanmu?</h2>
            <p class="text-xl text-blue-100 mb-8">Bergabunglah dengan ribuan mahasiswa PNB yang telah merasakan manfaat belajar interaktif melalui PNB Quiz!</p>
            <a href="#" class="bg-white text-blue-600 px-8 py-3 rounded-md text-lg font-semibold hover:bg-blue-50 transition duration-300">Daftar Sekarang</a>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-8 px-6">
        <div class="max-w-7xl mx-auto flex flex-wrap justify-between">
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h3 class="text-2xl font-bold mb-4">PNB Quiz</h3>
                <p class="text-gray-400">Platform quiz interaktif untuk mahasiswa Politeknik Negeri Bali.</p>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-4">Tautan Cepat</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Beranda</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Kategori Quiz</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Leaderboard</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Bantuan</a></li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 mb-6 md:mb-0">
                <h4 class="text-lg font-semibold mb-4">Kontak</h4>
                <ul class="space-y-2">
                    <li class="text-gray-400">Email: info@pnbquiz.ac.id</li>
                    <li class="text-gray-400">Telepon: (0361) 123-4567</li>
                    <li class="text-gray-400">Alamat: Jalan Raya Uluwatu No. 45, Jimbaran, Bali</li>
                </ul>
            </div>
            <div class="w-full md:w-1/4">
                <h4 class="text-lg font-semibold mb-4">Ikuti Kami</h4>
                <div class="flex space-x-4">
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                    </a>
                    <a href="#" class="text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto mt-8 pt-8 border-t border-gray-700 text-center text-gray-400">
            <p>&copy; 2024 PNB Quiz. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
