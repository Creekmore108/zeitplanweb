<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTable extends Migration
{
    public function up()
    {
        Schema::create('price', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            $table->decimal('price', 15, 2);

            $table->timestamps();

            $table->softDeletes();
        });
    }
}