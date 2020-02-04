<?php

namespace App\Services;

use App\Models\Feature;
use App\Models\PropertyFeature;
use App\Services\BaseService;
use Illuminate\Support\Arr;

class FeatureService extends BaseService
{
    /**
     * Checkbox values
     *
     * @return array
     */
    public static function options()
    {
        return Feature::orderBy('name', 'ASC')->where('status', '=', 1)->get();
    }

    /**
     * Monta a lista com paginacao
     *
     * @return array
     */
    public static function list()
    {
        // retorna a query para a busca do grid
        $query = Feature::orderBy('name', 'ASC');
        // cria uma collection com pagination para montar o grid
        parent::handlePagination($query);
        // efetua o tratamento no collection
        parent::customCollection();

		return [
			'data'     => parent::$collection,
			'paginate' => parent::$paginate,
		];
    }

    /**
     * Retorna todas as features de uma propriedade
     *
     * @param [type] $id
     * @return array
     */
    public static function featuresByProperty($id)
    {
        $query = PropertyFeature::select('feature_id AS id')->where('property_id', '=', $id);
        // cria uma collection com pagination para montar o grid
        parent::handleAlltoArray($query);
        // efetua o tratamento no collection
        static::customCollection();

		return parent::$collection ?? PropertyFeature::class;
    }

	/**
	 * Percorre a Collection e customiza dados para imprimir na view
	 *
	 * @return Collection
	 */
	public static function customCollection()
	{
        // recupera as features encontradas
        $features = Arr::flatten(parent::$collection);
        // limpa a collection
        parent::$collection = [];
        // realimenta a collection
        foreach ($features as $feature) {
            parent::$collection[$feature] = true;
        }
	}
}
