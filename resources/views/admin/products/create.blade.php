@extends('layouts.admin')

@section('content')

<div class="max-w-2xl mx-auto bg-white p-6 rounded-xl shadow-md">
    
    <h1 class="text-2xl font-bold mb-6 text-gray-800">Add Product</h1>

    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf

        <!-- NAME -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
            <input type="text" name="name"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                required>
        </div>

        <!-- CATEGORY -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
            <select name="category_id"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- PRICE -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Price</label>
            <input type="number" name="price" step="0.01"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                required>
        </div>

        <!-- STOCK -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Stock</label>
            <input type="number" name="stock"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                required>
        </div>

        <!-- IMAGE -->
        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1">Image</label>
            <input type="file" name="image"
                class="w-full border border-gray-300 rounded-lg px-3 py-2 bg-gray-50">
        </div>

        <!-- BUTTON -->
        <div class="pt-4">
            <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition">
                Save Product
            </button>
        </div>

    </form>

</div>

@endsection