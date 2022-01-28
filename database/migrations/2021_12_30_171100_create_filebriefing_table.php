<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilebriefingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filebriefing', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('file')->nullable();
            $table->foreignId('users_id')->nullable()->index('fk_filesbrief_to_user'); 
            $table->timestamps();
        });
        Schema::table('filebriefing', function (Blueprint $table) {
            $table->foreign('users_id','fk_filesbrief_to_user')->references('id')
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
        Schema::dropIfExists('filebriefing');
        Schema::table('filebriefing', function (Blueprint $table) {
            $table->dropForeign('fk_filesbrief_to_user');
        });
    }
}
