<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertyFeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // limpa a tabela
        DB::table('property_features')->delete();
    }
}
