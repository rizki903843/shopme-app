<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['superadmin','customer'];

        foreach ($roles as $key => $item) {
            $role = Role::updateOrCreate([
                'id' => $key + 1
            ], [
                'name' => $item
            ]);

            $user = User::updateOrCreate([
                'id' => $key + 1
            ],[
                'name' => $item,
                'email' => $item.'@mail.com',
                'password' => bcrypt('123'),
            ]);

            $userRole = UserRole::updateOrCreate([
                'user_id' => $user->id,
                'role_id' => $role->id
            ],[]);
        }
    }
}
