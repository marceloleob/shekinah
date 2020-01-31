<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('users')->delete();
        // cria os registros
        User::create([
            'name'      => 'Marcelo Leopold',
            'email'     => 'marceloleob@gmail.com',
            'password'  => bcrypt('marcelo06'),
            'cpf'       => '015.793.366-04',
            'born'      => '1985-08-12',
            'phone'     => '(31) 98756-4062',
            'rule'      => 1,
            'status'    => 1,
        ]);
        // cria os registros
        User::create([
            'name'      => 'Iná Batista',
            'email'     => 'ina.batista@creci.org.br',
            'password'  => bcrypt('ina123456'),
            'cpf'       => '287.865.324-64',
            'born'      => '1970-08-12',
            'phone'     => '(11) 99869-0914',
            'rule'      => 1,
            'status'    => 1,
        ]);
    }
}
