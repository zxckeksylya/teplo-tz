<?php

namespace Database\Seeders;

use App\Models\Dataitem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DataitemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dataitem::factory(1)->create();
    }
}
