<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jadwalkps extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadwal_kps', function (Blueprint $table) {
            $table->id();
            $table->string('kegiatan');
            $table->date('daritanggal');
            $table->date('sampaitanggal');
            $table->foreignId('users_id')->nullable()->index('fk_jadwalkp_to_user'); 
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::table('jadwal_kps', function (Blueprint $table) {
            $table->foreign('users_id','fk_jadwalkp_to_user')->references('id')
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
        Schema::dropIfExists('jadwal_kps');
        Schema::table('jadwal_kps', function (Blueprint $table) {
            $table->dropForeign('fk_video_to_user');
        });
    }
}
