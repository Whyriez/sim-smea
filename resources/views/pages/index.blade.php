@extends('layouts.app')
@section('title', 'Dashboard')
@section('dashboard', 'bg-gray-100 dark:bg-gray-700')
@section('active', 'hidden')

@section('content')
    <div class="w-full bg-white dark:bg-gray-900 rounded-lg shadow-lg p-6">
        <div class="flex justify-between mb-4">
            <h2 class="text-xl font-bold text-gray-900 dark:text-white">Hallo {{ Auth::User()->name }}</h2>
        </div>
    </div>
@endsection
