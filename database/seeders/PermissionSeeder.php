<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            ['name' => 'user_management_access'],
            ['name' => 'permission_access'],
            ['name' => 'role_access'],
            ['name' => 'user_access'],
            ['name' => 'general_access'],
        ];

        Permission::insert($permissions);
    }
}
