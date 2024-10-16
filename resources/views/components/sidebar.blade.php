<section>
    <nav>
        <button class="hidden"></button>

        <div>
            <button></button>
            <button></button>
            <div>
                {{-- menampilkan nama panggilan pengguna --}}
                <h1>{{  }}</h1>
                {{-- Menampilkabn Role seperti "mahasiswa 3C TRPL" --}}
                <span>{{  }}</span>
                <a href="">
                    <img src="" alt="">
                    <div>
                        {{-- icon settings naik dan turun --}}
                    </div>
                </a>
                
            </div>
        </div>
    </nav>
    <aside>
        <div>
            <div>
                <img src="/public/img/logo-pnb.png" alt="Logo PNB">
                <img src="/public/img/logo.png" alt="Logo JTI">
            </div>
            
            <button>{{-- icon back --}}</button>
        </div>
        <div>
            <span>menu</span>
            <ul>
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
            </ul>
        </div>
    </aside>
</section>