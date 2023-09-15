<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSlugToGenreStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('genre_stories', function (Blueprint $table) {
            $table->string('slug')->after('genre_name');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('genre_stories', function (Blueprint $table) {
            $table->string('genre_slug')->after('genre_name');
        });
    }
}
