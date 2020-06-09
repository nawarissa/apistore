<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTableNameColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table("rest_tables", function (Blueprint $table) {
        $table->string("name");
        $table->string("image");
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table("rest_tables", function (Blueprint $table) {
        $table->dropColumn("name");
        $table->dropColumn("image");
      });
    }
}
