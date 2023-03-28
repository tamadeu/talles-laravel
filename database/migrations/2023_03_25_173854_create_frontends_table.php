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
        Schema::create('frontends', function (Blueprint $table) {
            $table->id();
            $table->string('hero_header_text');
            $table->text('hero_body_text');
            $table->string('about_header_text');
            $table->text('about_body_text');
            $table->string('myStory_header_text');
            $table->text('myStory_body_text');
            $table->string('projects_header_text');
            $table->text('projects_body_text');
            $table->string('contact_header_text');
            $table->text('contact_body_text');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frontends');
    }
};
