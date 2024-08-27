<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'sku',
        'selling_price',
        'mrp',
        'stock',
        'quantity',
        'sort_order',
        'ads',
        'popular',
        'best_selling',
        'trending',
        'featured',
        'special_offer',
        'best_seller',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
