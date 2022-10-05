<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Mol4k',
            'screen_name' => 'Marcin Molak',
            'description' => 'description',
            'followers_count' => '828',
            'friends_count' => '408',
            'profile_image_url' => 'http://pbs.twimg.com/profile_images/1451511299914014726/6SIk9zIG_normal.jpg',
            'id_str' => '931975002',
        ]);
        User::create([
            'name' => '#lechtyper',
            'screen_name' => 'LechTYPER',
            'description' => 'Typer Sympatyków Kolejorza #Lech #Poznań #SzukamPracy :)',
            'followers_count' => '8',
            'friends_count' => '9',
            'profile_image_url' => 'http://pbs.twimg.com/profile_images/730367562157010944/GGssUJOW_normal.jpg',
            'id_str' => '1036937539',
        ]);
    }
}

// $table->string('name');
// $table->string('screen_name');
// $table->string('description');
// $table->string('followers_count');
// $table->string('friends_count');
// $table->string('profile_image_url');
// $table->boolean('ban')->default(0);
// $table->string('id_str');
