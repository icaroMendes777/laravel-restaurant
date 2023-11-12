<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->nullable();
            $table->smallInteger('order')->default(1);
            $table->text('description')->nullable();
            $table->text('ingredients')->nullable();
            $table->float('price', 5, 2)->nullable();
            $table->string('picture1_url')->nullable();
            $table->string('picture2_url')->nullable();
            $table->string('picture3_url')->nullable();
            $table->boolean('active')->default(false);;
            $table->timestamps();
            $table->softDeletes();
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
}
