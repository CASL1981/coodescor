<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('url');
            $table->mediumText('excerpt')->nullable();
            $table->text('body')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->unsignedBigInteger('category_news_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('noticias');
    }
}
