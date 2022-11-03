<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sebastian</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-700 text-white">
    <header class="fixed bg-gray-700 top-0 left-0 right-50 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="text-x1 font-black">Masakan Daerah</h1>
        </div>
        <a href="{{ route ('home') }}" class="text-lg mx-2 text-white hovert:text-pink-500 transition">Home</a>
    </header>

    <main>
        @yield('page-content')
    </main>

    <footer>
        <div class="containe mx-auto p-4">
            <p>&copy; Thank You </p>
        </div>
    </footer>
</body>
</html>