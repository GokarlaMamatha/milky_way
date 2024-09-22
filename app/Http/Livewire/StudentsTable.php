<?php

namespace App\Http\Livewire;

use Laracasts\Flash\Flash;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Student;

class StudentsTable extends DataTableComponent
{
    protected $model = Student::class;

    protected $listeners = ['deleteRecord' => 'deleteRecord'];

    public function deleteRecord($id)
    {
        Student::find($id)->delete();
        Flash::success('Student deleted successfully.');
        $this->emit('refreshDatatable');
    }

    public function configure(): void
    {
        $this->setPrimaryKey('id');
    }

    public function columns(): array
    {
        return [
            Column::make("Name", "name")
                ->sortable()
                ->searchable(),
            Column::make("Class", "class")
                ->sortable()
                ->searchable(),
            Column::make("Section", "section")
                ->sortable()
                ->searchable(),
            Column::make("Roll No", "roll_no")
                ->sortable()
                ->searchable(),
            Column::make("Actions", 'id')
                ->format(
                    fn($value, $row, Column $column) => view('common.livewire-tables.actions', [
                        'showUrl' => route('students.show', $row->id),
                        'editUrl' => route('students.edit', $row->id),
                        'recordId' => $row->id,
                    ])
                )
        ];
    }
}
