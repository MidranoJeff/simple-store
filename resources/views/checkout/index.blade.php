@extends('layouts.app')

@section('title', 'Checkout')

@section('content')

<div class="max-w-6xl mx-auto py-10 px-4">

    <!-- HEADER -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Checkout</h1>
        <p class="text-gray-500">Complete your order details below</p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">

        <!-- LEFT: FORM -->
        <div class="lg:col-span-2">

            <form action="{{ route('checkout.store') }}" method="POST" class="space-y-6">

                @csrf

                <!-- Billing Details -->
                <div class="bg-white border rounded-xl p-6 shadow-sm">

                    <h2 class="text-lg font-bold mb-4">Billing Details</h2>

                    <div class="space-y-4">

                        <input type="text" name="name" placeholder="Full Name"
                               class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 outline-none">

                        <input type="email" name="email" placeholder="Email"
                               class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 outline-none">

                        <input type="text" name="phone" placeholder="Phone Number"
                               class="w-full border rounded-lg px-3 py-2 focus:ring-2 focus:ring-green-500 outline-none">

                        <textarea name="address" placeholder="Complete Address"
                                  class="w-full border rounded-lg px-3 py-2 h-28 focus:ring-2 focus:ring-green-500 outline-none"></textarea>

                    </div>

                </div>

                <!-- PLACE ORDER BUTTON -->
                <button type="submit"
                        class="w-full bg-green-600 hover:bg-green-700 text-black font-bold py-3 rounded-xl shadow-md transition">
                    Place Order
                </button>

            </form>

        </div>

        <!-- RIGHT: SUMMARY -->
        <div class="bg-white border rounded-xl p-6 h-fit shadow-sm">

            <h2 class="text-lg font-bold mb-4">Order Summary</h2>

            <div class="text-sm text-gray-600 space-y-2">

                <p class="flex justify-between">
                    <span>Items</span>
                    <span>{{ count(session('cart', [])) }}</span>
                </p>

                <p class="flex justify-between font-bold text-gray-900 border-t pt-3 mt-3">
                    <span>Total</span>
                    <span>
                        ₱{{ number_format(array_sum(array_column(session('cart', []), 'subtotal')), 2) }}
                    </span>
                </p>

            </div>

            <p class="text-xs text-gray-400 mt-4">
                You will receive confirmation after placing order.
            </p>

        </div>

    </div>

</div>

@endsection