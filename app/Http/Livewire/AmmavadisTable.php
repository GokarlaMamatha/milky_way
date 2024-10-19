<?php

namespace App\Http\Livewire;

use Laracasts\Flash\Flash;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Ammavadi;

class AmmavadisTable extends DataTableComponent
{
    protected $model = Ammavadi::class;

    protected $listeners = ['deleteRecord' => 'deleteRecord'];

    public function deleteRecord($id)
    {
        Ammavadi::find($id)->delete();
        Flash::success('Ammavadi deleted successfully.');
        $this->emit('refreshDatatable');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Student Name", "student.name")
                ->sortable()
                ->searchable(),
           
            
            Column::make("Boots Size", "boots_size")
                ->sortable()
                ->searchable(),
            
            Column::make("Whatsap No", "whatsap_no")
                ->sortable()
                ->searchable(),
           
            Column::make("Rashion Card", "rashion_card")
                ->sortable()
                ->searchable(),
            Column::make("Aadhar Card", "aadhar_card")
                ->sortable()
                ->searchable(),
            Column::make("Cast", "cast")
                ->sortable()
                ->searchable(),
            Column::make("Dob Certificate", "dob_certificate")
                ->sortable()
                ->searchable(),
            Column::make("Mother Aadhar", "mother_aadhar")
                ->sortable()
                ->searchable(),
            Column::make("Father Aadhar", "father_aadhar")
                ->sortable()
                ->searchable(),
            Column::make("Mother Bank Book", "mother_bank_book")
                ->sortable()
                ->searchable(),
            // Column::make("Other", "other")
            //     ->sortable()
            //     ->searchable(),
            Column::make("Actions", 'id')
                ->format(
                    fn($value, $row, Column $column) => view('common.livewire-tables.actions', [
                        'showUrl' => route('ammavadis.show', $row->id),
                        'editUrl' => route('ammavadis.edit', $row->id),
                        'recordId' => $row->id,
                    ])
                )
        ];
    }
}
