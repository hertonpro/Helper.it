<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoftwaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('softwares', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre');
            $table->string('description');
<<<<<<< HEAD
            $table->string('vesion');
            $table->integer('category_id')->unsigned();

            $table->foreign('category_id')->references('id')->on('categories');
=======
            $table->string('version');
>>>>>>> f397c1d92b74e3d6bd0aee5aba3dd989c6ceb4de

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
        Schema::dropIfExists('softwares');
    }
}