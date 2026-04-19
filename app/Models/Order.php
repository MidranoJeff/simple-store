<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

   protected $fillable = [
    'user_id',
    'name',
    'email',
    'phone',
    'address',
    'total_amount',
    'status',
    'invoice_url',
];

    // Order belongs to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Order has many items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}