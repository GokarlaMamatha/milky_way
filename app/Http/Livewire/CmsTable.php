<?php

namespace App\Http\Livewire;

use Laracasts\Flash\Flash;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Cms;

class CmsTable extends DataTableComponent
{
    protected $model = Cms::class;

    protected $listeners = ['deleteRecord' => 'deleteRecord'];

    public function deleteRecord($id)
    {
        Cms::find($id)->delete();
        Flash::success('Cms deleted successfully.');
        $this->emit('refreshDatatable');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Title", "title")
                ->sortable()
                ->searchable(),
            Column::make("Slug", "slug")
                ->sortable()
                ->searchable(),
            Column::make("Parent", "parent")
                ->sortable()
                ->searchable(),
            Column::make("Type", "type")
                ->sortable()
                ->searchable(),
            Column::make("Custom Url", "custom_url")
                ->sortable()
                ->searchable(),
            Column::make("Banner Image", "banner_image")
                ->sortable()
                ->searchable(),
            Column::make("Banner Title", "banner_title")
                ->sortable()
                ->searchable(),
            Column::make("Banner Tagline", "banner_tagline")
                ->sortable()
                ->searchable(),
            Column::make("Banner Description", "banner_description")
                ->sortable()
                ->searchable(),
            Column::make("Content", "content")
                ->sortable()
                ->searchable(),
            Column::make("Gallery", "gallery")
                ->sortable()
                ->searchable(),
            Column::make("Main Menu", "main_menu")
                ->sortable()
                ->searchable(),
            Column::make("Top Menu", "top_menu")
                ->sortable()
                ->searchable(),
            Column::make("Side Menu", "side_menu")
                ->sortable()
                ->searchable(),
            Column::make("Footer Menu", "footer_menu")
                ->sortable()
                ->searchable(),
            Column::make("Publish", "publish")
                ->sortable()
                ->searchable(),
            Column::make("Actions", 'id')
                ->format(
                    fn($value, $row, Column $column) => view('common.livewire-tables.actions', [
                        'showUrl' => route('cms.show', $row->id),
                        'editUrl' => route('cms.edit', $row->id),
                        'recordId' => $row->id,
                    ])
                )
        ];
    }
}
