<?php

namespace Database\Seeders;

use App\Models\Footballer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FootballersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footballer::create(['nr' => 1, 'name' => 'Filip Bednarek', 'nickname' => 'Benny', 'position' => 'GK', 'status' => 'active']);
    }
}
