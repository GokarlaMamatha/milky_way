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
        Schema::create('cms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('parent')->nullable();
            $table->bigInteger('type')->nullable();
            $table->string('custom_url')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('banner_title')->nullable();
            $table->string('banner_tagline')->nullable();
            $table->text('banner_description')->nullable();
            $table->text('content')->nullable();
            $table->text('gallery')->nullable();
            $table->tinyInteger('main_menu')->nullable();
            $table->tinyInteger('top_menu')->nullable();
            $table->tinyInteger('side_menu')->nullable();
            $table->tinyInteger('footer_menu')->nullable();
            $table->tinyInteger('publish')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cms');
    }
};
