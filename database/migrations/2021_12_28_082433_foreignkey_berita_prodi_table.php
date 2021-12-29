<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignkeyBeritaProdiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('beritaprodi', function (Blueprint $table) {
            $table->foreign('users_id','fk_beritaprodi_to_user')->references('id')
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
        Schema::table('beritaprodi', function (Blueprint $table) {
            $table->dropForeign('fk_beritaprodi_to_user');
        });
    }
}
