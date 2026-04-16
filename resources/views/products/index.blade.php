@extends('layouts.app')

@section('title', 'Products')

@section('content')

<div style="max-width:1100px;margin:auto;padding:20px;">

    <!-- HEADER -->
    <div style="margin-bottom:20px;">
        <h1 style="font-size:28px;font-weight:bold;">Products</h1>
        <p style="color:#666;">Browse available items</p>
    </div>

    <!-- GRID -->
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(250px,1fr));gap:20px;">

        @foreach($products as $product)

            <div style="border:1px solid #ddd;border-radius:12px;overflow:hidden;background:#fff;">

                <!-- PRODUCT INFO -->
                <div style="padding:15px;">

                    <h2 style="font-size:18px;font-weight:bold;">
                        {{ $product->name }}
                    </h2>

                    <p style="color:green;font-size:20px;font-weight:bold;margin-top:5px;">
                        ₱{{ number_format($product->price, 2) }}
                    </p>

                    <p style="color:#666;margin-top:5px;">
                        Stock: {{ $product->stock }}
                    </p>

                </div>

                <!-- BUTTON AREA -->
                <div style="padding:15px;background:#f9f9f9;border-top:1px solid #eee;">

                    <form action="{{ route('cart.add', $product->id) }}" method="POST">

                        @csrf

                        <input type="number"
                               name="quantity"
                               value="1"
                               min="1"
                               style="width:100%;padding:8px;border:1px solid #ccc;margin-bottom:8px;display:block;">

                        <button type="submit"
                                style="width:100%;background:#16a34a;color:white;padding:10px;border:none;border-radius:6px;font-weight:bold;display:block;">
                            Add to Cart
                        </button>

                    </form>

                </div>

            </div>

        @endforeach

    </div>

</div>

@endsection 