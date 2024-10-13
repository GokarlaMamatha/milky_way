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
            Column::make("Student Id", "student_id")
                ->sortable()
                ->searchable(),
           
            // Column::make("Mother Education", "mother_education")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Mother Aadhar No", "mother_aadhar_no")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Mother Phone No", "mother_phone_no")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Mother Bank No", "mother_bank_no")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Mother Bank Ifsc", "mother_bank_ifsc")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Mother Bank Name", "mother_bank_name")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Father Education", "father_education")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Father Phone No", "father_phone_no")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Father Bank No", "father_bank_no")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Father Aadhar No", "father_aadhar_no")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Father Bank Name", "father_bank_name")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Father Bank Ifsc", "father_bank_ifsc")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Past Amavadi Cfms Id", "past_amavadi_cfms_id")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Past Amavadi Bank No", "past_amavadi_bank_no")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Past Amavadi Bank Name", "past_amavadi_bank_name")
            //     ->sortable()
            //     ->searchable(),
            Column::make("Boots Size", "boots_size")
                ->sortable()
                ->searchable(),
            Column::make("Android Phone", "android_phone")
                ->sortable()
                ->searchable(),
            Column::make("Basic Phone", "basic_phone")
                ->sortable()
                ->searchable(),
            Column::make("Tv", "tv")
                ->sortable()
                ->searchable(),
            // Column::make("Distance From House", "distance_from_house")
            //     ->sortable()
            //     ->searchable(),
            Column::make("Whatsap No", "whatsap_no")
                ->sortable()
                ->searchable(),
            // Column::make("Village Volunteer Name", "village_volunteer_name")
            //     ->sortable()
            //     ->searchable(),
            // Column::make("Village Volunteer No", "village_volunteer_no")
            //     ->sortable()
            //     ->searchable(),
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
