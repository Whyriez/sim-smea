<aside id="navbar-dropdown"
    class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width"
    aria-label="Sidebar">
    <div
        class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>
                        <a href="{{ url('dashboard') }}"
                            class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 @yield('dashboard')">
                            <i class="fa-brands fa-hashnode"></i>
                            <span class="ml-3" sidebar-toggle-item>Dashboard</span>
                        </a>
                    </li>
                    @if (Auth::user()->role == 0)
                        <li>
                            <a href="{{ url('surat-masuk') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 @yield('suratMasuk')">
                                <i class="fa-regular fa-envelope"></i>
                                <span class="ml-3" sidebar-toggle-item>Surat Masuk</span>
                            </a>
                        </li>
                    @elseif(Auth::user()->role == 1)
                        <li>
                            <button type="button"
                                class="flex items-center  w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="surat-keluar" data-collapse-toggle="surat-keluar">
                                <i class="fa-solid fa-file-export"></i>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Surat
                                    Keluar</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="surat-keluar" class="@yield('activeSuket') py-2 space-y-2">
                                <li>
                                    <a href="{{ url('surat-keluar-undangan') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('undangan')">Undangan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan')">Keterangan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-pendampingan') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-pendampingan')">Keterangan
                                        Pendampingan</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-pindah') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-pindah')">Keterangan
                                        Pindah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-pengantar') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('pengantar')">Pengantar
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center  w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="surat-keluar-guru" data-collapse-toggle="surat-keluar-guru">
                                <i class="fa-solid fa-file-export"></i>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Surat
                                    Keluar Guru</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="surat-keluar-guru" class="@yield('activeSuketGuru') py-2 space-y-2">
                                <li>
                                    <a href="{{ url('surat-keluar-dispensasi-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('dispensasi-guru')">Dispensasi
                                        Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-lolos-butuh-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-llsbth-guru')">Keterangan
                                        Lolos Butuh Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-pertanggung-jawaban-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('pertanggung-jawab-guru')">Pertanggung
                                        Jawaban Mutlak Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-rekomendasi-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-rekomendasi-guru')">Rekomendasi
                                        Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-tugas-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('tugas-guru')">Tugas
                                        Guru</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <button type="button"
                                class="flex items-center  w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="surat-keluar-siswa" data-collapse-toggle="surat-keluar-siswa">
                                <i class="fa-solid fa-file-export"></i>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Surat
                                    Keluar Siswa</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="surat-keluar-siswa" class="@yield('activeSuketSiswa') py-2 space-y-2">
                                <li>
                                    <a href="{{ url('surat-keluar-dispensasi-siswa') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('dispensasi-siswa')">Dispensasi
                                        Siswa</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-lolos-butuh-siswa') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-llsbth-siswa')">Keterangan
                                        Lolos Butuh Siswa</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-rekomendasi-siswa') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Rekomendasi
                                        Siswa</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-tugas-siswa') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('tugas-siswa')">Tugas
                                        Siswa</a>
                                </li>
                            </ul>
                        </li>

                        {{-- <li>
                            <button type="button"
                                class="flex items-center  w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700"
                                aria-controls="surat-keluar" data-collapse-toggle="surat-keluar-ttd">
                                <i class="fa-solid fa-file-export"></i>
                                <span class="flex-1 ml-3 text-left whitespace-nowrap" sidebar-toggle-item>Data Surat
                                    Sudah TTD</span>
                                <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <ul id="surat-keluar-ttd" class="@yield('active') py-2 space-y-2">
                                <li>
                                    <a href="{{ url('surat-keluar-undangan') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('undangan')">Undangan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-dispensasi-siswa') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('dispensasi-siswa')">Dispensasi
                                        Siswa</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-dispensasi-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('dispensasi-guru')">Dispensasi
                                        Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan')">Keterangan
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-pendampingan') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-pendampingan')">Keterangan
                                        Pendampingan</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-pindah') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-pindah')">Keterangan
                                        Pindah Sekolah</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-lolos-butuh-siswa') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-llsbth-siswa')">Keterangan
                                        Lolos Butuh Siswa</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-keterangan-lolos-butuh-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('keterangan-llsbth-guru')">Keterangan
                                        Lolos Butuh Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-pertanggung-jawaban-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('pertanggung-jawab-guru')">Pertanggung
                                        Jawaban Mutlak Guru</a>
                                </li>
                                <li>
                                    <a href="https://flowbite-admin-dashboard.vercel.app/pages/500/"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Rekomendasi
                                        Siswa</a>
                                </li>
                                <li>
                                    <a href="https://flowbite-admin-dashboard.vercel.app/pages/500/"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700">Rekomendasi
                                        Guru</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-pengantar') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('pengantar')">Pengantar
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-tugas-siswa') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('tugas-siswa')">Tugas
                                        Siswa</a>
                                </li>
                                <li>
                                    <a href="{{ url('surat-keluar-tugas-guru') }}"
                                        class="flex items-center p-2 text-base text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-700 @yield('tugas-guru')">Tugas
                                        Guru</a>
                                </li>
                            </ul>
                        </li> --}}
                    @else
                        <li>
                            <a href="{{ url('data-ttd') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 @yield('dataTTD')">
                                <i class="fa-solid fa-user"></i>
                                <span class="ml-3" sidebar-toggle-item>Profile Saya</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('data-surat') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 @yield('suratKeluarBelumTTD')">
                                <i class="fa-regular fa-envelope"></i>
                                <span class="ml-3 w-full" sidebar-toggle-item>
                                    <div class="flex justify-between ">
                                        Data Surat <span
                                            class="bg-blue-200 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-700 dark:text-gray-300">
                                            {{ $count }}</span>
                                    </div>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('data-surat-sudah') }}"
                                class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700 @yield('suratKeluarSudahTTD')">
                                <i class="fa-regular fa-envelope"></i>
                                <span class="ml-3 w-full" sidebar-toggle-item>
                                    <div class="flex justify-between ">
                                        Surat Sudah Acc <span
                                            class="bg-green-200 ml-2 text-gray-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-700 dark:text-gray-300">
                                            {{ $countSudah }}</span>
                                    </div>
                                </span>
                            </a>
                        </li>
                    @endif
                </ul>

            </div>
        </div>

</aside>
<div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>
