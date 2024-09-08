<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAkreditasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('akreditasi', function (Blueprint $table) {
            $table->id(); // Misalnya, primary key id
            $table->string('name'); // Contoh kolom
            $table->timestamps(); // Tambahkan timestamps
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('akreditasi');
    }
}
