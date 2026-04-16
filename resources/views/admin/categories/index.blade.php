@extends('layouts.admin')

@section('title', 'Categories')

@section('content')

<div class="space-y-6">

    <!-- ADD CATEGORY FORM -->
    <div class="bg-white p-6 rounded-xl shadow">
        <h2 class="text-lg font-semibold mb-4">Add Category</h2>

        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <div class="flex gap-3">
                <input type="text" name="name"
                    placeholder="Category name"
                    class="border p-2 rounded w-full"
                    required>

                <button type="submit"
                    class="bg-blue-600 text-white px-4 py-2 rounded">
                    Add
                </button>
            </div>
        </form>
    </div>

    <!-- CATEGORY TABLE -->
    <div class="bg-white p-6 rounded-xl shadow">

        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="py-2">ID</th>
                    <th class="py-2">Name</th>
                    <th class="py-2">Created</th>
                </tr>
            </thead>

            <tbody>
                @forelse($categories as $category)
                    <tr class="border-b">
                        <td class="py-2">{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at->format('Y-m-d') }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center py-4 text-gray-500">
                            No categories found
                        </td>
                    </tr>
                @endforelse
            </tbody>

        </table>

    </div>

</div>

@endsection