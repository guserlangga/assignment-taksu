<?php

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
        \App\User::create([
            'name' => 'Default User',
            'email' => 'default@mail.com',
            'password' => bcrypt('password')
        ]);
    }
}
