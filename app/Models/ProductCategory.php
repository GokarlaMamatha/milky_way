<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $table = 'product_categories';

    public $fillable = [
        'name',
        'image',
        'description',
        'type'
    ];

    protected $casts = [
        'name' => 'string',
        'image' => 'string',
        'description' => 'string',
        'type' => 'string'
    ];

    public static array $rules = [
        'name' => 'nullable|string|max:255',
        'image' => 'nullable|string|max:255',
        'description' => 'required|string|max:65535',
        'type' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Product::class, 'product_category_id');
    }
}
