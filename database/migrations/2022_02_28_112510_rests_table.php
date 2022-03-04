<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rests',function (Blueprint $table) {
        $table->id()->nullable(false);
        $table->id('attendance_id')->nullable(false);
        $table->time('start_time');
        $table->time('end_time');
        $table->timestamps('created_at');
        $table->timestamps('updated_at');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rests');
    }
}
