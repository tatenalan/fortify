<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_user', function (Blueprint $table) {
            $table->id();
            $table->integer('result')->nullable();
            $table->enum('status', ['completed', 'pending'])->default('pending');
            $table->integer('version')->default(1);

            $table->unsignedBigInteger('form_id');
            $table->foreign('form_id')->references('id')->on('forms')->deleteOn('cascade');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->deleteOn('cascade');

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
        Schema::dropIfExists('form_user');
    }
}
