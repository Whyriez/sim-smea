<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <base href="{{ \URL::to('/') }}">

    <link rel="icon" type="image/x-icon" href="{{ asset('faviconnsss.ico') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    {{-- @vite('resources/css/app.css') --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/app.js') }}">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body class="bg-white dark:bg-gray-900">

    @include('components.navbar')
    <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">
        @include('components.sidebar')
        <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
            <main>
                <div class="px-4 pt-6">
                    @yield('content')
                    <div class="flex justify-center">
                        @include('components.footer')
                    </div>
                </div>
            </main>
        </div>
    </div>


    {{-- <div modal-backdrop="" class="bg-gray-900 bg-opacity-50 dark:bg-opacity-80 fixed inset-0 z-40"></div> --}}

    <script>
        const sidebarBackdrop = document.getElementById('sidebarBackdrop');
        const navbarDropdown = document.getElementById('navbar-dropdown');
        document.getElementById('toggle-nav').addEventListener('click', function() {
            navbarDropdown.classList.toggle('hidden');
            sidebarBackdrop.classList.toggle('hidden');
        });
        document.getElementById('toggleSidebarMobileSearch').addEventListener('click', function() {
            navbarDropdown.classList.toggle('hidden');
            sidebarBackdrop.classList.toggle('hidden');
        });
        document.getElementById('sidebarBackdrop').addEventListener('click', function() {
            navbarDropdown.classList.toggle('hidden');
            sidebarBackdrop.classList.toggle('hidden');
        });
        // document.getElementById('print-window').addEventListener('click', function() {
        //     window.print();
        // });
    </script>

    <script src="{{ asset('assets/js/flowbite.js') }}"></script>
</body>

</html>
