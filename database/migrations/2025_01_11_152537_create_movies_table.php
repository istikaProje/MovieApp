<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */


    public function up()
{
    Schema::create('movies', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->decimal('vote_average', 2, 1);
        $table->string('youtube_link');
        $table->text('description');
        $table->string('image');
        $table->string('video');
        $table->string('type'); // type alanını ekleyin
        $table->timestamps();
        $table->unsignedBigInteger('category_id')->nullable(); // category_id alanını nullable yapın
        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}