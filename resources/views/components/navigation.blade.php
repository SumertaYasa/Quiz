<section class="flex capitalize">
    <aside id="sidebar" class="sidebar">
        <div class="flex justify-between items-center px-[20px] pt-[15px] pb-[110px]">
            <div class="flex gap-4">
                <img class="logo-sidebar" src="/img/logo.png" alt="Logo JTI">
                <img class="logo-sidebar" src="/img/logo-pnb.png" alt="Logo PNB">
            </div>
            
            <button onclick="closeSidebar()" id="btn-closeSide" class="icons btn-close-side"><i class='bx bx-left-arrow-alt' ></i></button>
        </div>
        <div class="pl-[40px]">
            <span class="text-[24px] font-light pb-[15px]">menu</span>
            <ul class="menu-sidebar">
                <li class="hover:bg-[#4545C1]"><i class='icons pr-[20px] bx bxs-dashboard' ></i>dashboard</li>
                <li class="hover:bg-[#4545C1]"><i class='icons pr-[20px] bx bxs-data' ></i>data pengguna</li>
                <li class="hover:bg-[#4545C1]"><i class='icons pr-[20px] bx bxs-book-bookmark'></i>manajemen akun</li>
                <li class="hover:bg-[#4545C1]"><i class='icons pr-[20px] bx bxs-bug' ></i>laporan</li>
            </ul>
            {{-- <ul>
                @if ($role === 'admin')
                <li><a href="/admin/dashboard">Dashboard Admin</a></li>
                <li><a href="/admin/users">Kelola Pengguna</a></li>
                <li><a href="/admin/reports">Laporan</a></li>
                @elseif ($role === 'dosen')
                <li><a href="/dosen/dashboard">Dashboard Dosen</a></li>
                <li><a href="/dosen/classes">Kelas Saya</a></li>
                <li><a href="/dosen/reports">Laporan</a></li>
                @elseif ($role === 'mahasiswa')
                <li><a href="/mahasiswa/dashboard">Dashboard Mahasiswa</a></li>
                <li><a href="/mahasiswa/classes">Kelas Saya</a></li>
                <li><a href="/mahasiswa/grades">Nilai</a></li>
                @endif
            </ul> --}}
        </div>
    </aside>
    <nav class="border-b navbar">
        <button onclick="openSidebar()" id="btn-menu" class="btn-menu icons"><i class='bx bx-menu' ></i></button>

        <div class="flex items-center justify-between w-[200px]">
            <button id="btn-darkmode" class="btn-navbar icons"><i class=' bx bxs-sun' ></i></button>
            <button id="btn-notificaton" class="btn-navbar icons"><i class=' bx bxs-bell' ></i></button>
            <div class="flex gap-[10px]">
                <div class="flex flex-col">
                    {{-- menampilkan nama panggilan pengguna --}}
                    <h1 class="text-[1rem] font-semibold">putri</h1>
                    {{-- Menampilkabn Role seperti "mahasiswa 3C TRPL" --}}
                    <span class="text-[0.75rem] font-normal">Kelas 3C</span>
                </div>
                <a class="flex" href="">
                    <img class="w-[40px] h-[40px] rounded-full" src="https://randomuser.me/api/portraits/women/85.jpg" alt="">
                    
                    <div class="hidden">
                        {{-- icon settings naik dan turun --}}
                        <i class='icons bx bx-chevron-up'></i>
                    </div>
                </a>
                
            </div>
        </div>
    </nav>
</section>