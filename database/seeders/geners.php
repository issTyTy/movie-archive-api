<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\gener;

class genersseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Gener::factory(1)->create();

    }
}
