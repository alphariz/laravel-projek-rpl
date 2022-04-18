<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="flex flex-col min-h-screen ">
    <header class="bg-white dark:bg-gray-800">
        <x-navbar></x-navbar>
    </header>

    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="relative bottom-0 w-full bg-white dark:bg-gray-800">
        <x-footer></x-footer>
    </footer>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
