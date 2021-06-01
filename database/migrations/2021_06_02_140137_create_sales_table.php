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
            $table->sale_id();
            $table->number('product_id');
            $table->number('product_number');
            $table->date('item_sale_date');
            $table->string('item_catagory');
            $table->number('item_name');
            $table->decimal(8,2,'item_price');
            $table->decimal(8,2,'item_cost');
            $table->string('description');
            $table->number('item_current_inventory');
            $table->number('item_required_inventory_level');
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
