<?php

namespace Database\Seeders;

use App\Models\League;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LeaguesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        League::create(['nr' => 1, 'name' => 'Ekstraklapa',]);
        League::create(['nr' => 2, 'name' => '1 liga',]);
        League::create(['nr' => 3, 'name' => '2 liga',]);
        League::create(['nr' => 4, 'name' => '3 liga',]);
        League::create(['nr' => 5, 'name' => '4 liga',]);
        League::create(['nr' => 6, 'name' => '5 liga',]);
        League::create(['nr' => 7, 'name' => 'Okręgówka',]);
        League::create(['nr' => 8, 'name' => 'A Klasa',]);
        League::create(['nr' => 9, 'name' => 'B Klasa',]);
        League::create(['nr' => 10, 'name' => 'C Klasa',]);
        League::create(['nr' => 11, 'name' => 'Podwórkowa',]);

        // $data = [
        //     ['nr' => 1, 'name' => 'Ekstraklapa',],
        //     ['nr' => 2, 'name' => '1 liga',],
        //     ['nr' => 3, 'name' => '2 liga',],
        //     ['nr' => 4, 'name' => '3 liga',],
        //     ['nr' => 5, 'name' => '4 liga',],
        //     ['nr' => 6, 'name' => '5 liga',],
        //     ['nr' => 7, 'name' => 'Okręgówka',],
        //     ['nr' => 8, 'name' => 'A Klasa',],
        //     ['nr' => 9, 'name' => 'B Klasa',],
        //     ['nr' => 10, 'name' => 'C Klasa',],
        //     ['nr' => 11, 'name' => 'Podwórkowa',],
        // ];
        // foreach ($data as $d) {
        //     League::create($d);
        // }
    }
}
