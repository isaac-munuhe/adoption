<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdopteesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adoptees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            // $table->integer('child_id')->unsigned();
            $table->string('name');
            $table->integer('idno');
            $table->integer('age');
            $table->string('marital');
            $table->string('location');
            $table->text('reason');
            $table->string('address');
            $table->string('passport');
            $table->string('good_conduct');
            $table->string('bank');
            $table->string('marriage_cert');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            // $table->foreign('child_id')->references('id')->on('children')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('adoptees');
    }
}
