<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaiconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faicons', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('value', 45);
            $table->integer('categoryfaicon_id')->index('fk_faicons_categoryfaicons1_idx');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faicons');
    }
}
