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
        //
        DB::table('users')->insert([
           [
            'username' => 'admin',
            'email' => 'hola@ekn.dev',
            'password' => bcrypt('12345'),
            'isAdmin' => true
           ],
           [
           'username' => 'ekn',
           'email' => 'otra@ekn.dev',
           'password' => bcrypt('12345'),
           'isAdmin' => false
            ]
        ]);
    }
}
