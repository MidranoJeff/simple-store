@extends('layouts.admin')

@section('content')

<h1 class="mb-4">Admin Dashboard</h1>

<!-- STATS CARDS -->
<div class="row mb-4">

    <div class="col-md-3">
        <div class="card bg-primary text-white p-3">
            <h5>Total Orders</h5>
            <h3>{{ $totalOrders }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-success text-white p-3">
            <h5>Total Products</h5>
            <h3>{{ $totalProducts }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-warning text-dark p-3">
            <h5>Total Customers</h5>
            <h3>{{ $totalUsers }}</h3>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card bg-info text-white p-3">
            <h5>Total Categories</h5>
            <h3>{{ $totalCategories }}</h3>
        </div>
    </div>

</div>

<!-- TOTAL REVENUE -->
<div class="card mb-4 p-3">
    <h4>Total Revenue</h4>
    <h2>₱ {{ number_format($totalRevenue, 2) }}</h2>
</div>

<!-- ORDERS BY STATUS -->
<div class="card mb-4 p-3">
    <h4>Orders by Status</h4>
    <ul>
        @foreach($ordersByStatus as $status => $count)
            <li>{{ ucfirst($status) }}: {{ $count }}</li>
        @endforeach
    </ul>
</div>

<!-- RECENT ORDERS -->
<div class="card mb-4 p-3">
    <h4>Recent Orders</h4>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Total</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach($recentOrders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user->name ?? 'N/A' }}</td>
                <td>₱ {{ number_format($order->total_amount, 2) }}</td>
                <td>{{ $order->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

<!-- LOW STOCK PRODUCTS -->
<div class="card p-3">
    <h4>Low Stock Products</h4>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lowStockProducts as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td class="text-danger">{{ $product->stock }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

@endsection