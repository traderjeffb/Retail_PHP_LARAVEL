<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    //protected $model = Product::class;
    protected $model = \App\Models\Product::class;
    

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [  
            'image'=>$this->faker->Str::random(10),
            'product_number' => $this->faker->randomElement(['30000','40000','50000','65000']),
            'catagory' => $this->faker->randomElement(['Tees','Sunglasses','Shoes','Hats']),
            'name' => $this->faker->unique()->words(),
            'price'=>$this->faker->randomElement(['30000','40000','50000','65000']),
            'cost'=>$this->faker->randomElement(['30000','40000','50000','65000']),            
            'description'=>$this->faker->Str::random(10),
            'inventory'=>$this->faker->randomNumber(),
        //     'image'=>$this->faker->sentence($nbWords =4,$varialbeNbWords=true),
        //     'product_number' => $this->faker->numberBetween($int1 =4,$int2=9),
        //     'catagory' => $this->faker->randomElement(['Tees','Sunglasses','Shoes','Hats']),
        //     'name' => $this->faker->unique()->words([$nb=1,$nb=3]),
        //     'price'=>$this->faker->randomFloat($nbMaxDecimals =2,$min=2,$max=2),
        //     'cost'=>$this->faker->randomFloat($nbMaxDecimals =2,$min=2,$max=2),            
        //     'description'=>$this->faker->sentence($nbWords=6,$variableNbWords=true),
        //    'inventory'=>$this->faker->randomNumber($nbDigits=null,$strick=false),
        ];
    }
}
