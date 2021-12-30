<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePejabatprodiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pejabatprodi', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('no_telpon')->nullable();
            $table->string('jabatan')->nullable();
            $table->foreignId('users_id')->nullable()->index('fk_stafprodi_to_user'); 
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
        Schema::dropIfExists('pejabatprodi');
    }
}
