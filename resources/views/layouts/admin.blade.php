<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gray-900 text-white fixed h-full">
        <div class="p-6 border-b border-gray-700">
            <h1 class="text-xl font-bold">Simple Store</h1>
            <p class="text-gray-400 text-sm">Admin Panel</p>
        </div>

        <nav class="p-4 space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="block p-2 hover:bg-gray-700 rounded">Dashboard</a>
            <a href="{{ route('admin.orders.index') }}" class="block p-2 hover:bg-gray-700 rounded">Orders</a>
            <a href="{{ route('admin.products.index') }}" class="block p-2 hover:bg-gray-700 rounded">Products</a>
            <a href="{{ route('admin.categories.index') }}" class="block p-2 hover:bg-gray-700 rounded">Categories</a>
        </nav>
    </aside>

    <!-- MAIN CONTENT -->
    <main class="flex-1 ml-64 p-8">

        @yield('content')

    </main>

</div>

</body>
</html>