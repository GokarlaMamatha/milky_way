<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $table = 'product_categories';

    public $fillable = [
        'name',
        'display_name',
        'image',
        'image_alt_text',
        'icon',
        'description',
        'type',
        'sort'
    ];

    protected $casts = [
        'name' => 'string',
        'display_name' => 'string',
        'image' => 'string',
        'image_alt_text' => 'string',
        'icon' => 'string',
        'description' => 'string',
        'type' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'display_name' => 'nullable|string|max:255',
        'image' => 'nullable|string|max:255',
        'image_alt_text' => 'nullable|string|max:255',
        'icon' => 'nullable|string|max:255',
        'description' => 'nullable|string|max:65535',
        'type' => 'nullable|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'sort' => 'nullable'
    ];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Product::class, 'product_category_id');
    }
}
