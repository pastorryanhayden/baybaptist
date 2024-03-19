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
        Schema::create('offering_student', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('offering_id');
            $table->unsignedInteger('student_id');
            $table->boolean('paid')->default(false);
            $table->boolean('completed')->default(false);
            $table->unsignedBigInteger('grade')->nullable();
            $table->mediumText('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offering_student');
    }
};
