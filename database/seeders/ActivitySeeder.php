<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        if (User::count() > 0) {
            User::all()->each(function ($user) {
                Activity::factory()->count(rand(10, 50))->create(['user_id' => $user->id]);
            });
        }
    }
}
