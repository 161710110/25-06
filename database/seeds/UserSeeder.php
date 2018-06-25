<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Membuat role admin
        $adminRole = new Role();
        $adminRole->name ="admin";
        $adminRole->display_name = "admin";
        $adminRole->save();

        //Membuat role user
        $userRole = new Role();
        $userRole->name ="user";
        $userRole->display_name = "user";
        $userRole->save();

        //Membuat sample admin
        $admin = new User();
        $admin->name ="Admin";
        $admin->email ="Admin@gmail.com";
        $admin->password = bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        //Membuat sample user
        $user = new User();
        $user->name ="sample user";
        $user->email ="user@gmail.com";
        $user->password = bcrypt('rahasia');
        $user->save();
        $user->attachRole($userRole);

    }
}
