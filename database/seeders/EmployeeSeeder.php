<?php

namespace Database\Seeders;

use Carbon\Factory;
use Database\Factories\EmployeeFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     *
     * @return void
     */
    public function run()
    {
        
        //Employee::factory()->times(count:20)->create();
        \App\Models\employee::factory()->count(30)->create();
    }
}
