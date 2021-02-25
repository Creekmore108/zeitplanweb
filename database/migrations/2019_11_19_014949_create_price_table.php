<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePriceTable extends Migration
{
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->increments('id');

            $table->string('plan_name');

            $table->decimal('base_price', 15, 2);

            $table->decimal('user_price', 15, 2);

            $table->integer('min');

            $table->integer('max');

            $table->timestamps();

            $table->softDeletes();
        });
    }
}