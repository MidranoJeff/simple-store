<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'price',
        'stock',
        'image',
    ];

    // A product belongs to one category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // A product can have many order items
    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}