<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCdProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cd_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('firstname')->nullable();
            $table->string('band');
            $table->unsignedDecimal('price',$precision= 10, $scale= 2);
            $table->unsignedInteger('playlength');
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
        Schema::dropIfExists('cd_products');
    }
}
