<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name'=>'Srinivas',
                'email'=>'srinu@gmail.com',
                'role'=>'admin',
                'password'=>Hash::make('98484'),


            ],
            [
                'name'=>'Ramasai',
                'email'=>'Ramasai@gmail.com',
                'role'=>'user',
                'password'=>Hash::make('924643'),


            ],
            [
                'name'=>'Krishna',
                'email'=>'Krishnasai@gmail.com',
                'role'=>'user',
                'password'=>Hash::make('636334'),


            ],
           
            ]);
    }
}
