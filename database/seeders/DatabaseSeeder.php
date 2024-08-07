<?php

namespace Database\Seeders;

use App\Models\Faq;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Faq::factory()->count(100)->create();

        User::factory()->create([
            'name' => 'Cody',
            'email' => 'cody@gmail.com',
        ]);
    }
}
