<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        if (Schema::hasTable('category_movie')) {
            Schema::table('category_movie', function (Blueprint $table) {
                // Check if the foreign key exists before attempting to drop it
                $foreignKeys = DB::select(DB::raw('SHOW KEYS FROM category_movie WHERE Key_name="category_movie_category_id_foreign"'));
                if (!empty($foreignKeys)) {
                    $table->dropForeign(['category_id']);
                }
            });
        }

        Schema::dropIfExists('categories');
    }
}
