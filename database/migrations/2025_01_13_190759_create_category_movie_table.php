<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            if (!Schema::hasColumn('movies', 'category_id')) {
                $table->unsignedBigInteger('category_id')->nullable();
            }
        });

        if (Schema::hasColumn('movies', 'category_id')) {
            // Veritabanındaki geçersiz category_id değerlerini NULL yapın
            DB::table('movies')->whereNotIn('category_id', function ($query) {
                $query->select('id')->from('categories');
            })->update(['category_id' => null]);
        }

        // Foreign key kısıtlamasını eklemeden önce mevcut olup olmadığını kontrol edin
        Schema::table('movies', function (Blueprint $table) {
            if (!Schema::hasColumn('movies', 'category_id')) {
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            }
        });

        Schema::create('category_movie', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->foreignId('movie_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            if (Schema::hasColumn('movies', 'category_id')) {
                if (Schema::hasColumn('movies', 'movies_category_id_foreign')) {
                    $table->dropForeign(['category_id']);
                }
                $table->dropColumn('category_id');
            }
        });

        Schema::table('category_movie', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropForeign(['movie_id']);
        });

        Schema::dropIfExists('category_movie');
    }
};
