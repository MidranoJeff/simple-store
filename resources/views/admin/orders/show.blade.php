@extends('layouts.admin')

@section('title', 'Order Details')

@section('content')
<h1 class="text-2xl font-bold mb-4">Order #{{ $order->id }}</h1>

<p><strong>Customer:</strong> {{ $order->user->name ?? 'Guest' }}</p>
<p><strong>Status:</strong> {{ $order->status }}</p>

<hr class="my-4">

<form method="POST" action="/admin/orders/{{ $order->id }}">
    @csrf
    <input type="hidden" name="_method" value="PATCH">

    <select name="status" class="border p-2">
        <option value="pending">Pending</option>
        <option value="processing">Processing</option>
        <option value="shipped">Shipped</option>
        <option value="delivered">Delivered</option>
        <option value="cancelled">Cancelled</option>
    </select>

    <button type="submit">
        Update
    </button>
</form>
@endsection