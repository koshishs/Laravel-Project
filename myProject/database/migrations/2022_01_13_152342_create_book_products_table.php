<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('firstname')->nullable();
            $table->string('surname');
            $table->unsignedDecimal('price',$precision= 10, $scale= 2);
            $table->unsignedInteger('pages');
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
        Schema::dropIfExists('book_products');
    }
}
