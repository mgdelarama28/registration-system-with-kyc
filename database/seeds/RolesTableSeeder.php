<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesTableSeeder extends Seeder
{
	protected $roles = [
		[
			'name' => 'Super Admin',
		],
	];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->roles as $key => $role) {
        	$vars = [
        		'name' => $role['name'],
        	];

        	\DB::beginTransaction();
        		Role::create($vars);
        	\DB::commit();
        }
    }
}
