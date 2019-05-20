<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('main_page', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('type');
            $table->integer('sequence');
            $table->string('title')->nullable();
            $table->string('title2')->nullable();
            $table->string('content')->nullable();
            $table->string('content2')->nullable();
            $table->string('btn_name')->nullable();
            $table->string('btn_name2')->nullable();
            $table->string('btn_name3')->nullable();
            $table->string('btn_href')->nullable();
            $table->string('btn_href2')->nullable();
            $table->string('btn_href3')->nullable();
            $table->string('img')->nullable();
            $table->string('img2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('main_page');
    }
}
