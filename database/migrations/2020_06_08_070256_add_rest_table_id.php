<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRestTableId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table("bookings", function (Blueprint $table) {
        $table->foreignId("rest_table_id")->constrained();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table("bookings", function (Blueprint $table) {
        $table->dropColumn("rest_table_id");
      });
    }
}
