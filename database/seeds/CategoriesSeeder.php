<?php

use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
	{
        DB::table('categories')->insert([
			['name' => 'Economia', 'active' => 1],
			['name' => 'Política', 'active' => 1],
			['name' => 'Policial', 'active' => 1],
			['name' => 'Esportes', 'active' => 1],
			['name' => 'Meio Ambiente', 'active' => 1],
			['name' => 'Cultura', 'active' => 1],
			['name' => 'Turismo', 'active' => 1],
			['name' => 'Educação', 'active' => 1],
			['name' => 'Serviços', 'active' => 1],
			['name' => 'Saúde', 'active' => 1]
		]);
    }
}
