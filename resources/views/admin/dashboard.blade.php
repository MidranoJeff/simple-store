@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

<div class="space-y-6">

    <!-- Header -->
    <div class="bg-gradient-to-r from-gray-900 to-gray-700 text-white p-6 rounded-xl shadow">
        <h1 class="text-3xl font-bold tracking-wide">
            Dashboard
        </h1>
        <p class="text-gray-300 mt-1">
            Welcome to Simple Store Admin Panel
        </p>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <p class="text-gray-500 text-sm">Total Orders</p>
            <h2 class="text-3xl font-bold text-gray-800 mt-2">120</h2>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <p class="text-gray-500 text-sm">Pending Orders</p>
            <h2 class="text-3xl font-bold text-yellow-600 mt-2">15</h2>
        </div>

        <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
            <p class="text-gray-500 text-sm">Delivered Orders</p>
            <h2 class="text-3xl font-bold text-green-600 mt-2">80</h2>
        </div>

    </div>

    <!-- Info Section -->
    <div class="bg-white p-6 rounded-xl shadow border border-gray-100">

        <h2 class="text-xl font-semibold text-gray-800">
            Quick Overview
        </h2>

        <p class="text-gray-600 mt-2 leading-relaxed">
            Manage your products, orders, and categories from this admin dashboard.
            Use the sidebar to navigate between sections.
        </p>

    </div>

</div>

@endsection