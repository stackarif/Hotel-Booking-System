<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $permissons = [
            [
                'name' => 'MediaController@index',
                'display_name' => 'Media Manager',
                'description' => 'Media'
            ],
            [
                'name' => 'DashboardController@index',
                'display_name' => 'View Dashboard',
                'description' => 'Dashboard'
            ],
            [
                'name' => 'ProfileController@index',
                'display_name' => 'View Profile',
                'description' => 'Profile'
            ],
            [
                'name' => 'ProfileController@update',
                'display_name' => 'Update Profile',
                'description' => 'Profile'
            ],
            [
                'name' => 'RoleController@index',
                'display_name' => 'View Role',
                'description' => 'Role'
            ],
            [
                'name' => 'RoleController@create',
                'display_name' => 'Create Role',
                'description' => 'Role'
            ],
            [
                'name' => 'RoleController@store',
                'display_name' => 'Store Role',
                'description' => 'Role'
            ],
            [
                'name' => 'RoleController@edit',
                'display_name' => 'Edit Role',
                'description' => 'Role'
            ],
            [
                'name' => 'RoleController@update',
                'display_name' => 'Update Role',
                'description' => 'Role'
            ],
            [
                'name' => 'RoleController@delete',
                'display_name' => 'Delete Role',
                'description' => 'Role'
            ],
            [
                'name' => 'UserController@index',
                'display_name' => 'View User',
                'description' => 'User'
            ],
            [
                'name' => 'UserController@store',
                'display_name' => 'Create User',
                'description' => 'User'
            ],
            [
                'name' => 'UserController@edit',
                'display_name' => 'Edit User',
                'description' => 'User'
            ],
            [
                'name' => 'UserController@update',
                'display_name' => 'Update User',
                'description' => 'User'
            ],
            [
                'name' => 'UserController@delete',
                'display_name' => 'Delete User',
                'description' => 'User'
            ],
            [
                'name' => 'PermissionController@index',
                'display_name' => 'View Permission',
                'description' => 'Permission'
            ],
            [
                'name' => 'PermissionController@store',
                'display_name' => 'Create Permission',
                'description' => 'Permission'
            ],
            [
                'name' => 'PermissionController@edit',
                'display_name' => 'Edit Permission',
                'description' => 'Permission'
            ],
            [
                'name' => 'PermissionController@update',
                'display_name' => 'Update Permission',
                'description' => 'Permission'
            ],
            [
                'name' => 'PermissionController@delete',
                'display_name' => 'Delete Permission',
                'description' => 'Permission'
            ],
            [
                'name' => 'ActivityLogController@index',
                'display_name' => 'Overall Activity',
                'description' => 'Activity'
            ],
            [
                'name' => 'UserController@activity',
                'display_name' => 'User Activity',
                'description' => 'Activity'
            ],
            [
                'name' => 'SettingsController@index',
                'display_name' => 'View Settings',
                'description' => 'Settings'
            ],
            [
                'name' => 'SettingsController@store',
                'display_name' => 'Store Settings',
                'description' => 'Settings'
            ],
            [
                'name' => 'SettingsController@update',
                'display_name' => 'Update Settings',
                'description' => 'Settings'
            ],
            [
                'name' => 'SettingsController@cache',
                'display_name' => 'Cache Clear',
                'description' => 'Settings'
            ],
            [
                'name' => 'SettingsController@updatePasswordForm',
                'display_name' => 'Edit Password',
                'description' => 'Settings'
            ],
            [
                'name' => 'SettingsController@updatePassword',
                'display_name' => 'Update Password',
                'description' => 'Settings'
            ],
        ];

        foreach ($permissons as $key => $value) {

            $permission = Permission::create([
                            'name' => $value['name'],
                            'display_name' => $value['display_name'],
                            'description' => $value['description']
                        ]);

            User::first()->attachPermission($permission);
        }
    }
}
