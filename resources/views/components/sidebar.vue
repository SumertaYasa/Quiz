<template>
    <section class="flex capitalize">
        <aside id="sidebar" class="sidebar">
            <div class="flex justify-between items-center px-[20px] pt-[20px] pb-[110px]">
                <div class="flex gap-4">
                    <img class="border border-white logo-sidebar" src="../../../public/img/logo.png" alt="Logo JTI">
                    <img class="logo-sidebar" src="../../../public/img/logo-pnb.png" alt="Logo PNB">
                </div>
                
                <button onclick="closeSidebar()" id="btn-closeSide" class="icons btn color-btn-close"><i class='bx bx-left-arrow-alt' ></i></button>
            </div>
            <div class="pl-[20px]">
                <span class="span-menu">menu</span>
                <!-- <ul class="menu-sidebar" v-if="menus[$role]">
                    <li v-for="(item, index) in menus[$role]" :key="index" class="hover:bg-[#4545C1] "><a :href="item.href"><i :class="[icons, pr-[20px], item.icon]" ></i>{{ item.label }}</a></li>
                </ul> -->

            </div>
        </aside>
        <header class="border-b l-navbar">
            <nav class="b-container nav">
                <button onclick="openSidebar()" id="btn-menu" class="btn color-btn-menu icons"><i class='bx bx-menu' ></i></button>

                <div class="flex items-center gap-[10px] md:gap-[25px] justify-end w-full max-w-[500px]">
                    <button id="btn-darkmode" class="btn-full color-btn-navbar icons"><i class=' bx bxs-sun' ></i></button>
                    <button id="btn-notificaton" class="btn-full color-btn-navbar icons"><i class='bx bxs-bell' ></i></button>
                    <div class="flex gap-[15px]">
                        <div class="hidden md:flex-col md:flex">
                            <!-- menampilkan nama panggilan pengguna -->
                            <h1 class="font-semibold text-right text-mobile-heading">putri </h1>
                             <!-- Menampilkabn Role seperti "mahasiswa 3C TRPL" -->
                            <span class="font-normal ">Kelas 3C</span>
                        </div>
                        <div>
                            <button id="dropdownButton" class="flex-center pt-1 gap-[10px]">
                                <img class="w-[50px] h-[50px] rounded-full" src="https://randomuser.me/api/portraits/women/85.jpg" alt="">
                                
                                <div class="hidden md:flex">
                                    <i class='icons bx bx-chevron-down'></i>
                                </div>
                            </button>
                            <div id="dropdownMenu" class="absolute right-[20px] hidden w-[250px] mt-[5px] bg-white rounded-b-md shadow-lg">
                                <div class="py-3 border-b " role="menu" aria-orientation="vertical" aria-labelledby="dropdownButton">
                                    <a href="#" class="dropMenu-list" role="menuitem"><i class='text-icon-mobile pr-[20px] bx bxs-user'></i>profil saya</a>
                                    <a href="#" class="dropMenu-list" role="menuitem"><i class='text-icon-mobile pr-[20px] bx bxs-cog' ></i>pengaturan</a>
                                </div>
                                    <a href="views/welcome.blade.php" class="dropMenu-list logout" role="menuitem"><i class='text-icon-mobile pr-[20px] bx bx-exit' ></i>keluar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </section>    
</template>

<script>
    export default {
        name: 'Sidebar',
            // data() {
            //     return {
            //         menus: {
            //             admin: [
            //                 { label: 'dashboard', icon: 'bx bxs-dashboard', href: "{{ route('admin.dashboard') }}" },
            //                 { label: 'data pengguna', icon: 'bx bxs-data', href: "{{ route('admin.data') }}" },
            //                 { label: 'manajemen akun', icon: 'bx bxs-book-bookmark', href: "{{ route('admin.accounts') }}" },
            //                 { label: 'laporan', icon: 'bx bxs-bug', href: "{{ route('admin.reports') }}" },
            //             ],
            //             dosen: [
            //                 { label: 'dashboard', icon: 'bx bxs-dashboard', href: "{{ route('dosen.dashboard') }}" },
            //                 { label: 'data pengguna', icon: 'bx bxs-data', href: "{{ route('dosen.data') }}" },
            //                 { label: 'manajemen akun', icon: 'bx bxs-book-bookmark', href: "{{ route('dosen.accounts') }}" },
            //                 { label: 'laporan', icon: 'bx bxs-bug', href: "{{ route('dosen.reports') }}" },
            //             ],
            //             mahasiswa: [
            //                 { label: 'dashboard', icon: 'bx bxs-dashboard', href: "{{ route('mahasiswa.dashboard') }}" },
            //                 { label: 'data pengguna', icon: 'bx bxs-data', href: "{{ route('mahasiswa.data') }}" },
            //                 { label: 'manajemen akun', icon: 'bx bxs-book-bookmark', href: "{{ route('mahasiswa.accounts') }}" },
            //                 { label: 'laporan', icon: 'bx bxs-bug', href: "{{ route('mahasiswa.reports') }}" },
            //             ],
            //         },
            //     };
            // },
            // props: {
            //     $role:{
            //         type: String,
            //         Required: true,
            //     }
            // }
    }
</script>