<div class="space-y-6">

    <!-- Header -->
    <div class="bg-gradient-to-r from-gray-900 to-gray-700 text-white p-6 rounded-xl shadow">
        <h1 class="text-3xl font-bold">Dashboard</h1>
        <p class="text-gray-300">Welcome to Simple Store Admin Panel</p>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">

        <div class="bg-white p-5 rounded-xl shadow">
            <p class="text-gray-500 text-sm">Total Orders</p>
            <h2 class="text-2xl font-bold">{{ $totalOrders }}</h2>
        </div>

        <div class="bg-white p-5 rounded-xl shadow">
            <p class="text-gray-500 text-sm">Products</p>
            <h2 class="text-2xl font-bold">{{ $totalProducts }}</h2>
        </div>

        <div class="bg-white p-5 rounded-xl shadow">
            <p class="text-gray-500 text-sm">Customers</p>
            <h2 class="text-2xl font-bold">{{ $totalUsers }}</h2>
        </div>

        <div class="bg-white p-5 rounded-xl shadow">
            <p class="text-gray-500 text-sm">Categories</p>
            <h2 class="text-2xl font-bold">{{ $totalCategories }}</h2>
        </div>

    </div>

</div>