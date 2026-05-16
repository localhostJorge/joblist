<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Job::factory(50)->create();

        User::factory()->create([
            'admin' => true,
        ]);
    }
}