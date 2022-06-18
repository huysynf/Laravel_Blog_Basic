<?php

namespace Database\Seeders\Users;

use App\Models\User;
use App\Models\Users\Permission;
use App\Models\Users\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = config('role');

        // Create permissions
        foreach ($roles as $group => $role) {
            foreach ($role as $item)
            {
                Role::updateOrCreate([
                    'name' => $item,
                    'group' => $group
                ]);
            }
        }
        $mail = 'haqhuy1999@gmail.com';
        $admin = User::whereEmail($mail)->first();
        if(!$admin)
        {
            $admin = User::factory()->create(['email'=>$mail]);

        }
        $admin->assignRole('super-admin');

    }
}
