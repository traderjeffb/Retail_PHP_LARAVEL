<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */                    
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id('sale_id');
            $table->integer('product_id');
            $table->integer('product_number');
            $table->date('item_sale_date');
            $table->string('item_catagory');
            $table->integer('item_name');
            $table->decimal('item_price',5,2);
            $table->decimal('item_cost',5,2);
            $table->longText('description');
            $table->integer('item_current_inventory');
            $table->integer('item_required_inventory_level');
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
        Schema::dropIfExists('sales');
    }
}
