<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $table = "products";
    //protected $primaryKey = 'product_number';
    //public $incrementing = false;
    protected $fillable = ['image','product_number','catagory','name','price', 'cost','description'];
}
