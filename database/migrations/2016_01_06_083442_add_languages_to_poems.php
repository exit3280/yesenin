<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLanguagesToPoems extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::table('poems', function ($table) {
      $table->integer('language_id')->unsigned();
      $table->foreign('language_id')->references('id')->on('languages');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('poems', function ($table) {
      $table->dropForeign('poems_language_id_foreign');
    });
  }
}
