<?php

namespace App\Repositories;

use App\Models\ServiceCategory;
use App\Repositories\BaseRepository;

class ServiceCategoryRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'title',
        'slug',
        'description'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return ServiceCategory::class;
    }
}
