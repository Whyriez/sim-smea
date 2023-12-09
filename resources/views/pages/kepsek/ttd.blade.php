@extends('layouts.app')
@section('title', 'TTD')
@section('dataTTD', 'bg-gray-100 dark:bg-gray-700')

@section('content')
    <div class="w-full bg-white dark:bg-gray-900 rounded-lg shadow-lg p-6">
        <form action="{{ url('data-ttd') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-5">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Kepala
                    Sekolah</label>
                <input type="text" id="nama"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nama Kepala Sekolah" value="{{ Auth::user()->name }}" name="nama" required>
            </div>
            <div class="mb-5">
                <label for="nip" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nip Kepala
                    Sekolah</label>
                <input type="text" id="nip" name="nip"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Nip" value="{{ Auth::user()->nip }}" required>
            </div>
            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload Tanda
                Tangan</label>
            <input
                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                aria-describedby="file_ttd" id="file_ttd" name="file_ttd" type="file">
            <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_ttd">PNG.</p>

            <label class="block mb-2 text-lg mt-5 font-medium text-gray-900 dark:text-white"
                for="file_input">Preview</label>
            <img class="h-auto max-w-xl w-full rounded-lg shadow-xl bg-white dark:shadow-gray-800"
                src="{{ asset('storage/' . Auth::user()->ttd) }}" alt="gambar ttd">


            <button type="submit"
                class="text-white mt-3 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Update</button>
        </form>
    </div>
@endsection
