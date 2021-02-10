<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->increments('id');

            $table->string('question');

            $table->longtext('answer');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}