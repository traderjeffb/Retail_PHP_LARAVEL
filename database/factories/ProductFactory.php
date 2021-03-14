<?php

namespace Database\Factories;

use App\Models\Product;
use Faker\Core\Number;
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
            'id'=>$this->faker->randomNumber($nbDigits=null,$strict=false),
            'image'=>$this->faker->randomElement(['image1','image2','image3','image4']),
            'product_number' => $this->faker->randomNumber($nbDigits=4,$strict=true),
            'catagory' => $this->faker->randomElement(['Tees','Sunglasses','Shoes','Hats']),
            'name' => $this->faker->randomElement(['Big Shoes','Silk sox','blue hat','shaders']),
            'price'=>$this->faker->randomElement(['30','40','50','65']),
            'cost'=>$this->faker->randomElement(['20','30','25','45']),            
            'description'=>$this->faker->randomElement(['white','colorful','cool','hot']),
            'inventory'=>$this->faker->randomElement(['3','4','5','6']),
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
