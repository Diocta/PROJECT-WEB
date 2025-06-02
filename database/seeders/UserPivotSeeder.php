<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserPivotSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            1 => ['roles' => [1]], // admin
            2 => ['roles' => [2]], // user biasa
        ];

        foreach ($roles as $id => $role) {
            $user = User::find($id);

            foreach ($role as $key => $ids) {
                $user->{$key}()->sync($ids);
            }
        }
    }
}
