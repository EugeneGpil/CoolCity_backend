<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColorColumnAndCreateColor1IdAndColor2IdColumnsInPositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->dropColumn('color');
            $table->unsignedBigInteger('color_1_id')->after('size_id');
            $table->unsignedBigInteger('color_2_id')->after('color_1_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('positions', function (Blueprint $table) {
            $table->string('color');
            $table->dropColumn('color_1_id');
            $table->dropColumn('color_2_id');
        });
    }
}
