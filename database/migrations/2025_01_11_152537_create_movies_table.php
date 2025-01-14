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
            $table->text('description')->nullable();
            $table->float('vote_average')->nullable();
            $table->string('youtube_link')->nullable();
            $table->string('image')->nullable(); // Image alanını ekliyoruz
            $table->string('video')->nullable(); // Video alanını ekliyoruz
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Category ID alanını ekliyoruz
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
        Schema::dropIfExists('movies');
    }
}