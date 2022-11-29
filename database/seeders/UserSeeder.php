<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Engineer',
                'username' => 'en',
                'email' => 'en@gmail.com',
                'password' => bcrypt('121212'),
                'level' => 1,
            ],
            [
                'name' => 'Administrator1',
                'username' => 'admin1',
                'email' => 'admin1@gmail.com',
                'password' => bcrypt('123123'),
                'level' => 2,
            ],
            [
                'name' => 'Administrator2',
                'username' => 'admin2',
                'email' => 'admin2@gmail.com',
                'password' => bcrypt('321321'),
                'level' => 2,
            ],
            [
                'name' => 'Chief Executive Officer',
                'username' => 'ceo',
                'email' => 'ceo@gmail.com',
                'password' => bcrypt('135135'),
                'level' => 2,
            ],
            [
                'name' => 'Leader',
                'username' => 'leader',
                'email' => 'leader@gmail.com',
                'password' => bcrypt('101010'),
                'level' => 2,
            ],
            [
                'name' => 'Support',
                'username' => 'support',
                'email' => 'support@gmail.com',
                'password' => bcrypt('171717'),
                'level' => 3,
            ],
            [
                'name' => 'Partners',
                'username' => 'ptn',
                'email' => 'ptn@gmail.com',
                'password' => bcrypt('191919'),
                'level' => 3,
            ],
            [
                'name' => 'Affandi',
                'username' => 'affan',
                'email' => 'affan@gmail.com',
                'password' => bcrypt('affan123'),
                'level' => 4,
            ],
        ];

        foreach($user as $key => $value)
        {
            User::create($value);
        }
    }
}
