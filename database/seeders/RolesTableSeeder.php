<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['title' => 'pending',]);
        Role::create(['title' => 'user',]);
        Role::create(['title' => 'retired',]);
        Role::create(['title' => 'ban',]);
        Role::create(['title' => 'admin',]);
    }
}
