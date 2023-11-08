<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    public function run()
    {
        $roles = [
            [
                'id'    => 1,
                'title' => 'Administrator',
            ],
            [
                'id'    => 2,
                'title' => 'Super Admin',
            ],
            [
                'id'    => 3,
                'title' => 'Manager',
            ],
            [
                'id'    => 4,
                'title' => 'Staff',
            ],
            [
                'id'    => 5,
                'title' => 'User',
            ],
        ];

        Role::insert($roles);
    }
}
