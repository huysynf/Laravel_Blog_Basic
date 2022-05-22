<?php

namespace Database\Seeders\Users;

use App\Models\Users\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Data permissions
        $permissions = config('permission.all');

        // Create permissions
        foreach ($permissions as $group => $permission) {
           foreach ($permission as $item)
           {
               Permission::updateOrCreate([
                   'name' => $item,
                   'group' => $group
               ]);
           }
        }
    }
}
