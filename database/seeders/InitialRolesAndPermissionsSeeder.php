<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class InitialRolesAndPermissionsSeeder extends Seeder
{
    public function run()
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions with safe check
        $permissions = [
            'view dashboard',
            'admin dashboard',
            'manage vendors',
            'manage customers',
            'manage entities',
            'manage warehouses',
            'manage customer types',
            'manage countries',
            'manage product categories',
            'manage products',
            'manage suppliers',
            'manage inventory',
            'manage orders',
            'create roles',
            'assign permissions',
            'manage invoices',
            'manage reports',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(
                ['name' => $permission, 'guard_name' => 'web'],
                ['name' => $permission, 'guard_name' => 'web']
            );
        }

        $superAdminRole = Role::firstOrCreate(['name' => 'super-admin']);
        $superAdminRole->syncPermissions(Permission::all());

        $adminPermissions = [
            'view dashboard',
            'admin dashboard',
            'manage vendors',
            'manage customers',
            'manage entities',
            'manage warehouses',
            'manage customer types',
            'manage countries',
            'manage product categories',
            'manage products',
            'manage suppliers',
            'manage inventory',
            'manage orders',
            'manage invoices'
        ];

        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $adminRole->syncPermissions($adminPermissions);

        User::where('type', 'admin')->each(function ($user) use ($superAdminRole) {
            if (!$user->hasRole($superAdminRole)) {
                $user->assignRole($superAdminRole);
            }
        });

        $superAdminEmail = 'superadmin@swisscaviarlieri.com';
        $superAdminUser = User::firstOrCreate(
            ['email' => $superAdminEmail],
            [
                'name' => 'Super Admin',
                'password' => bcrypt('admin@123'),
                'type' => 'super-admin'
            ]
        );
        $superAdminUser->syncRoles($superAdminRole);
    }
}