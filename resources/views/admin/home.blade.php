@extends('layouts.app')

@section('content')
<div class="p-10">
    <h1 class="text-3xl font-bold">Welcome to Simple Store</h1>
    <p class="text-gray-600 mt-2">Your system is running correctly.</p>

    <a href="{{ route('products.index') }}" class="text-blue-600 mt-4 block">
        Go to Products
    </a>
</div>
@endsection