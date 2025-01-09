<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    public $table = 'service_categories';

    public $fillable = [
        'title',
        'slug',
        'description'
    ];

    protected $casts = [
        'title' => 'string',
        'slug' => 'string'
    ];

    public static array $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'nullable|string|max:255',
        'description' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function services(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Service::class, 'service_category_id');
    }
}
