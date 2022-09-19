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
        Schema::create('inventaris', function (Blueprint $table) {
            $table->id('noinventaris')->uniqe();
            $table->string('namaalat');
            $table->string('Merk');
            $table->string('hargasatuan');
            $table->string('jumlah');
            $table->string('lokasi');
            $table->string('kondisi');
            $table->date('tahunpembuatan');
            $table->string('usiabarang');
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
        Schema::dropIfExists('inventaris');
    }
};
