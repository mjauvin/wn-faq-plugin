<?php namespace Studioazura\FAQ\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class UpdateFAQsTable extends Migration
{
    public function up()
    {
        Schema::table('studioazura_faq_faqs', function (Blueprint $table) {
            $table->text('title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('excerpt')->nullable();
        });
    }

    public function down()
    {
        Schema::table('studioazura_faq_faqs', function ($table) {
            $table->dropColumn('title');
            $table->dropColumn('subtitle');
            $table->dropColumn('excerpt');
        });
    }
}
