<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mt_name');
            $table->string('mt_slug')->unique()->index();
            $table->string('mt_address')->nullable();
            $table->bigInteger('mt_price')->default(0);
            $table->tinyInteger('mt_acreage')->default(0);
            $table->integer('mt_menu_id')->default(0);
            $table->integer('mt_user_id')->default(0);
            $table->integer('mt_city_id')->default(0);
            $table->integer('mt_district_id')->default(0);
            $table->integer('mt_street_id')->default(0);
            $table->string('mt_avatar')->nullable();
            $table->string('mt_description',300);
            $table->text('mt_album')->nullable();
            $table->text('mt_content')->nullable();
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
        Schema::dropIfExists('motels');
    }
}
