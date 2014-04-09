<?php

class UsersTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('roles')->truncate();
		DB::table('users')->truncate();

		$now = date('Y-m-d H:i:s');

		$roles = array(array('name'=>'admin'), array('name'=>'user'), array('name'=>'moderator'));
		DB::table('roles')->insert($roles);

		for ($i = 0; $i <= 100; $i++) {
			$data['username'] = 'Traveler '.$i;
			$data['password'] = MD5('testing');
			$data['created_at'] = $now;
			$data['updated_at'] = $now;
			$data['role_id'] = array_rand($roles, 1) + 1;
			$datas[] = $data;
		}

		DB::table('users')->insert($datas);
	}
}