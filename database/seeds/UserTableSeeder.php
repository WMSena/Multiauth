<?php

use Illuminate\Database\Seeder;
use App\User;
use App\role;
class UserTableSeeder extends Seeder
{
  public function run()
  {
    $role_employee = Role::where('name', 'employee')->first();
    $role_manager  = Role::where('name', 'manager')->first();

    $employee = new User();
    $employee->name = 'Sean';
    $employee->email = 'sean@example.com';
    $employee->password = bcrypt('123456');
    $employee->save();
    $employee->roles()->attach($role_employee);

    $manager = new User();
    $manager->name = 'Sena';
    $manager->email = 'sena@example.com';
    $manager->password = bcrypt('123456');
    $manager->save();
    $manager->roles()->attach($role_manager);
  }
}