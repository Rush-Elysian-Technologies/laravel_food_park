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
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>Hash::make('12345'),


            ],
            [
                'name'=>'User',
                'email'=>'User@gmail.com',
                'role'=>'user',
                'password'=>Hash::make('54321'),


            ],
           
            ]);
    }
}
