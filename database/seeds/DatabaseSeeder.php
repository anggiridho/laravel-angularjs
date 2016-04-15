<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

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
        
        DB::table('users')->delete();
        $users = [
            ['name' => 'superadmin', 'email' => 'superadmin@test.com', 'password' => Hash::make('admin')],
            ['name' => 'administrator', 'email' => 'administrator@test.com', 'password' => Hash::make('admin')],
        ];
            
        foreach ($users as $user) {
            User::create($user);
        }

        Model::reguard();
    }
}
