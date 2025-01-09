<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public $table = 'products';

    public $fillable = [
        'product_category_id',
        'product_name',
        'image',
        'decription',
        'gallery',
        'price',
        'publish'
    ];

    protected $casts = [
        'product_name' => 'string',
        'image' => 'string',
        'decription' => 'string'
    ];

    public static array $rules = [
        'product_category_id' => 'required',
        'product_name' => 'required|string|max:255',
        'image' => 'required|string|max:255',
        'decription' => 'required|string|max:65535',
        'gallery' => 'required',
        'price' => 'required',
        'publish' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function productCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\ProductCategory::class, 'product_category_id');
    }
}
