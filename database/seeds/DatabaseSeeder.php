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
        // Seeder Role
		$this->call(RoleTableSeeder::class);
		// Seeder User
		$this->call(UserTableSeeder::class);
    }
}
