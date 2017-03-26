<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_ups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('authority_id')->unsigned();
            $table->foreign('authority_id')->references('id')->on('authorities')->onDelete('cascade');
            $table->date('gunaso_date');
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

        schema::table('follow_ups',function(Blueprint $table){
            $table->dropforeign('follow_ups_authority_id_foreign');
        });
        Schema::dropIfExists('follow_ups');
    }
}
