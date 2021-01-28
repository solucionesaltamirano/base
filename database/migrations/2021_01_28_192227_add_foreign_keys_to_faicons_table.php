<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToFaiconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('faicons', function (Blueprint $table) {
            $table->foreign('categoryfaicon_id', 'fk_faicons_categoryfaicons1')->references('id')->on('categoryfaicons')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('faicons', function (Blueprint $table) {
            $table->dropForeign('fk_faicons_categoryfaicons1');
        });
    }
}
