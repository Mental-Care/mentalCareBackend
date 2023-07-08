<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('res_questions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('res_id')->nullable()->constrained('res', 'id')->nullOnDelete();
            $table->string('question');
            $table->string('opt1');
            $table->string('opt2');
            $table->string('opt3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('res_questions');
    }
};
