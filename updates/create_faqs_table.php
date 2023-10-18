<?php namespace Studioazura\FAQ\Updates;

use Schema;
use Winter\Storm\Database\Schema\Blueprint;
use Winter\Storm\Database\Updates\Migration;

class CreateFaqsTable extends Migration
{
    public function up()
    {
        Schema::create('studioazura_faq_faqs', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->string('name');
            $table->text('description')->nullable();
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('studioazura_faq_faqs');
    }
}
