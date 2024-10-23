<template>
        <nav class="nav-welcome">
        <div class="mx-auto max-w-7xl mobile-menu">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-10">
                    <span class="text-3xl font-bold text-white">PNBQuiz</span>
                    <div class="hidden space-x-8 lg-lite:flex">
                        <a href="#" class="text-white navList-welcome">Beranda</a>
                        <a href="#" class="text-white navList-welcome">Kategori Quiz</a>
                        <a href="#" class="text-white navList-welcome">Leaderboard</a>
                        <a href="#" class="text-white navList-welcome">Buat Quiz</a>
                        <a href="#" class="text-white navList-welcome">Bantuan</a>
                    </div>
                </div>
                <div class="items-center hidden space-x-6 lg-lite:flex">
                    <a href="#" class="font-semibold text-white hover:text-gray-400">Cari Quiz</a>
                    <a href="/login" class="px-4 py-2 text-white transition duration-300 bg-blue-600 rounded-md hover:bg-blue-700">Masuk</a>
                </div>
                <div class="lg-lite:hidden">
                    <button id="mobile-menu-button" class="text-white">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div id="mobile-menu" class="fixed inset-0 z-50 overflow-y-auto bg-white">
                    <div class="flex-grow p-4 space-y-4">
                        <a href="#" class="block py-2 text-center text-gray-800 rounded-md hover:bg-gray-100">Beranda</a>
                        <a href="#" class="block py-2 text-center text-gray-800 rounded-md hover:bg-gray-100">Kategori Quiz</a>
                        <a href="#" class="block py-2 text-center text-gray-800 rounded-md hover:bg-gray-100">Leaderboard</a>
                        <a href="#" class="block py-2 text-center text-gray-800 rounded-md hover:bg-gray-100">Buat Quiz</a>
                        <a href="#" class="block py-2 text-center text-gray-800 rounded-md hover:bg-gray-100">Bantuan</a>
                        <a href="#" class="block py-2 text-center text-gray-800 rounded-md hover:bg-gray-100">Cari Quiz</a>
                        <a href="#" class="block py-2 text-center text-white transition duration-200 bg-blue-600 rounded-md hover:bg-blue-700">Masuk</a>
                    </div>
                </div>
            </div>
    </nav>

    <main class="pb-32 text-white text-center lg:text-left bg-[#3434bf] lg:pt-8">
        <div class="px-6 pt-10 mx-auto max-w-7xl">
            <div class="flex flex-col lg:flex-row lg:items-center">
                <div class="lg:w-1/2 lg:pr-16">
                    <h1 class="mb-4 text-4xl font-bold leading-tight lg:text-5xl">
                        Uji Pengetahuanmu dengan <span class="text-blue-400">PNBQuiz</span>
                    </h1>
                    <p class="mb-4 text-4xl font-bold leading-tight lg:text-5xl">
                        "Belajar jadi lebih seru dan menantang!"
                    </p>
                    <p class="mb-6 text-xl">
                        - Platform quiz interaktif terbaik untuk mahasiswa PNB
                    </p>
                    <p class="mb-8 text-lg border rounded-xl p-2 w-full lg-lite:min-w-[300px]">
                        Akses berbagai jenis quiz, tantang teman-temanmu, dan tingkatkan pemahamanmu tentang materi kuliah melalui quiz yang menyenangkan dan informatif.
                    </p>
                    <div class="flex justify-center mb-8 space-x-4 lg:justify-normal">
                        <a href="#" class="px-6 py-3 text-center text-white transition duration-300 bg-blue-600 rounded-md hover:bg-blue-700">
                            <span class="block font-semibold">MULAI QUIZ</span>
                            <span class="text-sm">Gratis</span>
                        </a>
                        <a href="#" class="px-6 py-3 text-center text-blue-700 transition duration-300 bg-gray-200 rounded-md hover:bg-gray-300">
                            <span class="block font-semibold">BUAT QUIZ</span>
                            <span class="text-sm">Untuk Dosen</span>
                        </a>
                    </div>
                </div>
                <div class="mt-12 lg:w-1/2 lg:mt-0">
                    <div class="flex items-center justify-center h-60 lg:h-96">
                        <img src="../../../public/img/logo.png" id="idleImage" alt="Logo PNB" class="object-contain max-w-full max-h-full rounded-lg drop-shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="relative z-20 px-6 -mt-20">
        <div class="mx-auto my-[8rem] lg-lite:my-5 max-w-6xl">
            <div class="px-12 py-5 text-white bg-blue-600 rounded-lg shadow-lg">
                <div class="flex flex-wrap items-center justify-between -mx-4">
                    <div class="w-full px-4 pb-1 sm:w-1/3 sm:mb-0">
                        <div class="flex items-center">
                            <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold">10+ Kuis</h3>
                                <p class="text-sm">Memiliki lebih dari 32 dosen yang ahli dibidang teknologi informasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 mb-6 sm:w-1/3 sm:mb-0">
                        <div class="flex items-center">
                            <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold">100+ Mahasiswa Terdaftar</h3>
                                <p class="text-sm">Memiliki 3 program studi yang sesuai dengan teknologi informasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full px-4 sm:w-1/3">
                        <div class="flex items-center">
                            <svg class="w-8 h-8 mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                            </svg>
                            <div>
                                <h3 class="text-xl font-bold">20+ Dosen Terdaftar</h3>
                                <p class="text-sm">Memiliki 300 lebih alumni yang kompeten dibidangnya</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="px-6 bg-white lg-lite:py-20">
        <div class="flex flex-col items-center justify-center w-full max-w-4xl p-6 mx-auto">
            <h2 class="relative inline-block pb-3 mb-8 text-5xl font-bold">
                Panduan singkat
                <span class="absolute bottom-0 left-0 w-full h-2 transform bg-gradient-to-r from-blue-400 to-blue-600 -skew-y-1"></span>
            </h2>
            <div class="flex justify-center pt-2 mb-8 space-x-4">
                <button id="btn-mendapatkan-akun" class="px-6 py-3 font-semibold text-white transition duration-300 ease-in-out bg-blue-500 rounded-lg shadow-md hover:bg-blue-600">MENDAPATKAN AKUN</button>
                <button id="btn-masuk-sistem" class="px-6 py-3 font-semibold text-gray-500 transition duration-300 ease-in-out bg-gray-200 rounded-lg shadow-md hover:bg-gray-300">MASUK SISTEM</button>
                <button id="btn-buku-panduan" class="px-6 py-3 font-semibold text-gray-500 transition duration-300 ease-in-out bg-gray-200 rounded-lg shadow-md hover:bg-gray-300">BUKU PANDUAN</button>
            </div>
            <div id="panduan-content" class="relative space-y-4">
                <!-- Kentennya disini -->
            </div>
        </div>
    </section>

    <section class="px-6 py-16 bg-blue-600">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="mb-6 text-3xl font-bold text-white">Siap untuk Meningkatkan Pengetahuanmu?</h2>
            <p class="mb-8 text-xl text-blue-100">Bergabunglah dengan ribuan mahasiswa PNB yang telah merasakan manfaat belajar interaktif melalui PNB Quiz!</p>
            <a href="#" class="px-8 py-3 text-lg font-semibold text-blue-600 transition duration-300 bg-white rounded-md hover:bg-blue-50">Daftar Sekarang</a>
        </div>
    </section>

    <footer class="px-6 py-8 text-white bg-gray-800">
        <div class="flex flex-wrap justify-between mx-auto max-w-7xl">
            <div class="w-full mb-6 md:w-1/4 md:mb-0">
                <h3 class="mb-4 text-2xl font-bold">PNB Quiz</h3>
                <p class="text-gray-400">Platform quiz interaktif untuk mahasiswa Politeknik Negeri Bali.</p>
            </div>
            <div class="w-full mb-6 md:w-1/4 md:mb-0">
                <h4 class="mb-4 text-lg font-semibold">Tautan Cepat</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-400 hover:text-white">Beranda</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Kategori Quiz</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Leaderboard</a></li>
                    <li><a href="#" class="text-gray-400 hover:text-white">Bantuan</a></li>
                </ul>
            </div>
            <div class="w-full mb-6 md:w-1/4 md:mb-0">
                <h4 class="mb-4 text-lg font-semibold">Kontak</h4>
                <ul class="space-y-2">
                    <li class="text-gray-400">Email: info@pnbquiz.ac.id</li>
                    <li class="text-gray-400">Telepon: (0361) 123-4567</li>
                    <li class="text-gray-400">Alamat: Jalan Raya Uluwatu No. 45, Jimbaran, Bali</li>
                </ul>
            </div>
            <div class="w-full md:w-1/4">
                <h4 class="mb-4 text-lg font-semibold">Ikuti Kami</h4>
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
        <div class="pt-8 mx-auto mt-8 text-center text-gray-400 border-t border-gray-700 max-w-7xl">
            <p>&copy; 2024 PNB Quiz. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</template> 