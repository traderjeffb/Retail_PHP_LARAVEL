<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //\App\Models\Emplpoyee::factory(10)-create();
        
        //below are the 2 working seeders
        $this->call(class:EmployeeSeeder::class);
        $this->call(class:ProductSeeder::class);

    }
}
