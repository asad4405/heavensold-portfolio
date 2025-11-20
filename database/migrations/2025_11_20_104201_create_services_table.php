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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('name_one');
            $table->text('name_two')->nullable();
            $table->text('name_three')->nullable();
            $table->text('name_four')->nullable();
            $table->text('name_five')->nullable();
            $table->text('name_six')->nullable();
            $table->text('name_seven')->nullable();
            $table->text('name_eight')->nullable();
            $table->text('name_nine')->nullable();
            $table->text('name_ten')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
