<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_articles', function (Blueprint $table) {
            $table->id();
            $table->string('authors');
            $table->string('title');
            $table->string('journal_or_conference');
            $table->string('time');
            $table->integer('type');
            $table->string('citation_index')->nullable();
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
        Schema::dropIfExists('teacher_articles');
    }
}
