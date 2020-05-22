<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $User = [
            'name' => 'Admin',
            'email' => 'kate@domain.com',
            'password' => HASH::make('changeme'),
        ];
        // $User = [
        //     'name' => 'Sally',
        //     'email' => 'sally@gmail.com',
        //     'password' => HASH::make('changeme'),
        // ];
        User::create($User);
    }
}
