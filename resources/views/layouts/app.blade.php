<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portal de Notícias</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://cdn-uicons.flaticon.com">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/3.0.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    @include('partials.navbar')

    <main class="container mx-auto pt-24 pb-10 flex-1">
        <div class="container mx-auto mt-4">

            @if (session('success'))
                <x-alert type="success" :message="session('success')" />
            @endif

            @if (session('error'))
                <x-alert type="error" :message="session('error')" />
            @endif

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <x-alert type="error" :message="$error" />
                @endforeach
            @endif
        </div>

        @yield('content')
    </main>

    @include('partials.footer')
</body>

</html>
