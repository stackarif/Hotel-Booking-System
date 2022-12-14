<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = Permission::all();

        foreach ($permissions as $key => $permission) {

            DB::table('permission_role')->insert([
                'permission_id' => $permission->id,
                'role_id'       => 1
            ]);

        }
    }
}
