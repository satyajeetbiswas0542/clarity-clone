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
            'first_name' => 'sukanta',
            'last_name'  => 'h',
            'email' => 'sukanta@appsoft.in',
            'password' => bcrypt('12345678'),
        ]);
    }
}
