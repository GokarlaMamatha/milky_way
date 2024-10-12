<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ammavadi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->string('mother_education')->nullable();
            $table->string('mother_aadhar_no')->nullable();
            $table->string('mother_phone_no')->nullable();
            $table->string('mother_bank_no')->nullable();
            $table->string('mother_bank_ifsc')->nullable();
            $table->string('mother_bank_name')->nullable();
            $table->string('father_education')->nullable();
            $table->string('father_phone_no')->nullable();
            $table->string('father_bank_no')->nullable();
            $table->string('father_aadhar_no')->nullable();
            $table->string('father_bank_name')->nullable();
            $table->string('father_bank_ifsc')->nullable();
            $table->string('past_amavadi_cfms_id')->nullable();
            $table->string('past_amavadi_bank_no')->nullable();
            $table->string('past_amavadi_bank_name')->nullable();
            $table->string('boots_size')->nullable();
            $table->tinyInteger('android_phone')->nullable();
            $table->tinyInteger('basic_phone')->nullable();
            $table->tinyInteger('tv')->nullable();
            $table->string('distance_from_house')->nullable();
            $table->string('whatsap_no')->nullable();
            $table->string('village_volunteer_name')->nullable();
            $table->string('village_volunteer_no')->nullable();
            $table->tinyInteger('rashion_card')->nullable();
            $table->tinyInteger('aadhar_card')->nullable();
            $table->tinyInteger('cast')->nullable();
            $table->tinyInteger('dob_certificate')->nullable();
            $table->tinyInteger('mother_aadhar')->nullable();
            $table->tinyInteger('father_aadhar')->nullable();
            $table->tinyInteger('mother_bank_book')->nullable();
            $table->text('other')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amvadi');
    }
};
