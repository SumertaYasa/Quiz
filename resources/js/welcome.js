const panduanContent = document.getElementById('panduan-content');
const btnMendapatkanAkun = document.getElementById('btn-mendapatkan-akun');
const btnMasukSistem = document.getElementById('btn-masuk-sistem');
const btnBukuPanduan = document.getElementById('btn-buku-panduan');

// responsive navbarnya
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
});

// animasi idle
const script = document.createElement('script');
script.src = 'https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js';
script.onload = animateIdle;
document.head.appendChild(script);

function animateIdle() {
    const imgElement = document.getElementById('idleImage');

    anime({
        targets: imgElement,
        translateY: [
            { value: -25, duration: 1000, easing: 'easeInOutQuad' },
            { value: 0, duration: 1000, easing: 'easeInOutQuad' }
        ],
        loop: true
    });
}

const contentMendapatkanAkun = `
    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">1. Pilih menu SIGN UP</h3>
        <p class="text-gray-600">Buka website e-Learning PNB, kemudian pilih menu <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-full text-sm font-semibold">SIGN UP</span> di pojok kanan atas.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">2. Pilih form yang sesuai</h3>
        <ul class="text-gray-600 space-y-2">
            <li>• Pilih form mahasiswa untuk akun mahasiswa</li>
            <li>• Pilih form dosen untuk akun dosen</li>
        </ul>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">3. Isi data sesuai form</h3>
        <ul class="text-gray-600 space-y-2">
            <li>• Mahasiswa: nama, NIM, email, password</li>
            <li>• Dosen: nama, NIP, email, password</li>
            <li>• Klik tombol SIGN UP untuk mendaftar</li>
        </ul>
    </div>
`;

const contentMasukSistem = `
    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">1. Buka halaman login</h3>
        <p class="text-gray-600">Klik tombol "Masuk" di pojok kanan atas halaman utama PNB Quiz.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">2. Masukkan kredensial</h3>
        <p class="text-gray-600">Isi email dan password yang telah Anda daftarkan sebelumnya.</p>
    </div>

    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">3. Mulai belajar</h3>
        <p class="text-gray-600">Setelah berhasil masuk, Anda bisa mulai mengakses quiz dan materi pembelajaran.</p>
    </div>
`;

const contentBukuPanduan = `
    <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-300 col-span-3">
        <div class="text-blue-600 mb-4">
            <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
        </div>
        <h3 class="text-xl font-semibold text-gray-900 mb-2">Buku Panduan Lengkap</h3>
        <p class="text-gray-600">Untuk panduan lebih lengkap tentang penggunaan PNB Quiz, silakan unduh buku panduan kami dalam format PDF.</p>
        <a href="#" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-300">Unduh Buku Panduan</a>
    </div>
`;

function setActiveButton(button) {
    [btnMendapatkanAkun, btnMasukSistem, btnBukuPanduan].forEach(btn => {
        btn.classList.remove('bg-blue-600', 'text-white');
        btn.classList.add('bg-blue-100', 'text-blue-600');
    });
    button.classList.remove('bg-blue-100', 'text-blue-600');
    button.classList.add('bg-blue-600', 'text-white');
}

btnMendapatkanAkun.addEventListener('click', () => {
    panduanContent.innerHTML = contentMendapatkanAkun;
    setActiveButton(btnMendapatkanAkun);
});

btnMasukSistem.addEventListener('click', () => {
    panduanContent.innerHTML = contentMasukSistem;
    setActiveButton(btnMasukSistem);
});

btnBukuPanduan.addEventListener('click', () => {
    panduanContent.innerHTML = contentBukuPanduan;
    setActiveButton(btnBukuPanduan);
});

// Set konten default saat halaman dimuat
panduanContent.innerHTML = contentMendapatkanAkun;
setActiveButton(btnMendapatkanAkun);
