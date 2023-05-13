<?php

namespace Database\Seeders;

use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Illuminate\Support\Str;

class RoleTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //user role define
        $roles = ['super-admin','admin','user'];
        foreach($roles as $role){
            Role::create([
                'role_name'=> $role,
                'role_slug'=> Str::slug($role),
            ]);
        }
    }
}
