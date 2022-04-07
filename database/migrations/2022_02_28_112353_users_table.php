<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users1',function (Blueprint $table) {
        $table->id();
        $table->string('name',200)->nullable();
        $table->string('email',200)->nullable();
        $table->string('password',200)->nullable();
        $table->string('remember_token',200);
        $table->timestamp('update_at');
        $table->timestamp('created_at');
    });
}

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users1');
    }
}
