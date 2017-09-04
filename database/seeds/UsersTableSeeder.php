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
        DB::table('users')->insert([
          [
            "name" => "joaquin",
            "email" => "garcia.jjimenez@gmail.com",
            "password" => bcrypt('undertaker97')
          ],
          [
            "name" => "marta",
            "email" => "marta@gmail.com",
            "password" => bcrypt('undertaker97')
          ]
        ]);
    }
}
