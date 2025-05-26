<?php

namespace Database\Seeders;

use App\Enum\UserRoleEnum;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => UserRoleEnum::ADMIN->value, 'guard_name' => config('auth.defaults.guard')]);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@every3days.com',
            'password' => Hash::make('AdMInEveRy3DAyS1234$'),
            'email_verified_at' => now()
        ]);
        $admin->assignRole($adminRole);
    }
}
