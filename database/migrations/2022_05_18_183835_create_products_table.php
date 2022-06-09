<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique(); 
            $table->text('description'); 
            $table->string('category'); 
            $table->string('size'); 
            $table->integer('costPrice'); 
            $table->integer('salePrice'); 
            $table->integer('quantity')->nullable(); 
            $table->integer('status')->default(1)->comment('1 for active 2 for Inactive'); 
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
        Schema::dropIfExists('products');
    }
};
