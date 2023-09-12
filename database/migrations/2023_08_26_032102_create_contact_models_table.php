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
        Schema::create('contacts', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('phone_number', 15);
        $table->string('avatar')->nullable()->default(null);
        $table->enum('gender', ['laki-laki','perempuan'])->default('laki-laki');
        $table->foreignId('user_id')->constrained('users'); // Untuk relasi ke tabel `users`
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
