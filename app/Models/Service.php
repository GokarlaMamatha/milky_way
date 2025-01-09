<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $table = 'services';

    public $fillable = [
        'service_category_id',
        'title',
        'slug',
        'sub_title',
        'image',
        'image_alt_text',
        'short_description',
        'description',
        'custom_url',
        'gallery',
        'icon',
        'publish',
        'sort'
    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'sub_title' => 'string',
        'image' => 'string',
        'image_alt_text' => 'string',
        'short_description' => 'string',
        'description' => 'string',
        'custom_url' => 'string',
        'gallery' => 'string',
        'icon' => 'string',
        'publish' => 'boolean'
    ];

    public static array $rules = [
        'service_category_id' => 'required',
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'sub_title' => 'nullable|string|max:255',
        'image' => 'nullable|string|max:255',
        'image_alt_text' => 'nullable|string|max:255',
        'short_description' => 'nullable|string|max:65535',
        'description' => 'nullable|string|max:65535',
        'custom_url' => 'nullable|string|max:255',
        'gallery' => 'nullable|string|max:65535',
        'icon' => 'nullable|string|max:255',
        'publish' => 'required|boolean',
        'sort' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function serviceCategory(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\ServiceCategory::class, 'service_category_id');
    }
}
