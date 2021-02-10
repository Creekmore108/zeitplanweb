<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingTable extends Migration
{
    public function up()
    {
        Schema::create('setting', function (Blueprint $table) {
            $table->increments('id');

            $table->string('key');

            $table->longText('value')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }
}