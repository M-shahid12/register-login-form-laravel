<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \app\Models\User::factory(10)->create();
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'professional']);
        Role::create(['name' => 'user']);
    }
}
