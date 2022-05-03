<?php

namespace Database\Seeders\Users;

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
    }
}
