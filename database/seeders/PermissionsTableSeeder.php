<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['id' => 1, 'title' => 'user-access',]);
        Permission::create(['id' => 2, 'title' => 'task-access',]);
        Permission::create(['id' => 3, 'title' => 'retired-access',]);
        Permission::create(['id' => 4, 'title' => 'pending-access',]);
        Permission::create(['id' => 5, 'title' => 'admin-access',]);
        Permission::create(['id' => 6, 'title' => 'vip-access',]);
        Permission::create(['id' => 7, 'title' => 'ban-access',]);
    }
}
