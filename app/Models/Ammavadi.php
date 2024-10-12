<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ammavadi extends Model
{
    public $table = 'ammavadi';

    public $fillable = [
        'student_id',
        'mother_education',
        'mother_aadhar_no',
        'mother_phone_no',
        'mother_bank_no',
        'mother_bank_ifsc',
        'mother_bank_name',
        'father_education',
        'father_phone_no',
        'father_bank_no',
        'father_aadhar_no',
        'father_bank_name',
        'father_bank_ifsc',
        'past_amavadi_cfms_id',
        'past_amavadi_bank_no',
        'past_amavadi_bank_name',
        'boots_size',
        'android_phone',
        'basic_phone',
        'tv',
        'distance_from_house',
        'whatsap_no',
        'village_volunteer_name',
        'village_volunteer_no',
        'rashion_card',
        'aadhar_card',
        'cast',
        'dob_certificate',
        'mother_aadhar',
        'father_aadhar',
        'mother_bank_book',
        'other'
    ];

    protected $casts = [
        'mother_education' => 'string',
        'mother_aadhar_no' => 'string',
        'mother_phone_no' => 'string',
        'mother_bank_no' => 'string',
        'mother_bank_ifsc' => 'string',
        'mother_bank_name' => 'string',
        'father_education' => 'string',
        'father_phone_no' => 'string',
        'father_bank_no' => 'string',
        'father_aadhar_no' => 'string',
        'father_bank_name' => 'string',
        'father_bank_ifsc' => 'string',
        'past_amavadi_cfms_id' => 'string',
        'past_amavadi_bank_no' => 'string',
        'past_amavadi_bank_name' => 'string',
        'boots_size' => 'string',
        'android_phone' => 'boolean',
        'basic_phone' => 'boolean',
        'tv' => 'boolean',
        'distance_from_house' => 'string',
        'whatsap_no' => 'string',
        'village_volunteer_name' => 'string',
        'village_volunteer_no' => 'string',
        'rashion_card' => 'boolean',
        'aadhar_card' => 'boolean',
        'cast' => 'boolean',
        'dob_certificate' => 'boolean',
        'mother_aadhar' => 'boolean',
        'father_aadhar' => 'boolean',
        'mother_bank_book' => 'boolean',
        'other' => 'string'
    ];

    public static array $rules = [
        'student_id' => 'required',
        'mother_education' => 'nullable|string|max:255',
        'mother_aadhar_no' => 'nullable|string|max:255',
        'mother_phone_no' => 'nullable|string|max:255',
        'mother_bank_no' => 'nullable|string|max:255',
        'mother_bank_ifsc' => 'nullable|string|max:255',
        'mother_bank_name' => 'nullable|string|max:255',
        'father_education' => 'nullable|string|max:255',
        'father_phone_no' => 'nullable|string|max:255',
        'father_bank_no' => 'nullable|string|max:255',
        'father_aadhar_no' => 'nullable|string|max:255',
        'father_bank_name' => 'nullable|string|max:255',
        'father_bank_ifsc' => 'nullable|string|max:255',
        'past_amavadi_cfms_id' => 'nullable|string|max:255',
        'past_amavadi_bank_no' => 'nullable|string|max:255',
        'past_amavadi_bank_name' => 'nullable|string|max:255',
        'boots_size' => 'nullable|string|max:255',
        'android_phone' => 'nullable|boolean',
        'basic_phone' => 'nullable|boolean',
        'tv' => 'nullable|boolean',
        'distance_from_house' => 'nullable|string|max:255',
        'whatsap_no' => 'nullable|string|max:255',
        'village_volunteer_name' => 'nullable|string|max:255',
        'village_volunteer_no' => 'nullable|string|max:255',
        'rashion_card' => 'nullable|boolean',
        'aadhar_card' => 'nullable|boolean',
        'cast' => 'nullable|boolean',
        'dob_certificate' => 'nullable|boolean',
        'mother_aadhar' => 'nullable|boolean',
        'father_aadhar' => 'nullable|boolean',
        'mother_bank_book' => 'nullable|boolean',
        'other' => 'nullable|string|max:65535',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    public function student(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\Student::class, 'student_id');
    }
}
