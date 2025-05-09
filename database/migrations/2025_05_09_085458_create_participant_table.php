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
        Schema::create('participant', function (Blueprint $table) {
            //$table->id();
            $table->char('participantid');
            $table->enum('program',['TOEFL', 'IELTS', 'TOEIC']);
            $table->string('fullname',100);
            $table->string('email');
            $table->char('phone',20);
            $table->enum('gender', ['M', 'F']);
            $table->string('address', 100);
            $table->primary('participantid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('participant');
    }
};
