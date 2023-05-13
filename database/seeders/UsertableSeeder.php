<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsertableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create(
            //superadmin
            [
            'name'=>"super admin",
            'email'=>"superadmin@gmail.com",
            'password'=>Hash::make('password'),
            'user_name'=>"@superadmin",
            'role_id'=>1,
            ]);

        // user
        User::create( [
            'name'=>"user",
            'email'=>"user@gmail.com",
            'password'=>Hash::make('password'),
            'user_name'=>"@user",
            'role_id'=>3,
        ]);
        //admin create
        User::create( [
            'name'=>"admin",
            'email'=>"admin@gmail.com",
            'password'=>Hash::make('password'),
            'user_name'=>"@admin",
            'role_id'=>2,
            ],);

    }
}
