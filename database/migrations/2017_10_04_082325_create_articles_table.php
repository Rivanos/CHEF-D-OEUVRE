<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longtext('under-content');
            $table->boolean('heart_attack')->default(0);
            $table->boolean('most_sell')->default(0);
            $table->boolean('show_index')->default(0);
            $table->boolean('online')->default(1);
            $table->longtext('content');
            $table->string('category');
            $table->integer('price');
            $table->string('path_img');
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
        Schema::dropIfExists('articles');
    }
}
