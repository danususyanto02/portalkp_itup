<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ForeignkeyDosenPembimbingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('dosen_pembimbing', function (Blueprint $table) {
            $table->foreign('detaildosen_id','fk_detail_dosen_to_dosen_pembimbing')->references('id')
            ->on('detail_dosen')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('dosen_pembimbing',function(Blueprint $table){
            $table->dropForeign('fk_detail_dosen_to_dosen_pembimbing');
        });
    }
}
