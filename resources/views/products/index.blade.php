@extends('layouts.admin')

@section('title', 'Products')

@section('content')

<div class="space-y-6">

    <!-- Header -->
    <div class="bg-white p-6 rounded-xl shadow flex justify-between items-center">
        <div>
            <h1 class="text-2xl font-bold">Products</h1>
            <p class="text-gray-500">Manage all products</p>
        </div>

        <a href="{{ route('admin.products.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Add Product
        </a>
    </div>

    <!-- Table -->
    <div class="bg-white p-6 rounded-xl shadow overflow-x-auto">

        <table class="w-full border-collapse">

            <thead>
                <tr class="bg-gray-100 text-left">
                    <th class="p-3 border">ID</th>
                    <th class="p-3 border">Name</th>
                    <th class="p-3 border">Category</th>
                    <th class="p-3 border">Price</th>
                    <th class="p-3 border">Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse($products as $product)
                    <tr class="border-t">
                        <td class="p-3 border">{{ $product->id }}</td>
                        <td class="p-3 border">{{ $product->name }}</td>
                        <td class="p-3 border">{{ $product->category->name ?? 'N/A' }}</td>
                        <td class="p-3 border">{{ $product->price }}</td>
                        <td class="p-3 border">
                            <a href="{{ route('admin.products.edit', $product->id) }}"
                               class="text-blue-600 hover:underline">
                                Edit
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="p-4 text-center text-gray-500">
                            No products found
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>

@endsection