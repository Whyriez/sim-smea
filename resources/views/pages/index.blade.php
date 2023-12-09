@extends('layouts.app')
@section('title', 'Dashboard')
@section('dashboard', 'bg-gray-300 dark:bg-gray-700')
@section('activeSuket', 'hidden')
@section('activeSuketGuru', 'hidden')
@section('activeSuketSiswa', 'hidden')

@section('content')
    <div class="w-full bg-white dark:bg-gray-900 rounded-lg shadow-lg p-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">Selamat Datang, {{ $user->name }}</h2>
        </div>

        @if ($user->role == 1 || $user->role == 2)
            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
                <div
                    class=" p-4 dark:bg-blue-700 text-white bg-blue-400 border border-gray-200 rounded-lg shadow-lg sm:flex dark:border-gray-700 sm:p-6">
                    <div class="w-full text-center">
                        <h3 class="text-base font-bold text-black dark:text-white">Surat Yang Belum Diajukan TTD</h3>
                        <span
                            class="text-2xl font-bold leading-none text-black sm:text-3xl dark:text-white">{{ $belumTTD }}</span>
                    </div>
                </div>
                <div
                    class=" p-4  bg-green-400 dark:bg-green-700 border border-gray-200 rounded-lg shadow-lg sm:flex dark:border-gray-700 sm:p-6">
                    <div class="w-full text-center">
                        <h3 class="text-base font-bold text-black dark:text-white">Surat Yang Sudah Di
                            Tanda
                            Tangan</h3>
                        <span
                            class="text-2xl font-bold leading-none text-black sm:text-3xl dark:text-white">{{ $sudahTTD }}</span>
                    </div>
                </div>
                <div
                    class=" p-4  bg-yellow-400 border border-gray-200 rounded-lg shadow-lg sm:flex dark:border-gray-700 sm:p-6 dark:bg-yellow-700">
                    <div class="w-full text-center">
                        <h3 class="text-base font-bold text-black dark:text-white">Surat Yang Masih
                            Diajukan
                            Tanda Tangan</h3>
                        <span
                            class="text-2xl font-bold leading-none text-gray-900 sm:text-3xl dark:text-white">{{ $count }}</span>
                    </div>
                </div>
            </div>
        @else
            <div class="grid w-full grid-cols-1 gap-4 mt-4 xl:grid-cols-2 2xl:grid-cols-3">
                <div
                    class=" p-4  dark:bg-blue-700 text-white bg-blue-400 border border-gray-200 rounded-lg shadow-lg sm:flex dark:border-gray-700 sm:p-6">
                    <div class="w-full text-center">
                        <h3 class="text-base font-bold text-black dark:text-white">Total Surat Masuk</h3>
                        <span
                            class="text-2xl font-bold leading-none text-black sm:text-3xl dark:text-white">{{ $totMasuk }}</span>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
