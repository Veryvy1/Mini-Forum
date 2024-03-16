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
            $table->integer('like');
            $table->foreignId('user_id')->constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('content_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });

    }


    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
