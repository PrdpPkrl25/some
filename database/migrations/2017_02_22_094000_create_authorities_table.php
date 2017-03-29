<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthoritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authorities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('authority_name');
            $table->integer('gunaso_id')->unsigned();
            $table->foreign('gunaso_id')->references('id')->on('gunaso')->onDelete('cascade');
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
    { schema::table('authorities',function(Blueprint $table){
        $table->dropforeign('authorities_gunaso_id_foreign');
    });

        Schema::dropIfExists('authorities');
    }
}
