<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->integer('file_id')->unsigned();
            $table->foreign('file_id')->references('id')->on('files')->onDelete('cascade');
            $table->integer('info_id')->unsigned();
            $table->foreign('info_id')->references('id')->on('info')->onDelete('cascade');
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
        Schema::table('comment',Function(Blueprint $table){


        $table->dropforeign('comment_user_id_foreign');
        $table->dropforeign('comment_file_id_foreign');
        $table->dropforeign('comment_info_id_foreign');
        $table->dropforeign('comment_gunaso_id_foreign');
    });
        Schema::dropIfExists('comment');
    }
}
