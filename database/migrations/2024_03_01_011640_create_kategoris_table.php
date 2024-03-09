<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->integer('totalPost')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if ($this->checkRelationships()) {
            Session::flash('WARNING', 'DATA ASATID MASIH DIGUNAKAN DAN TIDAK DAPAT DIHAPUS.');

            return;
        }
        Schema::dropIfExists('kategoris');
    }
    private function checkRelationships()
    {
        return DB::table('contect')->where('kategori_id')->exists();
    }

};

