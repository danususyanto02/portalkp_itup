<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('judul')->nullable();
            $table->string('video')->nullable();
            $table->foreignId('users_id')->nullable()->index('fk_video_to_user'); 
            $table->timestamps();
        });
        Schema::table('videos', function (Blueprint $table) {
            $table->foreign('users_id','fk_video_to_user')->references('id')
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
        Schema::dropIfExists('videos');
        Schema::table('beritakp', function (Blueprint $table) {
            $table->dropForeign('fk_video_to_user');
        });
    }
}
