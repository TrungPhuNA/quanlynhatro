<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('mn_name');
            $table->string('mn_slug')->unique();
            $table->integer('mn_parent')->default(0);
            $table->tinyInteger('mn_hot')->default(0);
            $table->tinyInteger('mn_active')->default(1);
            $table->text('mn_content')->nullable();
            $table->string('mn_description')->nullable();
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
        Schema::dropIfExists('menus');
    }
}
