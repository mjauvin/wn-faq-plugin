<?php namespace Studioazura\FAQ\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class AddSortOrder extends Migration
{
    public function up()
    {
        Schema::table('studioazura_faq_categories', function (Blueprint $table) {
            $table->unsignedinteger('sort_order')->nullable()->index();
        });
        Schema::table('studioazura_faq_questions', function (Blueprint $table) {
            $table->unsignedinteger('sort_order')->nullable()->index();
        });
    }

    public function down()
    {
        Schema::table('studioazura_faq_categories', function ($table) {
            $table->dropColumn('sort_order');
        });
        Schema::table('studioazura_faq_questions', function ($table) {
            $table->dropColumn('sort_order');
        });
    }
}
