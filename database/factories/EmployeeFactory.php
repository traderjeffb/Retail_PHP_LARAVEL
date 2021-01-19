<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as faker;
use Illuminate\Support\Str;


class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first' => $this->faker->name(),
            'last' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'street_address'=>$this->faker->address(),
            'city'=>$this->faker->city(),
            'state'=>$this->faker->state(),
            'department'=>$this->faker->department(),
            'salary'=>$this->faker->salary(),
        ];
    }
}
