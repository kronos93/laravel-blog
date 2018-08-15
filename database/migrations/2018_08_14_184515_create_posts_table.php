<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned(); // author
            $table->integer('category_id')->unsigned();

            $table->string('name');
            $table->string('slug')->unique(); // URL amigables
            $table->string('excerpt')->nullabel();
            $table->text('body');
            $table->enum('status',['PUBLISHED','DRAFT'])->default('DRAFT');
            $table->string('file')->nullable();
            /**
             * Note: Una idea puede ser poner $table->string('view'); para hacer un load de vistas dinamicas :3
             */
            $table->timestamps();

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
