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
        Schema::create('users',function (Blueprint $table) {
        $table->id();
        $table->string('name',200)->nullable(false);
        $table->string('email',200)->nullable(false);
        $table->string('password',200)->nullable(false);
        $table->string('remember_token',200);
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
        Schema::dropIfExists('users');
    }
}
