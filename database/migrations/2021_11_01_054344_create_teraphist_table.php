<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeraphistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teraphist', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('name',200); 
            $table->string('title',200); 
            $table->string('phone',100); 
            $table->string('status',100); 
            $table->string('rating',200);  
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
        Schema::dropIfExists('teraphist');
    }
}
