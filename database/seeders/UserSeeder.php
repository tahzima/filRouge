<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(["name"=>"laaraich",
            "prenom"=>"mohammed",
            'email' => 'mohammed@gmail.com',
            'password' => Hash::make('mohammed'),
            "cin"=>"K6721783",
            "role"=>"user",
            "tel"=>"0603060330",
            "action"=>2
        ]);
    }
}
