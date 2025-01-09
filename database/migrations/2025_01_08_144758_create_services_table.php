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
        Schema::disableForeignKeyConstraints();

        Schema::create('services', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('service_category_id');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('image')->nullable();
            $table->string('image_alt_text')->nullable();
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('custom_url')->nullable();
            $table->text('gallery')->nullable();
            $table->string('icon')->nullable();
            $table->tinyInteger('publish')->default(1);
            $table->unsignedBigInteger('sort')->nullable();
            $table->timestamps();
            $table->foreign('service_category_id')->references('id')->on('service_categories');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
