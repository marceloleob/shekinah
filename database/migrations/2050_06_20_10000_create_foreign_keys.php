<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // RELACIONAMENTOS COM - CITIES
		Schema::table('cities', function(Blueprint $table) {
			$table->foreign('state_id')->references('id')->on('states')->onDelete('no action')->onUpdate('no action');
        });

        // RELACIONAMENTOS COM - PROPERTIES
        Schema::table('properties', function(Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('no action')->onUpdate('no action');
            $table->foreign('type_id')->references('id')->on('property_types')->onDelete('no action')->onUpdate('no action');
            $table->foreign('city_id')->references('id')->on('cities')->onDelete('no action')->onUpdate('no action');
            $table->foreign('progress_id')->references('id')->on('progresses')->onDelete('no action')->onUpdate('no action');
        });
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
	public function down()
	{
        // RELACIONAMENTOS COM - CITIES
		Schema::table('cities', function(Blueprint $table) {
            $table->dropForeign('cities_state_id_foreign');
            $table->dropColumn('state_id');
        });

        // RELACIONAMENTOS COM - PROPERTIES
        Schema::table('properties', function(Blueprint $table) {
            $table->dropForeign('properties_user_id_foreign');
            $table->dropColumn('user_id');

            $table->dropForeign('properties_type_id_foreign');
            $table->dropColumn('type_id');

            $table->dropForeign('properties_city_id_foreign');
            $table->dropColumn('city_id');

            $table->dropForeign('properties_progress_id_foreign');
            $table->dropColumn('progress_id');
        });
    }
}
