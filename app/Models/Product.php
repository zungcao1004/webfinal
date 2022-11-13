<?php

namespace App\Models;

use App\Models\ProductImage;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'brand',
        'small_description',
        'description',
        'price',
        'old_price',
        'quantity',
        'treding',
        'status',
        'meta_title',
        'meta_keyword',
        'meta_description',
    ];

    public function productImages()
    {
        return $this->hasMany(ProductImage::class, 'product_id', 'id');
    }
}