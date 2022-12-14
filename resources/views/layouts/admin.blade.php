<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/ckeditor.js', 'resources/css/ckeditor/custom.css'])

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

</head>

<body class="font-sans antialiased text-gray-600 dark:text-gray-200 bg-gray-50 dark:bg-gray-900">

    <x-admin.navbar />
    {{-- <x-admin.nav.index /> --}}

    <main class="py-24 md:ml-64 px-4 min-h-screen max-w-7xl">
        {{ $slot }}
    </main>


</body>

</html>
