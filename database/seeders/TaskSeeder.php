<?php

namespace Database\Seeders;

use App\Models\TacheModel;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        Task::factory()->count(50)->create();
    }
}

