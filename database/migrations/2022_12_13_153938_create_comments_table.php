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
      Schema::create('comments', function (Blueprint $table) {
        $table->id();

        $table->float('rate')->default(0);
        $table->string('username');
        $table->text('text');

        $table->unsignedBigInteger('organisation_id');
        $table->foreign('organisation_id')->references('id')->on('organisations');

        $table->unsignedBigInteger('user_id')->nullable();
        $table->foreign('user_id')->references('id')->on('users');

        $table->unsignedBigInteger('parent_comment_id')->nullable();
        $table->foreign('parent_comment_id')->references('id')->on('comments');


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
        Schema::dropIfExists('comments');
    }
};
