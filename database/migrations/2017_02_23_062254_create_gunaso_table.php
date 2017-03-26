<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGunasoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gunaso', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('topic',100);
            $table->string('heading',100);
            $table->text('description');
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

        schema::table('gunaso',function(Blueprint $table) {
            $table->dropforeign('gunaso_user_id_foreign');
        });
        Schema::dropIfExists('gunaso');
    }
}
