<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Seeder;
use Database\Seeders\TaskSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\CategorySeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,

        ]);

        Category::factory(50)->create();
        Task::factory(30)->create();
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
