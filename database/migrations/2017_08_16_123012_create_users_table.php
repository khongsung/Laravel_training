<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('user');
            $table->tinyInteger('gender')->default('1');
            $table->string('email', 100)->unique()->default('xxx@examp.com');
            $table->char('password')->default('12345678');
            $table->string('address')->default('no address');
            $table->integer('phone')->nullable()->default('19008198');
            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
}
