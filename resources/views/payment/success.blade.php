@extends('layouts.app')

@section('title', 'Order Confirmed')

@section('content')
<div class="max-w-2xl mx-auto py-12 px-4 text-center">

    <div class="text-6xl mb-4">🎉</div>

    <h1 class="text-3xl font-black text-gray-800 mb-2">
        Order Confirmed!
    </h1>

    <p class="text-gray-500 mb-8">
        Thank you <strong>{{ $order->name }}</strong>!
        Your order has been placed successfully.
    </p>

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
                <p class="font-bold text-green-600">
                    {{ ucfirst($order->payment_status) }}
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

    <div class="flex flex-col sm:flex-row justify-center gap-4">

        <a href="{{ route('products.index') }}"
           class="bg-green-600 hover:bg-green-700 text-black px-6 py-3 rounded-lg font-bold">
            Continue Shopping
        </a>

        <a href="{{ route('dashboard') }}"
           class="text-gray-600 hover:text-gray-800 px-6 py-3 font-medium">
            Go to Dashboard
        </a>

    </div>

</div>
@endsection