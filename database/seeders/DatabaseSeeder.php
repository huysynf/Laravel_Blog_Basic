<?php

namespace Database\Seeders;

use Database\Seeders\Users\PermissionDatabaseSeeder;
use Database\Seeders\Users\RoleDatabaseSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(PermissionDatabaseSeeder::class);
        $this->call(RoleDatabaseSeeder::class);
    }
}
