<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        DB::table('users')->truncate();
        $users = [
            ['name' => 'customer', 'email' => 'customer@test.com', 'password' => Hash::make('admin')],
            ['name' => 'member', 'email' => 'member@test.com', 'password' => Hash::make('admin')],
        ];
            
        foreach ($users as $user) {
            User::create($user);
        }

        DB::table('admins')->truncate();
        $admins = [
            ['name' => 'superadmin', 'email' => 'superadmin@test.com', 'password' => Hash::make('admin')],
            ['name' => 'administrator', 'email' => 'administrator@test.com', 'password' => Hash::make('admin')],
        ];
            
        foreach ($admins as $admin) {
            Admin::create($admin);
        }

        Model::reguard();
    }
}
