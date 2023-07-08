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
        Schema::create('therapists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained('users', 'id')->nullOnDelete();
            $table->foreignId('specialty_id')->nullable()->constrained('specialties', 'id')->nullOnDelete();
            $table->foreignId('subSpecialty_id')->nullable()->constrained('specialties', 'id')->nullOnDelete();
            $table->foreignId('interests_id')->nullable()->constrained('interests', 'id')->nullOnDelete();
            $table->string('language');
            $table->string('country');
            $table->string('address');
            $table->integer('sessions')->nullable();
            $table->double('rate')->nullable();
            $table->double('review')->nullable();
            $table->double('communicationSkills')->nullable();
            $table->double('effectiveSolutions')->nullable();
            $table->double('understandSituation')->nullable();
            $table->double('CommitmentSessionDates')->nullable();
            $table->date('date');
            $table->time('time');
            $table->integer('price_60');
            $table->integer('price_30');
            $table->boolean('isPsychotherapy');
            $table->boolean('Connected');
            $table->boolean('isBestTherapist');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('therapists');
    }
};
