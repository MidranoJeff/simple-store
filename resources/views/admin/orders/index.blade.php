@extends('layouts.admin')

@section('title', 'Orders')

@section('content')
<h1 class="text-2xl font-bold mb-4">Orders</h1>

<table class="w-full bg-white shadow rounded">
    <thead>
        <tr class="border-b">
            <th class="p-3 text-left">ID</th>
            <th class="p-3 text-left">Customer</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Date</th>
            <th class="p-3 text-left">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($orders as $order)
        <tr class="border-b">
            <td class="p-3">#{{ $order->id }}</td>
            <td class="p-3">{{ $order->user->name ?? 'Guest' }}</td>
            <td class="p-3">{{ $order->status }}</td>
            <td class="p-3">{{ $order->created_at->format('Y-m-d') }}</td>
            <td class="p-3">
                <a href="{{ route('admin.orders.show', $order) }}" class="text-blue-600">
                    View
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="mt-4">
    {{ $orders->links() }}
</div>
@endsection