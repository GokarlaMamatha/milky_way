<?php

namespace App\Repositories;

use App\Models\Products;
use App\Repositories\BaseRepository;

class ProductsRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'product_category_id',
        'product_name',
        'image',
        'decription',
        'gallery',
        'price',
        'publish'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Products::class;
    }
}
