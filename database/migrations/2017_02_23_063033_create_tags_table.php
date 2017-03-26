<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gunaso_id')->unsigned();
            $table->foreign('gunaso_id')->references('id')->on('gunaso')->onDelete('cascade');
            $table->string('tag_name');
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
        schema::table('tags',function(Blueprint $table){
           $table->dropforeign('tags_gunaso_id_foreign');
        });
        Schema::dropIfExists('tags');
    }
}
