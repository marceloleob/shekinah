<?php

use App\Models\Feature;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('features')->delete();
        // cria os registros
        Feature::create(['name' => 'Piscina', 'status' => 1]);
        Feature::create(['name' => 'Academia', 'status' => 1]);
        Feature::create(['name' => 'Churrasqueira', 'status' => 1]);
        Feature::create(['name' => 'Varanda comum', 'status' => 1]);
        Feature::create(['name' => 'Varanda gourmet', 'status' => 1]);
        Feature::create(['name' => 'Sauna', 'status' => 1]);
        Feature::create(['name' => 'Playground', 'status' => 1]);
        Feature::create(['name' => 'Quadra poliesportiva', 'status' => 1]);
        Feature::create(['name' => 'Vaga demarcada', 'status' => 1]);
        Feature::create(['name' => 'Vaga desmarcada', 'status' => 1]);
        Feature::create(['name' => 'Próximo ao comércio', 'status' => 1]);
        Feature::create(['name' => 'Portaria 24 horas', 'status' => 1]);
        Feature::create(['name' => 'Salão de festas', 'status' => 1]);
        Feature::create(['name' => 'Próximo de escolas', 'status' => 1]);
        Feature::create(['name' => 'Elevador', 'status' => 1]);
        Feature::create(['name' => 'Box de vidro', 'status' => 1]);
        Feature::create(['name' => 'Armários embutidos', 'status' => 1]);
        Feature::create(['name' => 'Mobiliado', 'status' => 1]);
        Feature::create(['name' => 'Bicicletário', 'status' => 1]);
        Feature::create(['name' => 'Área de serviço', 'status' => 1]);
        Feature::create(['name' => 'Câmeras de segurança', 'status' => 1]);
        Feature::create(['name' => 'Gás encanado', 'status' => 1]);
        Feature::create(['name' => 'Salão de jogos', 'status' => 1]);
        Feature::create(['name' => 'Jardim', 'status' => 1]);
        Feature::create(['name' => 'Pista de cooper', 'status' => 1]);
        Feature::create(['name' => 'Quintal', 'status' => 1]);
        Feature::create(['name' => 'Sistema de alarme', 'status' => 1]);
        Feature::create(['name' => 'Interfone', 'status' => 1]);
    }
}
