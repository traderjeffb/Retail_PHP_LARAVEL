<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(`products`, function (Blueprint $table) {
            $table->blob('image');
            $table->string('product_number')->unique();
            $table->string('catagory');
            $table->string('name');
            $table->decimal('price');
            $table->decimal('cost');
            $table->longText('description');
            $table->decimal('inventory');
            $table->timestamp('failed_at')->useCurrent();
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
