<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances',function (Blueprint $table) {
                $table->id();
                $table->integer('user_id')->nullable();
                $table->date('date');
                $table->time('start_time');
                $table->time('end_time');
                $table->timestamp('created_at');
                $table->timestamp('update_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendances');
    }
}
