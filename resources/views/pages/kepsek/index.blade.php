@extends('layouts.app')
@section('title', 'Surat Masuk')
@section('suratMasuk', 'bg-gray-100 dark:bg-gray-700')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Data Surat</h1>
            </div>
            <div class="sm:flex">
                <div class="items-center hidden mb-3 sm:flex sm:divide-x sm:divide-gray-100 sm:mb-0 dark:divide-gray-700">
                    <form class="lg:pr-3" action="{{ url('table') }}" method="GET">
                        <label for="users-search" class="sr-only">Search</label>
                        <div class="flex items-center">
                            <input type="text" name="search"
                                class="flex-1 bg-gray-50 w-[20rem] border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                placeholder="Cari Menu">
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
                            @foreach ($dataAjuan as $m)
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
                                        @if ($m->status_persetujuan == 'diajukan')
                                            <a href="{{ url('add-ttd/' . $m->id) }}"
                                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-yellow-400 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                                <i class="fa-solid fa-eye mr-2"></i>
                                                Berikan TTD
                                            </a>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                <i class="fa-solid fa-eye mr-2"></i>
                                                Sudah TTD
                                            </span>
                                        @endif

                                        {{-- <button type="button" data-modal-toggle="delete-user-modal-{{ $m->id }}"
                                            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-800 focus:ring-4 focus:ring-red-300 dark:focus:ring-red-900">


                                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                            Delete

                                        </button> --}}
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
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
                                    required>
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
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tgl_surat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tgl Surat</label>
                                <input type="date" name="tgl_surat" id="tgl_surat"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="first-name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor
                                    Surat</label>
                                <input type="text" name="nomor_surat" id="first-name"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nomor
                                    Surat" required>
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
                            <div class="col-span-6 sm:col-span-3">
                                <label for="catatan"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catatan</label>
                                <input type="text" name="catatan" id="catatan"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Catatan" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
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
                                    placeholder="Kasubag TU">
                                <div class="flex items-center mb-4">
                                    <input id="inpwaksek" name="dtrskepada[]" type="checkbox" value="2"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpwaksek"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Waksek</label>
                                </div>
                                <input type="text" name="dtrskepada_values[2]" id="waksek-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Waksek">
                                <div class="flex items-center mb-4">
                                    <input id="inpkaprodi" name="dtrskepada[]" type="checkbox" value="3"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkaprodi"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ka
                                        Prog.Keahl</label>
                                </div>
                                <input type="text" name="dtrskepada_values[3]" id="kaprodi-input"
                                    class="shadow-sm hidden mb-3 bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Ka Prog.Keahl">
                                <div class="flex items-center mb-4">
                                    <input id="inpkoordinator" name="dtrskepada[]" type="checkbox" value="4"
                                        class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="inpkoordinator"
                                        class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Koordinator</label>
                                </div>
                                <input type="text" name="dtrskepada_values[4]" id="koordinator-input"
                                    class="shadow-sm hidden bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Koordinator">
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
                            </div>

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

    @foreach ($dataAjuan as $m)
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


@endsection
