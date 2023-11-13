<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    public function run()
    {
        $user1 = User::findOrFail(1);
        $user1->roles()->sync(1);
        $user2 = User::findOrFail(2);
        $user2->roles()->sync(2);
        $user3 = User::findOrFail(3);
        $user3->roles()->sync(3);
        $user4 = User::findOrFail(4);
        $user4->roles()->sync(4);
        $user5 = User::findOrFail(5);
        $user5->roles()->sync(5);

        foreach($user1->roles as $role){
            $user1->permissions()->attach($role->permissions);
        }
        foreach($user2->roles as $role){
            $user2->permissions()->attach($role->permissions);
        }
        foreach($user3->roles as $role){
            $user3->permissions()->attach($role->permissions);
        }
        foreach($user4->roles as $role){
            $user4->permissions()->attach($role->permissions);
        }
        foreach($user5->roles as $role){
            $user5->permissions()->attach($role->permissions);
        }
    }
}
