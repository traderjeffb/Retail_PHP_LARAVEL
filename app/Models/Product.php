<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = ['id','image_path','product_number','catagory','name','price', 'cost','description','inventory'];

    //Accessors are use to get data
    public function getnameAttribute()
    {
        return "{$this->attributes['name'] } {$this->attributes['price'] }";
    }
    // mutators are used to set data
    public function setnameAttribute($value)
    
    {
        $this->attributes['name'] = strtolower($value);
    }
}
