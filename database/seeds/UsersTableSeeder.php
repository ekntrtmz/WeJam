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
        //  Staff Users
        //  All other User Seeding is done wthin JamsFactory
        DB::table('users')->insert([
           [
            'username' => 'admin',
            'email' => 'hola@ekn.dev',
            'password' => bcrypt('12345'),
            'isAdmin' => true
           ],
           [
            'username' => 'user',
            'email' => 'user@example.com',
            'password' => bcrypt('12345'),
            'isAdmin' => false
           ]
        ]);

        //  Create Users that own Jam Sessions, are co-hosts or promoters of jam sessions,
        //  users that like, join or perform (on) jam sessions
        factory('App\User', 50)->states('is-host')->create();
        //  50 x Users as Jam Session hosts
        factory('App\User', 10)->states('is-co_host')->create();
        //  10 x Users as random Jam Session co-hosts
        factory('App\User', 25)->states('is-promoter')->create();
        //  25 x Users as random Jam Session promoters

        factory('App\User', 150)->create();
        //  150 x Regular Users


    }

}
