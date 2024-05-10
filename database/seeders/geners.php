<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\Gener;

class genersseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Gener::factory(10)->create();

    }
}
