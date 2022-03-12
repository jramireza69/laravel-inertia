<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            "name" => "jramireza69",
            "email" => "app@mail.com",
            "password" => bcrypt("password"),
        ]);

        User::factory()->create([
            "name" => "admin",
            "email" => "admin@mail.com",
            "password" => bcrypt("password"),
        ]);

        Project::factory(200)->create();
    }
}

