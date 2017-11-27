<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	DB::table('users')->insert([
            'name' => 'Agust Einar',
            'email' => 'agust.e.agustsson@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('threads')->insert([
            ['title' => 'Titill A', 'body' => 'body fyrir titil A', 'user_id' => 1] ,

            ['title' => 'Titill B', 'body' => 'body fyrir titil B', 'user_id' => 1] ,

            ['title' => 'Titill C', 'body' => 'body fyrir titil C', 'user_id' => 1] ,

            ['title' => 'Titill D', 'body' => 'body fyrir titil D', 'user_id' => 1] ,

            ['title' => 'Titill E', 'body' => 'body fyrir titil E', 'user_id' => 1]
        ]);

        DB::table('comments')->insert([
            ['id' => 1, 'body' => 'body fyrir comment A', 'user_id' => 1, 'thread_id' => 1] ,

            ['id' => 2, 'body' => 'body fyrir comment B', 'user_id' => 1, 'thread_id' => 2] ,

            ['id' => 3, 'body' => 'body fyrir comment C', 'user_id' => 1, 'thread_id' => 1] ,

            ['id' => 4, 'body' => 'body fyrir comment D', 'user_id' => 1, 'thread_id' => 3] ,

            ['id' => 5, 'body' => 'body fyrir comment E', 'user_id' => 1, 'thread_id' => 2]
        ]);

    }
}
