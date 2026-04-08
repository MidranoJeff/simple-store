@extends('layouts.admin')

@section('title', 'Order Details')

@section('content')
<h1 class="text-2xl font-bold mb-4">Order #{{ $order->id }}</h1>

<p><strong>Customer:</strong> {{ $order->user->name ?? 'Guest' }}</p>
<p><strong>Status:</strong> {{ $order->status }}</p>

<hr class="my-4">

<form method="POST" action="{{ route('admin.orders.update', $order) }}">
    @csrf
    @method('PUT')

    <select name="status" class="border p-2">
        <option value="pending">Pending</option>
        <option value="processing">Processing</option>
        <option value="shipped">Shipped</option>
        <option value="delivered">Delivered</option>
        <option value="cancelled">Cancelled</option>
    </select>

    <button class="bg-blue-600 text-white px-4 py-2 rounded ml-2">
        Update
    </button>
</form>
@endsection