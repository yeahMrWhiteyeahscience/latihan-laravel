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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('nis');
            $table->string('name', 150);
            $table->enum('gander', ['Laki-Laki', 'Perempuan']);
            $table->string('religion', 100);
            $table->date('birth_day');
            $table->string('class', 50);
            $table->text('addres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
