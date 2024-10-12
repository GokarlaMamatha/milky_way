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
        Schema::table('students', function (Blueprint $table) {
            //
            $table->string('gender')->nullable();
            $table->string('medium')->nullable();
            $table->string('doa')->nullable();
            $table->string('adminssion_no')->nullable();
            $table->string('photo')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('father_occupation')->nullable();
            $table->string('phone')->nullable();
            $table->string('religion')->nullable();
            $table->string('cast')->nullable();
            $table->text('address')->nullable();
            $table->string('house_no')->nullable();
            $table->string('village')->nullable();
            $table->string('mandal')->nullable();
            $table->string('city')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('ps_name')->nullable();
            $table->string('ps_address_code')->nullable();
            $table->string('ps_village')->nullable();
            $table->string('ps_mandal')->nullable();
            $table->string('ps_city')->nullable();
            $table->string('ps_class')->nullable();
            $table->string('ps_completion_year')->nullable();
            $table->string('ps_registration_no')->nullable();
            $table->text('moles')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
