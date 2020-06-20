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
        $user = new \App\User([
            'name' => 'Василий Пупкин',
            'email' => 'admin@test.com',
            'password' => bcrypt('secret'),
        ]);

        $user->save();
    }
}
