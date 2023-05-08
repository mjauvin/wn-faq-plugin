<?php namespace Studioazura\FAQ\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('studioazura_faq_questions', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('question');
            $table->mediumText('answer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studioazura_faq_questions');
    }
}
