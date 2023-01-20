<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Hegaldias', function (Blueprint $table) {
            $table->id();
            $table->string('irteera');
            $table->string('helmuga');
            $table->string('irteeraData');
            $table->string('iraupena');
        });

        Schema::create('hegaldiak_a_p_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('irteera');
            $table->string('helmuga');
            $table->string('irteeraData');
            $table->string('iraupena');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Hegaldias');
    }
};
