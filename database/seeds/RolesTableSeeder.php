<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
<<<<<<< HEAD

class RolesTableSeeder extends Seeder
{
	protected $roles = [
		[
			'name' => 'Super Admin',
		],
	];
=======
use Spatie\Permission\Models\Permission;

class RolesTableSeeder extends Seeder
{
    protected $roles = [
        [
            'name' => 'superadmin',
            'guard_name' => 'admin',
        ],
        [
            'name' => 'admin',
            'guard_name' => 'admin',
        ],
    ];

>>>>>>> a3d5f9a965df91611a581cb0824bc407fb3bae26
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        foreach ($this->roles as $key => $role) {
        	$vars = [
        		'name' => $role['name'],
        	];

        	\DB::beginTransaction();
        		Role::create($vars);
        	\DB::commit();
        }
=======
        foreach($this->roles as $key => $role):
            $data = [
                'name' => $role['name'],
                'guard_name' => $role['guard_name'],
            ];

            $this->create($data);
        endforeach;

        $this->assignAllPermissions();
    }

    private function create($data)
    {
        \DB::beginTransaction();
            Role::create($data);
        \DB::commit();
    }

    private function assignAllPermissions()
    {
        $permissions = Permission::all();
        $superadmin = Role::where('name', 'superadmin')->first();

        foreach($permissions as $permission):
            $superadmin->givePermissionTo($permission->name);
        endforeach;
>>>>>>> a3d5f9a965df91611a581cb0824bc407fb3bae26
    }
}
