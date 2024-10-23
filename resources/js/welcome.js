// component welcome

import { createApp } from 'vue';
import Welcome from '../views/components/welcome.vue';

createApp(Welcome).mount('#welcome');

// responsive navbarnya
const mobileMenuButton = document.getElementById('mobile-menu-button');
const mobileMenu = document.getElementById('mobile-menu');

let scrollPosition;

function disableScroll() {
  scrollPosition = window.pageYOffset;
  document.body.style.overflow = 'hidden';
  document.body.style.position = 'fixed';
  document.body.style.top = `-${scrollPosition}px`;
  document.body.style.left = '0';
  document.body.style.right = '0';
}

function enableScroll() {
  document.body.style.removeProperty('overflow');
  document.body.style.removeProperty('position');
  document.body.style.removeProperty('top');
  document.body.style.removeProperty('left');
  document.body.style.removeProperty('right');
  window.scrollTo(0, scrollPosition);
}

mobileMenuButton.addEventListener('click', () => {
  if (!mobileMenu.classList.contains('active')) {
    mobileMenu.classList.add('active');
    mobileMenu.style.visibility = 'visible';
    requestAnimationFrame(() => {
      mobileMenu.style.transform = 'translateY(0)';
    });

    disableScroll();
  } else {
    mobileMenu.classList.remove('active');

    enableScroll();
  }
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
            { value: -20, duration: 1000, easing: 'easeInOutQuad' },
            { value: 0, duration: 1000, easing: 'easeInOutQuad' }
        ],
        loop: true
    });
}

// Kentan Panduan
document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('#btn-mendapatkan-akun, #btn-masuk-sistem, #btn-buku-panduan');
    const content = document.getElementById('panduan-content');

    const steps = {
        'mendapatkan-akun': [
            { title: 'Pilih menu SIGN UP', content: 'Buka website e-Learning PNB, kemudian pilih menu <span class="bg-blue-200 px-1 rounded">SIGN UP</span>' },
            { title: 'Pilih form yang sesuai', content: '<ul class="list-disc pl-5"><li>Pilih tab/form mahasiswa untuk pendaftaran akun mahasiswa</li><li>Pilih tab/form dosen untuk pendaftaran akun dosen</li></ul>' },
            { title: 'Isi data sesuai form', content: '<ul class="list-disc pl-5"><li>Untuk mahasiswa: nama depan, nama belakang, NIM, e-mail aktif, dan password</li><li>Untuk dosen: nama depan, nama belakang, NIP, e-mail aktif, dan password</li><li>Kemudian tekan tombol SIGN UP</li></ul>' },
            { title: 'Email verifikasi', content: 'Jika berhasil, sistem akan mengirimkan email verifikasi akun ke email yang didaftarkan' },
            { title: 'Aktivasi akun', content: '<ul class="list-disc pl-5"><li>Cek email, kemudian klik tombol "Activating My Account"</li><li>Pengguna akan diarahkan ke halaman aktivasi akun.</li><li>Jika aktivasi berhasil, sistem akan menampilkan pesan berhasil dan tombol SIGN IN.</li></ul>' }
        ],
        'masuk-sistem': [
            { title: 'Buka halaman login', content: 'Klik tombol "Masuk" di pojok kanan atas halaman utama PNB Quiz.' },
            { title: 'Masukkan kredensial', content: 'Isi email dan password yang telah Anda daftarkan sebelumnya.' },
            { title: 'Mulai belajar', content: 'Setelah berhasil masuk, Anda bisa mulai mengakses quiz dan materi pembelajaran.' }
        ],
        'buku-panduan': [
            { title: 'Buku Panduan Lengkap', content: 'Untuk panduan lebih lengkap tentang penggunaan PNB Quiz, silakan unduh buku panduan kami dalam format PDF. <a href="#" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 transition duration-300">Unduh Buku Panduan</a>' }
        ]
    };

    function setActiveButton(button) {
        buttons.forEach(btn => {
            btn.classList.remove('bg-blue-500', 'text-white');
            btn.classList.add('bg-gray-200', 'text-gray-700');
        });
        button.classList.remove('bg-gray-200', 'text-gray-700');
        button.classList.add('bg-blue-500', 'text-white');
    }

    function renderContent(stepsArray) {
        return stepsArray.map((step, index) => `
            <div class="bg-blue-100 rounded-lg p-4 mb-4">
                <div class="flex items-center mb-2">
                    <div class="bg-blue-500 text-white rounded-full w-8 h-8 flex items-center justify-center mr-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-blue-500">${step.title}</h3>
                </div>
                <div class="ml-11">${step.content}</div>
            </div>
        `).join('');
    }

    function animateContent(newContent) {
        const oldContent = content.innerHTML;
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = newContent;

        content.innerHTML = '';
        content.appendChild(tempDiv);
        tempDiv.classList.add('fade-slide-enter');

        setTimeout(() => {
            tempDiv.classList.add('fade-slide-enter-active');
            tempDiv.classList.remove('fade-slide-enter');
        }, 20);

        setTimeout(() => {
            content.innerHTML = newContent;
        }, 500);
    }

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            setActiveButton(this);
            const contentType = this.id.replace('btn-', '');
            const newContent = renderContent(steps[contentType]);
            animateContent(newContent);
        });
    });

    document.getElementById('btn-mendapatkan-akun').click();
});


// Set konten default saat halaman dimuat
panduanContent.innerHTML = contentMendapatkanAkun;
setActiveButton(btnMendapatkanAkun);
