<?php namespace Studioazura\FAQ\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class UpdateQuestionTable extends Migration
{
    public function up()
    {
        Schema::table('studioazura_faq_questions', function (Blueprint $table) {
            $table->text('question')->change();
        });
    }

    public function down()
    {
        Schema::table('studioazura_faq_questions', function ($table) {
            $table->string('question')->change();
        });
    }
}
