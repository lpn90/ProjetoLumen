<?php

/**
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 16:00
 */

use Illuminate\Database\Seeder;

class TelefoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeAgenda\Entities\Telefone::class, 80)->create();
    }

}