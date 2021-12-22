<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignkeyBimbinganKpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bimbingan_kp', function (Blueprint $table) {
            $table->foreign('dosen_id','fk_bimbingan_to_dosen')->references('id')
            ->on('detail_dosen')->onUpdate('CASCADE')->onDelete('CASCADE');

            $table->foreign('mahasiswa_id','fk_detaildosen_to_mahasiswa')->references('id')
            ->on('detail_mahasiswa')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bimbingan_kp', function (Blueprint $table) {
            $table->dropForeign('fk_bimbingan_to_dosen');
            $table->dropForeign('fk_detaildosen_to_mahasiswa');
        });
    }
}
