<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

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
