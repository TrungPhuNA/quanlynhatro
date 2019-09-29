<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('loc_name')->nullable();
            $table->string('loc_slug')->nullable();
            $table->integer('loc_parent_id')->nullable()->index()->default(0);
            $table->integer('loc_city_id')->nullable()->index()->default(0);
            $table->integer('loc_district_id')->nullable()->index()->default(0);
            $table->integer('loc_street_id')->nullable()->index()->default(0);
            $table->integer('loc_ward_id')->nullable()->index()->default(0);
            $table->integer('loc_level')->nullable()->index()->default(0);
            $table->string('loc_type')->nullable()->index();
            $table->string('loc_description')->nullable();
            $table->integer('loc_status')->nullable()->index()->default(0);
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
        Schema::dropIfExists('locations');
    }
}
