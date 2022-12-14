<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('category_organisation', function (Blueprint $table) {
        $table->unsignedBigInteger('category_id');
        $table->unsignedBigInteger('organisation_id');
        $table->foreign('category_id')->references('id')->on('categories');
        $table->foreign('organisation_id')->references('id')->on('organisations');
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_organisation');
    }
};
