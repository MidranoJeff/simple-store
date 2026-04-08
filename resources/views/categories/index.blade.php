@extends('layouts.admin')

@section('title', 'Categories')

@section('content')

<div class="space-y-6">

    <div class="bg-white p-6 rounded-xl shadow">
        <h1 class="text-2xl font-bold">Categories</h1>
        <a class="text-blue-600">+ Add Category</a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">
        <table class="w-full">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Products</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->products_count }}</td>
                        <td>Edit</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection