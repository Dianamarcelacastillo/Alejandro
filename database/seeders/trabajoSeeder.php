<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class trabajoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        trabajo::factory(75)->create();
    }
}
