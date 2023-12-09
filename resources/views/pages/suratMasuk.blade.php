@extends('layouts.app')
@section('title', 'Surat Masuk')
@section('suratMasuk', 'bg-gray-300 dark:bg-gray-700')

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
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Semua Surat</h1>
            </div>
            <div class="sm:flex">
                <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="{{ url('surat-masuk') }}" method="GET">
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
                        Tambah Surat
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
                                    Alamat Pengirim
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Tanggal
                                </th>
                                <th scope="col"
                                    class="p-4 text-xs font-medium text-left text-gray-500 uppercase dark:text-gray-400">
                                    Nomor
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
                            @foreach ($suratMasuk as $m)
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
                                        {{ $m->alamat_pengirim }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->tanggal }}
                                    </td>
                                    <td
                                        class="max-w-sm p-4 overflow-hidden text-base font-medium text-gray-900 truncate xl:max-w-xs dark:text-white">
                                        {{ $m->nomor }}
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
                                        <button type="button" data-modal-toggle="lihatBerkasDisposisi{{ $m->id }}"
                                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                            <i class="fa-solid fa-eye mr-2"></i>
                                            Lihat Surat Disposisi
                                        </button>
                                        {{-- <a href="{{ url('lembar-disposisi/' . $m->id) }}" target="__BLANK"
                                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                                            <i class="fa-solid fa-eye mr-2"></i>
                                            Lihat Surat Disposisi
                                        </a> --}}
                                        <a href="{{ url('delete-surat-masuk/' . $m->id) }}"
                                            class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                            Hapus
                                        </a>
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
                <a href="{{ $suratMasuk->previousPageUrl() }}"
                    class="inline-flex justify-center p-1 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <a href="{{ $suratMasuk->nextPageUrl() }}"
                    class="inline-flex justify-center p-1 mr-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                    <svg class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                </a>
                <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                    Showing
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $suratMasuk->firstItem() }}</span>-
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $suratMasuk->lastItem() }}</span>
                    of
                    <span class="font-semibold text-gray-900 dark:text-white">{{ $suratMasuk->total() }}</span>
                </span>

            </div>
            <div class="flex items-center space-x-3">
                <a href="{{ $suratMasuk->previousPageUrl() }}"
                    class="inline-flex items-center justify-center flex-1 px-3 py-2 text-sm font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    <svg class="w-5 h-5 mr-1 -ml-1"" fill=" currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                            clip-rule="evenodd"></path>
                    </svg>
                    Previous
                </a>
                <a href="{{ $suratMasuk->nextPageUrl() }}"
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
        <div class="relative w-full h-full max-w-2xl px-4 md:h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-800">
                <!-- Modal header -->
                <div class="flex items-start justify-between p-5 border-b rounded-t dark:border-gray-700">
                    <h3 class="text-xl font-semibold dark:text-white">
                        Tambah Surat
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
                    <form action="{{ url('store-surat-masuk') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h4 class="text-2xl font-bold dark:text-white">Surat Masuk</h4>
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
                                <label for="alamat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat
                                    Pengirim</label>
                                <input type="text" name="alamat" id="alamat"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Alamat Pengirim" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tglSuratMasuk"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                <input type="date" name="tglSuratMasuk" id="tglSuratMasuk"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    min="{{ now()->format('Y-m-d') }}" value="{{ now()->format('Y-m-d') }}" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nomorSuratMasuk"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor</label>
                                <input type="text" name="nomorSuratMasuk" id="nomorSuratMasuk"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nomor" required>
                            </div>
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

                            <div class="col-span-4 sm:col-span-3">
                                <label for="position"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Berkas Scan
                                </label>
                                <input type="file" name="berkas"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 @error('berkas') is-invalid @enderror""
                                    placeholder=" Upload File" required>
                                @error('berkas')
                                    <div class="block mb-2 text-sm font-medium text-gray-900 dark:text-white invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror

                            </div>

                        </div>
                        <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                        <h4 class="text-2xl font-bold dark:text-white">Lembar Disposisi</h4>
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                        <div class="grid grid-cols-6 gap-6">
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surat Dari</label>
                                <input type="text" name="surat_dari" id="first-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Surat Dari" required>
                            </div>
                            {{-- <div class="col-span-6 sm:col-span-3">
                                <label for="tgl_surat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tgl Surat</label>
                                <input type="date" name="tgl_surat" id="tgl_surat"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                            </div> --}}
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Surat</label>
                                <input type="text" name="nomor_surat" id="first-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nomor Surat" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tgl_diterima"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diterima
                                    Tanggal</label>
                                <input type="date" name="tgl_diterima" id="tgl_diterima"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nomor_agenda"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Agenda</label>
                                <input type="text" name="nomor_agenda" id="nomor_agenda"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nomor Agenda">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="category-create"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sifat</label>
                                <select id="category-create" name="sifat"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                    <option value="">Silahkan Pilih</option>
                                    <option value="0">Sangat Segera</option>
                                    <option value="1">Segera</option>
                                    <option value="2">Rahasia</option>
                                </select>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="hal"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Hal</label>
                                <input type="text" name="hal" id="hal"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Hal" required>
                            </div>

                            <div class="col-span-6 sm:col-span-6">
                                <label for="catatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                                <textarea name="catatan"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    id="catatan" cols="10" rows="3" required></textarea>
                            </div>


                            <div class="col-span-6 sm:col-span-3">
                                <label for="category-create"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diteruskan Kepada
                                    Sdr</label>
                                <div class="flex items-center mb-4">
                                    <input id="inpkasubag" name="kasubag" type="checkbox" value="1"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkasubag"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kasubag
                                        TU</label>
                                </div>
                                <input type="text" name="valkasubag" id="kasubag-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Kasubag TU" value="">
                                <div class="flex items-center mb-4">
                                    <input id="inpwaksek" name="waksek" type="checkbox" value="2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpwaksek"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Waksek</label>
                                </div>
                                <input type="text" name="valwaksek" id="waksek-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Waksek" value="">
                                <div class="flex items-center mb-4">
                                    <input id="inpkaprodi" name="kapordi" type="checkbox" value="3"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkaprodi"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ka
                                        Prog.Keahl</label>
                                </div>
                                <input type="text" name="valkapordi" id="kaprodi-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Ka Prog.Keahl" value="">
                                <div class="flex items-center mb-4">
                                    <input id="inpkoordinator" name="koordinator" type="checkbox" value="4"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkoordinator"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koordinator</label>
                                </div>
                                <input type="text" name="valkoordinator" id="koordinator-input"
                                    class="shadow-sm hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Koordinator" value="">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="category-create"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dengan Hormat
                                    Harap</label>

                                <div class="flex items-center mb-4">
                                    <input id="inpsaran" name="tanggapan" type="checkbox" value="1"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        onchange="updateValtanggapan(this)">
                                    <label for="inpsaran"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggapan Dan
                                        Saran</label>
                                    <input type="hidden" id="valtanggapan" name="valtanggapan" value="">
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="inplanjut" name="prosesLebih" type="checkbox" value="2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        onchange="updateValProsesLebih(this)">
                                    <label for="inplanjut"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Proses Lebih
                                        Lanjut</label>
                                    <input type="hidden" id="valprosesLebih" name="valprosesLebih" value="">
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="inpkonfirmasikan" name="koordinasi" type="checkbox" value="3"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
                                        onchange="updateValKoordinasi(this)">
                                    <label for="inpkonfirmasikan"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koordinasi/Konfirmasikan</label>
                                    <input type="hidden" id="valkoordinasi" name="valkoordinasi" value="">
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="inplainnya" name="lainnya" type="checkbox" value="4"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inplainnya"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lainnya</label>
                                </div>
                                <input type="text" name="vallainnya" id="lainnya-input"
                                    class="shadow-sm hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Lainnya">
                            </div>


                            {{-- <div class="col-span-6 sm:col-span-3">
                                <label for="category-create"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Diteruskan Kepada
                                    Sdr</label>
                                <div class="flex items-center mb-4">
                                    <input id="inpkasubag" name="dtrskepada[]" type="checkbox" value="1"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkasubag"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Kasubag
                                        TU</label>
                                </div>
                                <input type="text" name="dtrskepada_values[1]" id="kasubag-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Kasubag TU" value="Kasubag TU">
                                <div class="flex items-center mb-4">
                                    <input id="inpwaksek" name="dtrskepada[]" type="checkbox" value="2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpwaksek"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Waksek</label>
                                </div>
                                <input type="text" name="dtrskepada_values[2]" id="waksek-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Waksek" value="Waksek">
                                <div class="flex items-center mb-4">
                                    <input id="inpkaprodi" name="dtrskepada[]" type="checkbox" value="3"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkaprodi"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ka
                                        Prog.Keahl</label>
                                </div>
                                <input type="text" name="dtrskepada_values[3]" id="kaprodi-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Ka Prog.Keahl" value="Ka Prog.Keahl">
                                <div class="flex items-center mb-4">
                                    <input id="inpkoordinator" name="dtrskepada[]" type="checkbox" value="4"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkoordinator"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koordinator</label>
                                </div>
                                <input type="text" name="dtrskepada_values[4]" id="koordinator-input"
                                    class="shadow-sm hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Koordinator" value="Koordinator">
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="category-create"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dengan Hormat
                                    Harap</label>

                                <div class="flex items-center mb-4">
                                    <input id="inpsaran" name="dng_hormat[]" type="checkbox" value="1"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpsaran"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Tanggapan Dan
                                        Saran</label>
                                    <input type="hidden" name="dng_lainnya[1]" value="Tanggapan Dan Saran">
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="inplanjut" name="dng_hormat[]" type="checkbox" value="2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inplanjut"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Proses Lebih
                                        Lanjut</label>
                                    <input type="hidden" name="dng_lainnya[2]" value="Proses Lebih Lanjut">
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="inpkonfirmasikan" name="dng_hormat[]" type="checkbox" value="3"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkonfirmasikan"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koordinasi/Konfirmasikan</label>
                                    <input type="hidden" name="dng_lainnya[3]" value="Koordinasi/Konfirmasikan">
                                </div>
                                <div class="flex items-center mb-4">
                                    <input id="inplainnya" name="dng_hormat[]" type="checkbox" value="4"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inplainnya"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Lainnya</label>
                                </div>
                                <input type="text" name="dng_lainnya[4]" id="lainnya-input"
                                    class="shadow-sm hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Lainnya">
                            </div> --}}

                        </div>
                </div>
                <!-- Modal footer -->
                <div class="items-center p-6 border-t border-gray-200 rounded-b dark:border-gray-700">
                    <button
                        class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                        type="submit">Save all</button>
                </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($suratMasuk as $m)
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
                        <h4 class="text-2xl font-bold dark:text-white">Berkas Surat Masuk</h4>
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">

                        <iframe src="{{ asset('storage/' . $m->berkas) }}" style="width: 100%" height="500"
                            id="myframe"></iframe>

                        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($suratMasuk as $m)
        <div class="fixed left-0 right-0 z-50 items-center justify-center hidden overflow-x-hidden overflow-y-auto top-1 md:inset-0 h-modal sm:h-full"
            id="lihatBerkasDisposisi{{ $m->id }}">
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
                            data-modal-toggle="lihatBerkasDisposisi{{ $m->id }}">
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
                        <h4 class="text-2xl font-bold dark:text-white">Berkas Surat Masuk</h4>
                        <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">

                        <iframe src="{{ asset('storage/' . $m->berkas_disposisi) }}" style="width: 100%" height="500"
                            id="myframe"></iframe>

                        <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var lainnyaCheckbox = document.getElementById('inplainnya');
            var lainnyaInput = document.getElementById('lainnya-input');

            var kasubagCheckbox = document.getElementById('inpkasubag');
            var kasubagInput = document.getElementById('kasubag-input');

            var waksekCheckbox = document.getElementById('inpwaksek');
            var waksekInput = document.getElementById('waksek-input');

            var kaprodiCheckbox = document.getElementById('inpkaprodi');
            var kaprodiInput = document.getElementById('kaprodi-input');

            var kooridnatorCheckbox = document.getElementById('inpkoordinator');
            var kooridnatorInput = document.getElementById('koordinator-input');


            lainnyaCheckbox.addEventListener('click', function() {
                if (lainnyaCheckbox.checked) {
                    lainnyaInput.classList.remove('hidden');
                } else {
                    lainnyaInput.classList.add('hidden');
                    lainnyaInput.value = '';
                }
            });

            kasubagCheckbox.addEventListener('click', function() {
                if (kasubagCheckbox.checked) {
                    kasubagInput.classList.remove('hidden');
                } else {
                    kasubagInput.classList.add('hidden');
                    kasubagInput.value = '';
                }
            });
            waksekCheckbox.addEventListener('click', function() {
                if (waksekCheckbox.checked) {
                    waksekInput.classList.remove('hidden');
                } else {
                    waksekInput.classList.add('hidden');
                    waksekInput.value = '';
                }
            });
            kaprodiCheckbox.addEventListener('click', function() {
                if (kaprodiCheckbox.checked) {
                    kaprodiInput.classList.remove('hidden');
                } else {
                    kaprodiInput.classList.add('hidden');
                    kaprodiInput.value = '';
                }
            });
            kooridnatorCheckbox.addEventListener('click', function() {
                if (kooridnatorCheckbox.checked) {
                    kooridnatorInput.classList.remove('hidden');
                } else {
                    kooridnatorInput.classList.add('hidden');
                    kooridnatorInput.value = '';
                }
            });

        });

        function updateValtanggapan(checkbox) {
            var valtanggapanInput = document.getElementById('valtanggapan');

            if (checkbox.checked) {
                valtanggapanInput.value = 'Tanggapan Dan Saran';
            } else {
                valtanggapanInput.value = '';
            }
        }

        function updateValProsesLebih(checkbox) {
            var valprosesInput = document.getElementById('valprosesLebih');

            if (checkbox.checked) {
                valprosesInput.value = 'Proses Lebih Lanjut';
            } else {
                valprosesInput.value = '';
            }
        }

        function updateValKoordinasi(checkbox) {
            var valkoordinasiInput = document.getElementById('valkoordinasi');

            if (checkbox.checked) {
                valkoordinasiInput.value = 'Koordinasi';
            } else {
                valkoordinasiInput.value = '';
            }
        }
    </script>

@endsection
