<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->string('like');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });

    }


    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
