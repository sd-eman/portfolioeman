<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'Portfolio-Eman' }}</title>
    @vite(['/resources/css/app.css', '/resources/js/app.js'])
</head>

<body class="bg-rose-950 min-h-screen flex flex-col">
    <x-header />

    <main class="max-w-[90%] lg:max-w-[1200px] mx-auto px-4">
        {{ $slot }}
    </main>

    <x-footer />
</body>

</html>
