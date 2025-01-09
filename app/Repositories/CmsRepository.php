<?php

namespace App\Repositories;

use App\Models\Cms;
use App\Repositories\BaseRepository;

class CmsRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Cms::class;
    }
}
