<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


class NurserySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Nursery::factory(10)->create();
    }
}
