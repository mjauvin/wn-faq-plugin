<?php namespace Studioazura\FAQ\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class QuestionsAddForeignkeys extends Migration
{
    public function up()
    {
        Schema::table('studioazura_faq_questions', function (Blueprint $table) {
            $table->unsignedinteger('faq_id')->nullable()->index();
            $table->unsignedinteger('category_id')->nullable()->index();
        });
    }

    public function down()
    {
        Schema::table('studioazura_faq_questions', function ($table) {
            $table->dropColumn('faq_id');
            $table->dropColumn('category_id');
        });
    }
}
