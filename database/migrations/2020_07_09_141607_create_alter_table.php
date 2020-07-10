<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('answer', function (Blueprint $table) {
            $table->unsignedBigInteger('questions_id');  
            $table->foreign('questions_id')->references('id')->on('question');
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
        Schema::table('answer', function (Blueprint $table) {
            $table->dropForeign(['questions_id']);
        });
    }
}
