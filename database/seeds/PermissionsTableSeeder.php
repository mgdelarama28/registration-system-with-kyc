<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    protected $permissions = [
        'admins' => [
            [
                'name' => 'index',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'create',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'show',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'edit',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'update',
                'guard_name' => 'admin',
            ],
            [
                'name' => 'destroy',
                'guard_name' => 'admin',
            ],
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->permissions as $key => $permissionsArray):
            foreach($permissionsArray as $item):
                $data = [
                    'name' => $key . '.' . $item['name'],
                    'guard_name' => $item['guard_name'],
                ];

                $this->create($data);
            endforeach;
        endforeach;
    }

    private function create($data)
    {
        \DB::beginTransaction();
            Permission::create($data);
        \DB::commit();
    }
}
