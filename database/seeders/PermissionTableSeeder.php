<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            'role-permission-list',

            'user-list',
            'user-create',
            'user-edit',
            'user-delete',

            'role-list',
            'role-create',
            'role-edit',
            'role-delete',

            'product-list',
            'product-create',
            'product-show',
            'product-edit',
            'product-delete'
        ];
        
        foreach ($permissions as $permission) {
            if (!Permission::where('name', $permission)->exists()) {
                Permission::create(['name' => $permission]);
            }
        }
    }

}
