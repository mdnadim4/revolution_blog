<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeletedAtColumnToBlogsTable extends Migration
{

    public function up()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->softDeletes();
        });
    }


    public function down()
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('deleted_at');
        });
    }
}
