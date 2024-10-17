<?php

namespace Database\Seeders;

use App\Models\Feedback;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
       $this->call([
        FeedbackSeeder::class,
       ]);
    }
}
