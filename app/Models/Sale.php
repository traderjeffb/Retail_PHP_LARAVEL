<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = "sales";
    protected $fillable = ['sale_id','product_id','product_number','item_sale_date','item_catagory','item_name','item_price', 'item_cost','description','item_current_inventory','item_required_inventory_level'];
}
