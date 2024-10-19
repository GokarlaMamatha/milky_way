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
        'roll_no',
        'gender',
        'medium',
        'doa',
        'adminssion_no',
        'photo',
        'mother_name',
        'father_name',
        'mother_occupation',
        'father_occupation',
        'phone',
        'religion',
        'cast',
        'address',
        'house_no',
        'village',
        'mandal',
        'city',
        'zipcode',
        'ps_name',
        'ps_address_code',
        'ps_village',
        'ps_mandal',
        'ps_city',
        'ps_class',
        'ps_completion_year',
        'ps_registration_no',
        'moles',
        'dob',
        'aadhar_no',
        'ration_card_no'

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
