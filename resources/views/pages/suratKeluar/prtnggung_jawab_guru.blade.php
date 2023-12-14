@extends('layouts.app')
@section('title', 'Surat Penanggung Jawab Mutlak Guru')
@section('pertanggung-jawab-guru', 'bg-gray-300 dark:bg-gray-700')
@section('activeSuket', 'hidden')
@section('activeSuketGuru', '')
@section('activeSuketSiswa', 'hidden')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            @if (session()->has('store'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('store') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            @if (session()->has('delete'))
                <div id="alert-3"
                    class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                    role="alert">
                    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Info</span>
                    <div class="ms-3 text-sm font-medium">
                        {{ session('delete') }}
                    </div>
                    <button type="button"
                        class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700"
                        data-dismiss-target="#alert-3" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
            @endif
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Surat Pertanggung Jawaban Mutlak
                    Guru
                </h1>
            </div>
            <div class="sm:flex">
                <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="{{ url('surat-keluar-pertanggung-jawaban-guru') }}" method="GET">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="flex items-center">
                            <input type="text" name="search"
                                class="flex-1 bg-gray-50 w-[20rem] border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Cari Surat">
                            <button type="submit"
                                class="ml-2 inline-flex items-center justify-center px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                                Cari
                            </button>
                        </div>
                    </form>
                </div>
                <div class="flex items-center ml-auto space-x-2 sm:space-x-3">
                    <button type="button" data-modal-toggle="tambahSurat"
                        class="inline-flex items-center justify-center w-1/2 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 sm:w-auto dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-primary-800">
                        <svg class="w-5 h-5 mr-2 -ml-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Tambah Surat Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col">
        <div class="overflow-x-auto">
            <div class="inline-block min-w-full align-middle">
                <div class="overflow-hidden shadow">
                    <table class="min-w-full divide-y divide-gray-200 table-fixed dark:divide-gray-600">
                        <thead class="bg-gray-100 dark:bg-gray-700">
                            <tr>
                                <th scope="col" class="p-4 text-xs font-medium text-left text-gray-500 uppercase">
                                    No
                                </th>
                                <th scope=" col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Nomor Berkas
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Alamat Penerima
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Tanggal
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Tipe Surat
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Perihal
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Nomor Petunjuk
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Nomor Paket
                                </th>

                                <th scope="col"
                                    class="p-4 text-xs font-medium  text-gray-500 uppercase dark:text-gray-400 text-center">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                            @foreach ($suratKeluar as $m)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="w-4 p-4">
                                        <div
                                            class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                            {{ $loop->iteration }}
                                        </div>
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->nomor_berkas }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->alamat_penerima }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->tanggal }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->tipe_surat }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->perihal }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->nomor_petunjuk }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->nomor_paket }}
                                    </td>

                                    <td class="p-4 space-x-2 whitespace-nowrap text-center">
                                        <button type="button" data-modal-toggle="lihatBerkas{{ $m->id }}"
                                            class="inline-flex items-center px-2 py-2 text-sm font-medium text-center text-white rounded-md bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                            <i class="fa-solid fa-eye"></i>
                                        </button>
                                        <button type="button" data-modal-toggle="delete-user-modal-{{ $m->id }}"
                                            class="inline-flex items-center px-3 py-1 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">
                                            Hapus

                                        </button>
                                        {{-- <a href="{{ url('delete-surat-no-ttd/' . $m->id) }}"
                                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            Hapus
                                        </a> --}}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div
            class="sticky bottom-0 right-0 items-center w-full p-4 bg-white border-t border-gray-200 sm:flex sm:justify-between dark:bg-gray-800 dark:border-gray-700">
            <div class="flex items-center mb-4 sm:mb-0">
                <a href="{{ $suratKeluar->previousPageUrl() }}"
                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="{{ $suratKeluar->nextPageUrl() }}"
                    class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                    Showing
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $suratKeluar->firstItem() }}</span>-
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $suratKeluar->lastItem() }}</span>
                    of
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $suratKeluar->total() }}</span>
                </span>

            </div>
            <div class="flex items-center space-x-3">
                <a href="{{ $suratKeluar->previousPageUrl() }}"
                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="w-5 h-5 mr-1 -ml-1"" fill=" currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Previous
                </a>
                <a href="{{ $suratKeluar->nextPageUrl() }}"
                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Next
                    <svg class="w-5 h-5 ml-1 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    </div>


    <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-1 md:inset-0 h-modal sm:h-full"
        id="tambahSurat">
        <div class="relative w-full h-full max-w-[80rem] px-4 md:h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Tambah Surat Pertanggung Jawaban Mutlak Guru
                    </h3>

                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-toggle="tambahSurat">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close menu</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6 space-y-6">
                    <form action="{{ url('store-surat-keluar-pertanggung-jawaban-guru') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-2xl font-bold dark:text-white">Surat Keluar</h4>
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nomor_berkas"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Berkas</label>
                                <input type="text" name="nomor_berkas" id="nomor_berkas"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nomor Berkas" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="alamatPenerima"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                    Penerima</label>
                                <input type="text" name="alamatPenerima" id="alamatPenerima"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Alamat Penerima" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tglSuratKeluar"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                <input type="date" name="tglSuratKeluar" id="tglSuratKeluar"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    min="{{ now()->format('Y-m-d') }}" value="{{ now()->format('Y-m-d') }}" required>
                            </div>
                            {{-- <div class="col-span-6 sm:col-span-3">
                                <label for="tipeSurat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat</label>
                              
                            </div> --}}
                            <input type="hidden" name="tipeSurat" id="tipeSurat"
                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                value="Pertanggung Jawaban Mutlak Guru">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="perihal"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perihal</label>
                                <input type="text" name="perihal" id="perihal"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Perihal" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nomor_petunjuk"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Petunjuk</label>
                                <input type="text" name="nomor_petunjuk" id="nomor_petunjuk"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nomor Petunjuk" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nomor_paket"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Paket</label>
                                <input type="text" name="nomor_paket" id="nomor_paket"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nomor Paket">
                            </div>
                        </div>
                        <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                        <h4 class="text-2xl font-bold dark:text-white">Surat Keterangan Pendampingan</h4>
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nomor_surat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Surat</label>
                                <input type="text" name="nomor_surat" id="nomor_surat"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="005/DIKBUD/SMK1/TU/XI/" value="005/DIKBUD/SMK1/TU/XI/" required>
                            </div>
                            <div class="col-span-6 sm:col-span-8">
                                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                                <div class="flex justify-between">
                                    <h4 class="text-2xl font-bold dark:text-white">Yang bertada tangan dibawah :</h4>
                                </div>
                                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                                <div>
                                    <div class="sm:flex justify-stretch gap-4">
                                        <div class="w-full">
                                            <label for="nama_bertanda"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                            <input type="text" name="nama_bertanda" id="nama_bertanda"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nama Guru" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="tmp_tgl_lahir_bertanda"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                                                Tanggal Lahir</label>
                                            <input type="text" name="tmp_tgl_lahir_bertanda"
                                                id="tmp_tgl_lahir_bertanda"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Tempat Tanggal Lahir" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="pekerjaan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pekerjaan</label>
                                            <input type="text" name="pekerjaan" id="pekerjaan"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Pekerjaan" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="nip_bertanda"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nip</label>
                                            <input type="text" name="nip_bertanda" id="nip_bertanda"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nip Guru" required>
                                        </div>
                                    </div>
                                    <div class="sm:flex justify-stretch gap-4">
                                        <div class="w-full">
                                            <label for="pangkat_golongan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pangkat/Golongan,
                                                Ruang</label>
                                            <input type="text" name="pangkat_golongan" id="pangkat_golongan"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Pangkat/Golongan, Ruang" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="jabatan_bertanda"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                                            <input type="text" name="jabatan_bertanda" id="jabatan_bertanda"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Jabatan" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="unit_kerja"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Unit
                                                Kerja</label>
                                            <input type="text" name="unit_kerja" id="unit_kerja"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Unit Kerjas" required>
                                        </div>
                                    </div>
                                </div>
                                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                            </div>

                            <div class="col-span-6 sm:col-span-8">
                                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                                <div class="flex justify-between">
                                    <h4 class="text-2xl font-bold dark:text-white">Dengan ini menerangkan :</h4>
                                </div>
                                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                                <div>
                                    <div class="sm:flex justify-stretch gap-4">
                                        <div class="w-full">
                                            <label for="nama_diterangkan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                            <input type="text" name="nama_diterangkan" id="nama_diterangkan"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nama Guru" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="tmp_tgl_lahir_diterangkan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tempat
                                                Tanggal Lahir</label>
                                            <input type="text" name="tmp_tgl_lahir_diterangkan"
                                                id="tmp_tgl_lahir_diterangkan"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Tempat Tanggal Lahir" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="alamat_diterangkan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                                            <input type="text" name="alamat_diterangkan" id="alamat_diterangkan"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Alamat" required>
                                        </div>
                                    </div>
                                </div>
                                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="perihalSurat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perihal</label>
                                <textarea name="perihalSurat"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    id="perihalSurat" cols="10" rows="3" required>Berdasarkan Data yang ada bahwa Nama tersebut benar-benar Lulusan SMK Negeri 1 Gorontalo angkatan Tahun 1999/2000 Tahun Lulus 2001/2002</textarea>
                            </div>
                        </div>
                </div>
                <!-- Modal footer -->
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <button
                        class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="submit">Buat Surat</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($suratKeluar as $m)
        <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-1 md:inset-0 h-modal sm:h-full"
            id="lihatBerkas{{ $m->id }}">
            <div class="relative w-full h-full max-w-2xl px-4 md:h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                        <h3 class="text-xl font-semibold dark:text-white">
                            Berkas
                        </h3>

                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="lihatBerkas{{ $m->id }}">
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="sr-only">Close menu</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <div class="p-6 space-y-6">
                        <h4 class="text-2xl font-bold dark:text-white">Berkas Surat Keluar</h4>
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">

                        <iframe src="{{ asset('storage/' . $m->berkas) }}" style="width: 100%" height="500"
                            id="myframe"></iframe>

                        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($suratKeluar as $m)
        <!-- Delete User Modal -->
        <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-4 md:inset-0 h-modal sm:h-full"
            id="delete-user-modal-{{ $m->id }}">
            <div class="relative w-full h-full max-w-md px-4 md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                    <!-- Modal header -->
                    <div class="flex justify-end p-2">
                        @csrf
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-700 dark:hover:text-white"
                            data-modal-toggle="delete-user-modal-{{ $m->id }}">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>


                    </div>
                    <!-- Modal body -->
                    <div class="p-6 pt-0 text-center">
                        <svg class="w-16 h-16 mx-auto text-red-600" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <h3 class="mt-5 mb-6 text-lg text-gray-500 dark:text-gray-400">Apakah Yakin Ingin Menghapus Surat
                            Ini?</h3>
                        <a href="{{ url('delete-surat-no-ttd/' . $m->id) }}"
                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-base inline-flex items-center px-3 py-2.5 text-center mr-2 dark:focus:ring-red-800">
                            Ya
                        </a>
                        <button
                            class="text-gray-900 bg-white hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 border border-gray-200 font-medium inline-flex items-center rounded-lg text-base px-3 py-2.5 text-center dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700"
                            data-modal-toggle="delete-user-modal-{{ $m->id }}">
                            Tidak
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



@endsection
