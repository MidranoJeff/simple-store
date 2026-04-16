@extends('layouts.app')

@section('title', 'Cart')

@section('content')

<div class="max-w-4xl mx-auto py-10">

    <h1 class="text-3xl font-bold mb-6">Your Cart</h1>

    {{-- EMPTY CART --}}
    @if(empty($cart))

        <div class="bg-gray-100 p-6 rounded text-center">
            Your cart is empty
        </div>

    @else

        {{-- CART ITEMS --}}
        <div class="space-y-4">

            @foreach($cart as $id => $item)

                <div class="border rounded-lg p-4 flex justify-between items-center">

                    <div>
                        <h2 class="font-bold text-lg">{{ $item['name'] }}</h2>

                        <p class="text-gray-500">
                            Qty: {{ $item['quantity'] }}
                        </p>
                    </div>

                    <div class="text-right">
                        <p class="font-bold">
                            ₱{{ number_format($item['subtotal'], 2) }}
                        </p>

                        {{-- REMOVE ITEM --}}
                        <form action="{{ route('cart.remove', $id) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')

                            <button class="text-red-600 text-sm hover:underline">
                                Remove
                            </button>
                        </form>

                    </div>

                </div>

            @endforeach

        </div>

        {{-- TOTAL + CHECKOUT --}}
        <div class="mt-6 border-t pt-6">

            <div class="flex justify-between text-xl font-bold mb-4">
                <span>Total</span>
                <span>₱{{ number_format($total, 2) }}</span>
            </div>

            <a href="{{ route('checkout.index') }}"
               class="block text-center bg-green-600 hover:bg-green-700 text-black py-3 rounded-lg font-bold">
                Proceed to Checkout
            </a>

        </div>

    @endif

</div>

@endsection