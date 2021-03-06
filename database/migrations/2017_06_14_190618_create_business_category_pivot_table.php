<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessCategoryPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_category', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('business_id');
			$table->foreign('business_id')->references('id')->on('businesses')->onUpdate('cascade')->onDelete('cascade');
			$table->unsignedInteger('category_id');
			$table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('business_category');
    }
}
