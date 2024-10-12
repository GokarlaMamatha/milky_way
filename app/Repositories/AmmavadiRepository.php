<?php

namespace App\Repositories;

use App\Models\Ammavadi;
use App\Repositories\BaseRepository;

class AmmavadiRepository extends BaseRepository
{
    protected $fieldSearchable = [
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

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Ammavadi::class;
    }
}
