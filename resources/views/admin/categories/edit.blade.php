@extends('layouts.admin')

@section('title', 'Edit Category')

@section('content')

<div class="max-w-2xl mx-auto space-y-6">

    <!-- Header -->
    <div class="bg-white p-6 rounded-xl shadow">
        <h1 class="text-2xl font-bold text-gray-800">
            Edit Category
        </h1>
        <p class="text-gray-500">
            Update category details below
        </p>
    </div>

    <!-- Form -->
    <div class="bg-white p-6 rounded-xl shadow">

        <form action="{{ route('admin.categories.update', $category->id) }}" method="POST" class="space-y-4">

            @csrf
            @method('PUT')

            <!-- Name -->
            <div>
                <label class="block text-gray-700 font-medium mb-1">Category Name</label>
                <input type="text"
                       name="name"
                       value="{{ old('name', $category->name) }}"
                       class="w-full border rounded-lg p-3 focus:ring focus:ring-blue-200"
                       required>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between items-center">

                <a href="{{ route('admin.categories.index') }}"
                   class="text-gray-600 hover:underline">
                    Cancel
                </a>

                <button type="submit"
                        class="bg-blue-600 text-white px-5 py-2 rounded-lg hover:bg-blue-700">
                    Update Category
                </button>

            </div>

        </form>

    </div>

</div>

@endsection