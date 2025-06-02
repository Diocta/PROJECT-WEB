<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolePivotSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            1 => ['permissions' => [1, 2, 3, 4]],
            2 => ['permissions' => [5]],
        ];

        foreach ($permissions as $id => $permission) {
            $role = Role::find($id);

            foreach ($permission as $key => $ids) {
                $role->{$key}()->sync($ids);
            }
        }
    }
}
