<?php

namespace Database\Seeders;

use Carbon\Factory;
use Database\Factories\EmployeeFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\product::factory()->count(30)->create();
        //\App\Models\product::factory()->times(count:30)->create();
        

    }
}
