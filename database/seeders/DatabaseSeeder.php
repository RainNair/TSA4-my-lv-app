<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(['email' => 'admin@example.com'], [
            'name' => 'POS Administrator',
            'password' => 'password',
        ]);

        $today = now()->toDateString();
        $tasks = [
            ['title' => 'Review customer records', 'description' => 'Check the latest customer information.', 'task_date' => $today, 'status' => 'pending'],
            ['title' => 'Prepare daily sales summary', 'description' => 'Prepare the summary for today.', 'task_date' => $today, 'status' => 'pending'],
            ['title' => 'Verify user accounts', 'description' => 'Confirm account details are up to date.', 'task_date' => now()->addDay()->toDateString(), 'status' => 'pending'],
            ['title' => 'Complete system check', 'description' => 'Review the application before closing.', 'task_date' => now()->subDay()->toDateString(), 'status' => 'done'],
        ];

        foreach ($tasks as $task) {
            Task::firstOrCreate(['title' => $task['title']], $task);
        }
    }
}
