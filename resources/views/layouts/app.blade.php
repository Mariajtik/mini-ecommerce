<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mini E-commerce</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
    @livewireStyles
</head>
<body class="bg-gray-100">
    <div class="min-h-screen">
        <nav class="bg-white shadow p-4">
            <div class="container mx-auto flex justify-between">
                <a href="/" class="font-bold">Mini E-commerce</a>
                <div>
                    <a href="/cart" class="mr-4">Carrinho</a>
                    <a href="/login">Login</a>
                </div>
            </div>
        </nav>

        <main class="container mx-auto p-4">
            @yield('content')
        </main>
    </div>

    @livewireScripts
</body>
</html>
