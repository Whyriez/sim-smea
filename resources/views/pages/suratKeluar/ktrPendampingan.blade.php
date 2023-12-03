@extends('layouts.app')
@section('title', 'Surat Keluar Keterangan')
@section('keterangan-pendampingan', 'bg-gray-100 dark:bg-gray-700')

@section('content')
    <div
        class="p-4 bg-white block sm:flex items-center justify-between border-b border-gray-200 lg:mt-1.5 dark:bg-gray-800 dark:border-gray-700">
        <div class="w-full mb-1">
            <div class="mb-4">
                <h1 class="text-xl font-semibold text-gray-900 sm:text-2xl dark:text-white">Surat Keterangan Pendampingan
                </h1>
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
                                        @if ($m->status_persetujuan == 'belum')
                                            <a href="{{ url('ajukan-ttd/' . $m->id) }}"
                                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-pink-700 hover:bg-pink-800 focus:ring-4 focus:ring-pink-300 dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800">
                                                Ajukan TTD
                                            </a>
                                        @elseif($m->status_persetujuan == 'diajukan')
                                            <span
                                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-yellow-400 hover:bg-yellow-600 focus:ring-4 focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                                                Menunggu TTD
                                            </span>
                                        @else
                                            <span
                                                class="inline-flex items-center px-2 py-1 text-sm font-medium text-center text-white rounded-md bg-green-400 hover:bg-green-600 focus:ring-4 focus:ring-green-300 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                                Sudah Di TTD
                                            </span>
                                        @endif
                                        <a href="{{ url('delete-surat/' . $m->id) }}"
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
                        Tambah Surat Keterangan Pendampingan
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
                    <form action="{{ url('store-surat-keluar-keterangan-pendampingan') }}" method="post"
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
                            <div class="col-span-6 sm:col-span-3">
                                <label for="tipeSurat"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipe Surat</label>
                                <input type="text" name="tipeSurat" id="tipeSurat"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    value="Pendampingan" required>
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
                                            <label for="nip_bertanda"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nip</label>
                                            <input type="text" name="nip_bertanda" id="nip_bertanda"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nip Guru" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="jabatan_bertanda"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                                            <input type="text" name="jabatan_bertanda" id="jabatan_bertanda"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Jabatan" required>
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
                                            <label for="nip_diterangkan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nip</label>
                                            <input type="text" name="nip_diterangkan" id="nip_diterangkan"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Nip Guru" required>
                                        </div>
                                        <div class="w-full">
                                            <label for="jabatan_diterangkan"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jabatan</label>
                                            <input type="text" name="jabatan_diterangkan" id="jabatan_diterangkan"
                                                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Jabatan" required>
                                        </div>
                                    </div>
                                </div>
                                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                            </div>

                            <div class="col-span-6 sm:col-span-8">
                                <hr class="h-px my-3 bg-gray-200 border-0 dark:bg-gray-700">
                                <div class="flex justify-between">
                                    <h4 class="text-2xl font-bold dark:text-white">Data Perihal</h4>
                                    <button id="tambahSiswaBtn" onclick="tambahInput()"
                                        class="text-white bg-blue-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-3 py-1.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                                        type="button">Tambah Perihal</button>
                                </div>
                                <label for="perihal"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Perihal</label>
                                <input type="text" name="perihal" id="perihal"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Perihal"
                                    value="Telah melakukan pendampingan/membersamai Kepala Sekolah dalam dalam :" required>
                                <div id="Container">
                                    <div class="sm:flex justify-stretch gap-4" id="inputGroup1">
                                        <div class="w-full mt-2">
                                            <label for="nomor"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No
                                                1</label>
                                            <input type="text" name="list_perihal[]"
                                                class="shadow-sm flex-shrink-0 bg-gray-50 border w-full border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Perihal" required>
                                        </div>
                                    </div>
                                </div>
                                <hr class="h-px my-2 bg-gray-200 border-0 dark:bg-gray-700">
                            </div>

                            <div class="col-span-6 sm:col-span-3">
                                <label for="nama_kepala"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala
                                    Sekolah</label>
                                <input type="text" name="nama_kepala" id="nama_kepala"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nama Kepala Sekolah" required>
                            </div>
                            <div class="col-span-6 sm:col-span-3">
                                <label for="nip_kepala"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nip Kepala
                                    Sekolah</label>
                                <input type="text" name="nip_kepala" id="nip_kepala"
                                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                    placeholder="Nip Kepala Sekolah" required>
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


    <script>
        var counter = 1;

        function tambahInput() {
            counter++;

            // Duplikat input group pertama
            var clone = document.getElementById('inputGroup1').cloneNode(true);
            clone.id = 'inputGroup' + counter;

            // Ubah nomor urutan di dalam elemen label
            var labels = clone.querySelectorAll('label');
            labels.forEach(function(label) {
                label.textContent = label.textContent.replace(/\d+/, counter);
            });

            // Ubah nama atribut input agar tidak konflik dengan yang lain
            var inputs = clone.querySelectorAll('input');
            inputs.forEach(function(input) {
                var currentName = input.getAttribute('name');
                input.setAttribute('name', currentName.replace(/\[\d+\]/, '[' + counter + ']'));
                input.value = ''; // Kosongkan nilai input
            });

            // Tambahkan input group baru ke dalam container
            document.getElementById('Container').appendChild(clone);
        }
    </script>

@endsection
