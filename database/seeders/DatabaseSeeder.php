<?php

namespace Database\Seeders;

use App\Models\tbiModel;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\tbiModel::factory(10)->create();
    }
}
