<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\FirstName;
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



        //\App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            UserTableSeeder::class,
        ]);
        //\App\Models\User::factory(150)->create();

        $this->call([
            LeaguesTableSeeder::class,
            FootballersTableSeeder::class,
            SeasonsTableSeeder::class,
            //MembersListsTableSeeder::class,
            RolesTableSeeder::class,
            RoleUserTableSeeder::class,
            PermissionsTableSeeder::class,
            PermissionRoleTableSeeder::class,
        ]);
    }
}
