@extends('layouts.admin')

@section('title', 'Categories')

@section('content')

<div class="bg-white p-6 rounded shadow">

    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Categories</h1>

        <a href="{{ route('admin.categories.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Add Category
        </a>
    </div>

    <table class="w-full border">
        <thead class="bg-gray-200">
            <tr>
                <th class="p-2 border">ID</th>
                <th class="p-2 border">Name</th>
                <th class="p-2 border">Products</th>
                <th class="p-2 border">Actions</th>
            </tr>
        </thead>

        <tbody>
            @forelse($categories as $category)
                <tr class="text-center">
                    <td class="p-2 border">{{ $category->id }}</td>
                    <td class="p-2 border">{{ $category->name }}</td>
                    <td class="p-2 border">{{ $category->products_count }}</td>
                    <td class="p-2 border">
                        <a href="#"
                           class="text-blue-600 hover:underline">Edit</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="p-4 text-gray-500">
                        No categories found
                    </td>
                </tr>
            @endforelse
        </tbody>

    </table>

</div>

@endsection