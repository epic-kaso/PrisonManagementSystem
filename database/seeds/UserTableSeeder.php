<?php
use Illuminate\Database\Seeder;
use PrisonManagementSystem\User;

/**
 * Created by PhpStorm.
 * User: kasoprecede47
 * Date: 7/14/2015
 * Time: 3:29 PM
 */
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $user = new User();
        $user->email = "admin@admin.com";
        $user->role = "admin";
        $user->last_name = "Admin";
        $user->first_name = "Admin";
        $user->sex = "male";
        $user->address = "Head Office";
        $user->password = bcrypt('password');
        $user->save();
    }
}
