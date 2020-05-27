<?php

use Carbon\Carbon;
use App\Models\Users\Admin;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
	protected $admins = [
		[
			'first_name' => 'App',
			'last_name' => 'Admin',
			'email' => 'admin@admin.com',
			'password' => 'password',
		],
	];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::truncate();

        DB::beginTransaction();

	        $this->command->info('Seeding Admin Users...');

	        foreach ($this->admins as $key => $admin) {
	        	$vars = [
	        		'first_name' => $admin['first_name'],
	        		'last_name' => $admin['last_name'],
	        		'email' => $admin['email'],
	        		'password' => Hash::make($admin['password']),
	        		'email_verified_at' => Carbon::now(),
	        	];

	        	Admin::create($vars);
	        }

		DB::commit();
		
		$this->assignSuperAdmin();
	}
	
	private function assignSuperAdmin()
    {
        $admin = Admin::where('email', 'admin@admin.com')->first();

        $admin->assignRole('superadmin');
    }
}
