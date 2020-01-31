<?php

use App\Models\PropertyType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('property_types')->delete();
        // cria os registros residenciais
        PropertyType::create(['group' => 'R', 'slug' => 'apartamento', 'name' => 'Apartamento', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'barracao', 'name' => 'Barracão', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'casa', 'name' => 'Casa', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'casa-em-condominio', 'name' => 'Casa em condomínio', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'casa-geminada', 'name' => 'Casa geminada', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'chacara', 'name' => 'Chácara / Sítio', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'cobertura', 'name' => 'Cobertura', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'duplex', 'name' => 'Dúplex', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'fazenda', 'name' => 'Fazenda', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'flat', 'name' => 'Flat', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'lote-comum', 'name' => 'Lote comum', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'lote-em-condominio', 'name' => 'Lote em condomínio', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'sobrado', 'name' => 'Sobrado', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'sobre-loja', 'name' => 'Sobre-loja', 'status' => 1]);
        PropertyType::create(['group' => 'R', 'slug' => 'triplex', 'name' => 'Triplex', 'status' => 1]);
        // cria os registros comerciais
        PropertyType::create(['group' => 'C', 'slug' => 'casa-comercial', 'name' => 'Casa comercial', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'consultorio', 'name' => 'Consultório', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'clinica', 'name' => 'Clínica', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'deposito', 'name' => 'Depósito', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'galpao', 'name' => 'Galpão', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'estacionamento', 'name' => 'Estacionamento', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'industria-ou-fabrica', 'name' => 'Indústria / Fábrica', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'garagem', 'name' => 'Garagem', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'haras', 'name' => 'Haras', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'hotel-motel-pousada', 'name' => 'Hotel / Motel / Pousada', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'loja', 'name' => 'Loja', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'lote-comercial', 'name' => 'Lote / Terreno', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'ponto-ou-box', 'name' => 'Ponto comercial / Box', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'predio-comercial', 'name' => 'Prédio', 'status' => 1]);
        PropertyType::create(['group' => 'C', 'slug' => 'sala-comercial', 'name' => 'Sala', 'status' => 1]);
    }
}



























































