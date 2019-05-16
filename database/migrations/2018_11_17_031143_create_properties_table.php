<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('property_type',150);
            $table->string('street_number',150);
            $table->string('street_name',150);
            $table->string('address2',150);
            $table->string('city',100);
            $table->string('state',100);
            $table->string('zip_code',10);
            $table->integer('rent');
            $table->string('img',200);
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
        Schema::dropIfExists('properties');
    }
}
