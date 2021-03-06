<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('translations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('translation_id')->index();
            $table->string('translation_type');
            $table->string('language');
            $table->json('content');
            $table->timestamps();
            $table->unique(['translation_type', 'translation_id', 'language']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('translations');
    }
}
