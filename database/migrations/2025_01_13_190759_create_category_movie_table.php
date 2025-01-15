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
            // Foreign key kısıtlamasını geçici olarak kaldırın
            $table->unsignedBigInteger('category_id')->nullable()->change();
        });

        // Veritabanındaki geçersiz category_id değerlerini NULL yapın
        DB::table('movies')->whereNotIn('category_id', function ($query) {
            $query->select('id')->from('categories');
        })->update(['category_id' => null]);

        // Foreign key kısıtlamasını ekleyin
        Schema::table('movies', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('movies', function (Blueprint $table) {
            $table->dropForeign(['category_id']);
            $table->dropColumn('category_id');
        });
    }
};