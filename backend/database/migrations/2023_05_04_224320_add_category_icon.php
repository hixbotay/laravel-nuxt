<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryIcon extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('product_categories', function (Blueprint $table) {
            $table->string('image', 500)->default('');
        });
    }

    public function down()
    {
        Schema::table('product_categories', function (Blueprint $table) {
            // remove unused columns
            $table->dropColumn('image');
        });
    }
}
