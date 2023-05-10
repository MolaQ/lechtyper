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
        Footballer::create(['nr' => 1, 'name' => 'Filip Bednarek', 'nickname' => 'Benny', 'position' => 'GK', 'status' => 'Aktywny']);
        Footballer::create(['nr' => 9, 'name' => 'Mikael Ishak', 'nickname' => 'Papa', 'position' => 'F', 'status' => 'Aktywny']);
        Footballer::create(['nr' => 21, 'name' => 'Michał Skóraś', 'nickname' => 'Skóra', 'position' => 'M', 'status' => 'Aktywny']);
        Footballer::create(['nr' => 37, 'name' => 'Lubomir Satka', 'nickname' => 'Siatka', 'position' => 'D', 'status' => 'Aktywny']);
    }
}
