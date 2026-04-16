@extends('layouts.admin')

@section('title', 'Products')

@section('content')

<div class="space-y-6">

    <div class="flex justify-between items-center">
        <h1 class="text-2xl font-bold text-gray-800">Products</h1>

        <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm">
            + Add Product
        </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow">

        <table class="w-full text-left">
            <thead>
                <tr class="border-b">
                    <th class="py-2">Name</th>
                    <th class="py-2">Price</th>
                    <th class="py-2">Stock</th>
                    <th class="py-2">Action</th>
                </tr>
            </thead>

            <tbody>
                <tr class="border-b">
                    <td class="py-2">T-Shirt</td>
                    <td>₱500</td>
                    <td>20</td>
                    <td>
                        <button class="text-blue-600">Edit</button>
                        <button class="text-red-600 ml-2">Delete</button>
                    </td>
                </tr>

                <tr class="border-b">
                    <td class="py-2">Shoes</td>
                    <td>₱1,500</td>
                    <td>10</td>
                    <td>
                        <button class="text-blue-600">Edit</button>
                        <button class="text-red-600 ml-2">Delete</button>
                    </td>
                </tr>
            </tbody>

        </table>

    </div>

</div>

@endsection