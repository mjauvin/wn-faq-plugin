<?php namespace Studioazura\FAQ\Updates;

use Schema;
use Winter\Storm\Database\Updates\Migration;

class FAQsAddSlug extends Migration
{
    public function up()
    {
        Schema::table('studioazura_faq_faqs', function ($table) {
            $table->string('slug')->index();
        });
    }

    public function down()
    {
        Schema::table('studioazura_faq_faqs', function ($table) {
            $table->dropColumn('slug');
        });
    }
}
