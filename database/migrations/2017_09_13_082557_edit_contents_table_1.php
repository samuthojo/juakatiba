<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditContentsTable1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->dropColumn(['title', 'link', 'image', ]);
            $table->mediumText('description')->change();
            $table->string('context', 20);
            $table->string('katiba', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->dropColumn(['katiba', 'context', ]);
            $table->string('description', 500)->change();
            $table->string('type', 100);
            $table->string('link', 200);
            $table->string('image');
        });
    }
}
