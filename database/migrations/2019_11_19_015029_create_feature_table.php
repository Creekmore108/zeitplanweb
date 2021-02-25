<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeatureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature', function (Blueprint $table) {
            $table->increments('id');

            $table->string('feature_name');

            $table->integer('plan_id');

            $table->longText('feature_detail')->nullable();

            $table->timestamps();

            $table->softDeletes();
        });
    }

}
