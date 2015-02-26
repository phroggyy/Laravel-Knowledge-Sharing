<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Committee;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('CommitteeSeeder');
		$this->command->info('Committee table seeded!');
	}

}

class CommitteeSeeder extends Seeder {
	public function run()
	{
		Committee::create(['name' => 'AFET']);
		Committee::create(['name' => 'INTA I']);
		Committee::create(['name' => 'INTA II']);
		Committee::create(['name' => 'AGRI']);
		Committee::create(['name' => 'IMCO']);
		Committee::create(['name' => 'LIBE I']);
		Committee::create(['name' => 'LIBE II']);
		Committee::create(['name' => 'SEDE I']);
		Committee::create(['name' => 'SEDE II']);
		Committee::create(['name' => 'ITRE']);
	}
}