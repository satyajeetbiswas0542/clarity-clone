<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' => 'Admin Role',
			'level' => 1,
        ]);
		
		DB::table('roles')->insert([
            'name' => 'Expert',
            'slug' => 'expert',
            'description' => 'Expert Role',
			'level' => 2,
        ]);
		
		DB::table('roles')->insert([
            'name' => 'User',
            'slug' => 'user',
            'description' => 'User Role',
			'level' => 3,
        ]);
    }
}
