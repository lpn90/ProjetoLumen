<?php

/**
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 16:12
 */
use Illuminate\Database\Seeder;

class PessoaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeAgenda\Entities\Pessoa::class, 30)->create();
    }
}