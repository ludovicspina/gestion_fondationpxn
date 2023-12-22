<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet"/>

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased bg-neutral-900 text-white">
<header>
    <div class="flex items-center justify-center gap-10 bg-neutral-800">
        <img src="{{ asset('logo.png') }}" alt="Logo Fondation PXN" class="h-20">
        <div class="flex gap-4 text-white text-xl">
            <a href="{{ route('home') }}">Accueil</a>
            <a href="{{ route('customers') }}">Clients</a>
            <a href="{{ route('invoices') }}">Factures</a>
            <a href="{{ route('tasks') }}">Tâches</a>
        </div>
    </div>
</header>
<main>
    @section('content')
    @show
</main>
<footer></footer>
</body>
</html>
