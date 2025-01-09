<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\BaseRepository;

class ServiceRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Service::class;
    }
}
