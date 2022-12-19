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
Schema::create('organisations', function (Blueprint $table) {
  $table->id();
  $table->string('legal_name')->unique();
  $table->text('description')->nullable();
  $table->string('source');
  $table->string('inn');
  $table->string('location');
  $table->string('head_person_name')->nullable();
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
        Schema::dropIfExists('organisations');
    }
};
