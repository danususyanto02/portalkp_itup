<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimbinganKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbingan_kp', function (Blueprint $table) {
            $table->id();
            $table->foreignId('dosen_id')->nullable()->index('fk_bimbingan_to_dosen'); 
            $table->string('tahun_ajaran')->nullable();
            $table->foreignId('mahasiswa_id')->nullable()->index('fk_detaildosen_to_mahasiswa'); 
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
        Schema::dropIfExists('bimbingan_kp');
    }
}
