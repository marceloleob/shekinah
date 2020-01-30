<?php

use App\Models\Progress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('progresses')->delete();
        // cria os registros
        Progress::create(['name' => 'Publicado', 'status' => 1]);
        Progress::create(['name' => 'Em análise', 'status' => 1]);
        Progress::create(['name' => 'Vendido ou Alugado', 'status' => 1]);
    }
}
