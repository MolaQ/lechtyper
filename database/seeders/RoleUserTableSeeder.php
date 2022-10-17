<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::find(1)->roles()->attach([2, 3, 4]);
        // User::find(1)->roles()->attach([3]);
        // User::find(1)->roles()->attach([4]);
        User::find(2)->roles()->attach([2]);
    }
}
