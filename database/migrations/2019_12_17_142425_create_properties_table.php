<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('id');
            // RELACIONAMENTOS
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('progress_id')->unsigned();
            // TIPOS NAO RELACIONADOS
            $table->enum('owner_user', ['S', 'N']);         // S => Sim, N => Nao
            $table->enum('advertise_type', ['A', 'V']);     // A => Alugar, V => Vender
            $table->enum('group_type', ['C', 'R']);         // C => Comercial, R => Residencial
            // INFORMACOES BASICAS
			$table->smallInteger('bathroom');               // banheiros
			$table->smallInteger('bedroom');                // quartos (R) | salas (C)
			$table->smallInteger('master')->nullable();     // suites
			$table->smallInteger('parking');                // vagas
            $table->decimal('square_meter', 5, 2);          // area util (m²)
            // PRECOS
            $table->float('price', 8, 2);                   // preco (aluguel ou venda)
            $table->float('condo_fee', 8, 2)->nullable();   // preco condominio
            $table->float('tax_fee', 8, 2)->nullable();     // preco IPTU
            // DESCRICAO
            $table->text('description');
            // ENDERECO
			$table->string('address', 255);
			$table->string('number', 50);
			$table->string('comp', 100)->nullable();
			$table->string('neighborhood', 255);
            $table->string('zipcode', 8);
            // BUSINESS RULES
            $table->boolean('info_owner')->default(0);
            $table->boolean('info_docs')->default(0);
            $table->boolean('info_photos')->default(0);
            $table->boolean('status')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
