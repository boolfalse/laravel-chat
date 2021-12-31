<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => "User 1",
            'email' => "user1@pusher.com",
            'password' => bcrypt("password"),
        ]);

        User::create([
            'name' => "User 2",
            'email' => "user2@pusher.com",
            'password' => bcrypt("password"),
        ]);
    }
}
