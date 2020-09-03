<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('countries', function (Blueprint $table) {
            $table->id(); //nereikia
            $table->string('title', 30);
            $table->text('description');
            $table->integer('distance');
            $table->timestamps(); //nereikia
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('countries');
    }
}
