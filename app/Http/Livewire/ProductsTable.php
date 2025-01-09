<?php

namespace App\Http\Livewire;

use Laracasts\Flash\Flash;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Products;

class ProductsTable extends DataTableComponent
{
    protected $model = Products::class;

    protected $listeners = ['deleteRecord' => 'deleteRecord'];

    public function deleteRecord($id)
    {
        Products::find($id)->delete();
        Flash::success('Products deleted successfully.');
        $this->emit('refreshDatatable');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Product Category Id", "product_category_id")
                ->sortable()
                ->searchable(),
            Column::make("Product Name", "product_name")
                ->sortable()
                ->searchable(),
            Column::make("Image", "image")
                ->sortable()
                ->searchable(),
            Column::make("Decription", "decription")
                ->sortable()
                ->searchable(),
            Column::make("Gallery", "gallery")
                ->sortable()
                ->searchable(),
            Column::make("Price", "price")
                ->sortable()
                ->searchable(),
            Column::make("Publish", "publish")
                ->sortable()
                ->searchable(),
            Column::make("Actions", 'id')
                ->format(
                    fn($value, $row, Column $column) => view('common.livewire-tables.actions', [
                        'showUrl' => route('products.show', $row->id),
                        'editUrl' => route('products.edit', $row->id),
                        'recordId' => $row->id,
                    ])
                )
        ];
    }
}
