<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('logo.png') }}" type="image/x-icon">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    @include('partials.header')
    @include('partials.sidebar')

    <main class="p-8 sm:ml-64 dark:bg-gray-900 dark:text-white">
        <div class="min-h-screen mt-8">
            @yield('content')
        </div>
    </main>


    @livewireScripts
</body>

</html>
