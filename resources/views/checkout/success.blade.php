@extends('layouts.app')

@section('title', 'Order Confirmed')

@section('content')

<div class="max-w-2xl mx-auto py-12 px-4 text-center">

    <!-- SUCCESS ICON -->
    <div class="text-6xl mb-4">🎉</div>

    <!-- SUCCESS MESSAGE -->
    <h1 class="text-3xl font-black text-gray-800 mb-2">
        Order Confirmed!
    </h1>

    <p class="text-gray-500 mb-8">
        Thank you <strong>{{ $order->name }}</strong>!
        Your order has been placed successfully.
    </p>

    <!-- ORDER CARD -->
    <div class="bg-white border rounded-xl shadow-sm p-6 text-left mb-6">

        <div class="grid grid-cols-2 gap-4 text-sm">

            <div>
                <p class="text-gray-400">Order ID</p>
                <p class="font-bold text-gray-800">#{{ $order->id }}</p>
            </div>

            <div>
                <p class="text-gray-400">Date</p>
                <p class="font-bold text-gray-800">
                    {{ $order->created_at->format('M j, Y') }}
                </p>
            </div>

            <div>
                <p class="text-gray-400">Status</p>
                <p class="font-bold text-orange-600">
                    {{ ucfirst($order->status) }}
                </p>
            </div>

            <div>
                <p class="text-gray-400">Total</p>
                <p class="font-bold text-gray-800">
                    ₱{{ number_format($order->total_amount, 2) }}
                </p>
            </div>

        </div>

    </div>

    <!-- ITEMS -->
    <div class="bg-white border rounded-xl shadow-sm text-left mb-6">

        <div class="p-4 border-b">
            <h2 class="font-semibold text-gray-800">Items Ordered</h2>
        </div>

        <div class="divide-y">
            @foreach($order->orderItems as $item)
                <div class="p-4 flex justify-between">
                    <div>
                        <p class="font-medium text-gray-800">
                            {{ $item->product->name ?? 'Product unavailable' }}
                        </p>
                        <p class="text-sm text-gray-400">
                            Qty: {{ $item->quantity }}
                        </p>
                    </div>

                    <p class="font-bold text-gray-800">
                        ₱{{ number_format($item->price * $item->quantity, 2) }}
                    </p>
                </div>
            @endforeach
        </div>

    </div>

    <!-- ACTIONS (FIXED - NO BROKEN ROUTES) -->
    <div class="flex flex-col sm:flex-row justify-center gap-4">

        <a href="{{ route('products.index') }}"
           class="bg-green-600 hover:bg-green-700 text-black px-6 py-3 rounded-lg font-bold transition">
            Continue Shopping
        </a>

        <a href="{{ route('dashboard') }}"
           class="text-gray-600 hover:text-gray-800 px-6 py-3 font-medium">
            Go to Dashboard
        </a>

    </div>

</div>

@endsection