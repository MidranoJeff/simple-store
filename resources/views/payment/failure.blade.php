@extends('layouts.app')

@section('title', 'Payment Failed')

@section('content')
<div class="max-w-2xl mx-auto py-12 text-center">

    <div class="text-6xl mb-4">❌</div>

    <h1 class="text-3xl font-bold text-red-600 mb-2">
        Payment Failed
    </h1>

    <p class="text-gray-600 mb-6">
        Something went wrong, {{ $order->name }}. Please try again.
    </p>

    <div class="bg-white border rounded-lg p-6 text-left mb-6">
        <p><strong>Order ID:</strong> #{{ $order->id }}</p>
        <p><strong>Total:</strong> ₱{{ number_format($order->total_amount, 2) }}</p>
        <p><strong>Status:</strong> {{ $order->payment_status }}</p>
    </div>

    <a href="{{ route('payment.pay', $order) }}"
       class="bg-red-600 text-white px-6 py-3 rounded-lg">
        Try Again
    </a>

</div>
@endsection