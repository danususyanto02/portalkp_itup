<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignkeyDetailMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_mahasiswa', function (Blueprint $table) {

            $table->foreign('users_id','fk_detailmahasiswa_to_users')->references('id')

            ->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_mahasiswasd',function(Blueprint $table){

            $table->dropForeign('fk_detailmahasiswa_to_users');

        });
    }
}
