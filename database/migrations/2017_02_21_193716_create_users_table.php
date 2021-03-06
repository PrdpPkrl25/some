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
        Schema::create('users', function (Blueprint $table) {
                $table->increments('id');
                $table->string('first_name',100);
                $table->string('last_name',100);
                $table->string('address',100);
                $table->integer('mobile_no');
                $table->date('date_of_birth');
                $table->integer('age');
                $table->enum('gender',array('male','female'));
                $table->softDeletes();
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
