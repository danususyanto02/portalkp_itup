<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('file')->nullable();
            $table->foreignId('users_id')->nullable()->index('fk_files_to_user'); 
            $table->timestamps();
        });
        Schema::table('files', function (Blueprint $table) {
            $table->foreign('users_id','fk_files_to_user')->references('id')
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
        Schema::dropIfExists('files');
        Schema::table('files', function (Blueprint $table) {
            $table->dropForeign('fk_files_to_user');
        });
    }
}
