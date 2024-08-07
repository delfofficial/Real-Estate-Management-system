<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalerequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salerequests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
$table->string('phone');
$table->string('email');
$table->string('title');
$table->integer('price');
$table->string('description');
$table->string('image');
$table->string('status')->default('pending');
$table->boolean('ordered')->default(false);
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
        Schema::dropIfExists('salerequests');
    }
}
