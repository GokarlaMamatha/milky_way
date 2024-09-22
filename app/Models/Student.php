<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $table = 'students';

    public $fillable = [
        'name',
        'class',
        'section',
        'roll_no'
    ];

    protected $casts = [
        'name' => 'string',
        'class' => 'string',
        'section' => 'string',
        'roll_no' => 'string'
    ];

    public static array $rules = [
        'name' => 'required|string|max:255',
        'class' => 'required|string|max:255',
        'section' => 'required|string|max:255',
        'roll_no' => 'required|string|max:255',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
