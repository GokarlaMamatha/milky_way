<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    public $table = 'cms';

    public $fillable = [
        'title',
        'slug',
        'parent',
        'type',
        'custom_url',
        'banner_image',
        'banner_title',
        'banner_tagline',
        'banner_description',
        'content',
        'gallery',
        'main_menu',
        'top_menu',
        'side_menu',
        'footer_menu',
        'publish'
    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string',
        'parent' => 'string',
        'custom_url' => 'string',
        'banner_image' => 'string',
        'banner_title' => 'string',
        'banner_tagline' => 'string',
        'banner_description' => 'string',
        'content' => 'string',
        'gallery' => 'array',
        'main_menu' => 'boolean',
        'top_menu' => 'boolean',
        'side_menu' => 'boolean',
        'footer_menu' => 'boolean',
        'publish' => 'boolean'
    ];

    public static array $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'parent' => 'nullable|string|max:255',
        'type' => 'nullable',
        'custom_url' => 'nullable|string|max:255',
        'banner_image' => 'nullable|max:255',
        'banner_title' => 'nullable|string|max:255',
        'banner_tagline' => 'nullable|string|max:255',
        'banner_description' => 'nullable|string|max:65535',
        'content' => 'nullable|string|max:65535',
       // 'gallery' => 'nullable|string|max:65535',
        'main_menu' => 'nullable|boolean',
        'top_menu' => 'nullable|boolean',
        'side_menu' => 'nullable|boolean',
        'footer_menu' => 'nullable|boolean',
        'publish' => 'nullable|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
