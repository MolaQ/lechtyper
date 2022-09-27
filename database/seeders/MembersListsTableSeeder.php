<?php

namespace Database\Seeders;

use App\Models\MembersList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembersListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $u = 1;
        for ($j = 1; $j <= 11; $j++) {
            for ($i = 1; $i <= 12; $i++) {
                MembersList::create(['nr' => $u, 'season_id' => 1, 'league_id' => $j, 'user_id' => $u++]);
            }
        }
    }
}
