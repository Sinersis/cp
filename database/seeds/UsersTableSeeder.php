<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $users = [
            [
                'name' => 'User Admin',
                'email' => 'admin@test.com',
                'password' => bcrypt('secret'),
                'role' => 1
            ],
            [
                'name' => 'User Customer',
                'email' => 'user@test.com',
                'password' => bcrypt('secret'),
                'role' => 2
            ],
        ];


        foreach ($users as $user) {
            $user = new \App\User([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'role' => $user['role'],
            ]);

            $user->save();
        }



    }
}
