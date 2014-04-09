<?php

class RolesTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('roles')->delete();
		$datas = [
			[
				'name' => 'admin'
			],[
				'name' => 'user'
			],[
				'name' => 'moderator'
			],
		];

		DB::table('roles')->insert($datas);
	}
}