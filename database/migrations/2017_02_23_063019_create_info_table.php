<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('gunaso_id')->unsigned();
            $table->foreign('gunaso_id')->references('id')->on('gunaso')->onDelete('cascade');
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

        Schema::table('info',Function(Blueprint $table) {
            $table->dropforeign('info_user_id_foreign');
            $table->dropforeign('info_gunaso_id_foreign');

        });
        Schema::dropIfExists('info');
    }
}
