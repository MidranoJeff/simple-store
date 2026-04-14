@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')

<div class="bg-white p-6 rounded-xl shadow">

    <h1 class="text-xl font-bold mb-4">Edit Product</h1>

    <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name -->
        <input type="text" name="name"
               value="{{ $product->name }}"
               class="border p-2 w-full mb-3"
               placeholder="Product Name">

        <!-- Category -->
        <select name="category_id" class="border p-2 w-full mb-3">
            @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <!-- Price -->
        <input type="number" name="price"
               value="{{ $product->price }}"
               class="border p-2 w-full mb-3"
               placeholder="Price">

        <!-- Stock -->
        <input type="number" name="stock"
               value="{{ $product->stock }}"
               class="border p-2 w-full mb-3"
               placeholder="Stock">

        <!-- Description -->
        <textarea name="description"
                  class="border p-2 w-full mb-3"
                  placeholder="Description">{{ $product->description }}</textarea>

        <!-- Image -->
        <input type="file" name="image" class="border p-2 w-full mb-3">

        @if($product->image)
            <img src="{{ asset('storage/' . $product->image) }}"
                 class="w-32 mb-3">
        @endif

        <button class="bg-blue-600 text-white px-4 py-2 rounded">
            Update Product
        </button>

    </form>

</div>

@endsection