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
            'followers_count' => '0',
            'friends_count' => '0',
            'profile_image_url' => 'url',
            'ban' => 0,
            'id_str' => '931975002',
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
