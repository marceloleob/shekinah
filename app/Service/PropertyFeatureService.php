<?php

namespace App\Service;

use App\Service\BaseService;
use App\Models\PropertyFeature;

class PropertyFeatureService extends BaseService
{
    /**
     * Retorna todas as features de uma propriedade
     *
     * @param integer $id
     * @return Collection
     */
    // public static function findByProperty($id)
    // {
    //     // verifica se foi informado uma propriedade
    //     if (empty($id)) {
    //         return new PropertyFeature;
    //     }

    //     // monta uma query
    //     $query = PropertyFeature::join('features', 'features.id', '=', 'property_features.feature_id')
    //         ->select(
    //             'property_features.id AS id',
    //             'feature_id',
    //             'features.name AS name'
    //         )
    //         ->where('property_features.property_id', '=', $id);

    //     // cria uma collection com pagination para montar o grid
    //     parent::handleAll($query);

	// 	return parent::$collection ?? new PropertyFeature;
    // }

    /**
     * Retorna um array simples das caracteristicas postadas no formulario
     *
     * @param integer $id
     * @return array
     */
    public static function flattenPost($features)
    {
        return array_flatten($features);
    }

    /**
     * Retorna um array simples das caracteristicas existentes no banco de dados
     *
     * @param integer $id
     * @return array
     */
    public static function flattenDB($id)
    {
        $features = PropertyFeature::select('feature_id')->where('property_id', '=', $id)->get();

        return array_flatten($features->toArray());
    }

    /**
     * Recupera todas as novas caracteristicas checadas no formulario e adiciona no banco
     *
     * @param integer $propertyId
     * @param array $featuresPost
     * @param array $featuresDB
     * @return boolean
     */
    public static function create($propertyId, $featuresPost, $featuresDB)
    {
        // recupera apenas as features adicionadas
        $newFeatures = array_diff($featuresPost, $featuresDB);
        // verifica se nao teve nenhuma adicionada
        if (!count($newFeatures)) {
            return false;
        }
        // adiciona as features ao anuncio
        foreach ($newFeatures as $feature) {
            // relaciona a feature com a propriedade
            PropertyFeature::store([
                'property_id' => $propertyId,
                'feature_id'  => $feature,
            ]);
        }
        // adicionado
        return true;
    }

    /**
     * Recupera todas as caracteristicas excluidas no formulario e exclui no banco
     *
     * @param integer $propertyId
     * @param array $featuresDB
     * @param array $featuresPost
     * @return boolean
     */
    public static function delete($propertyId, $featuresDB, $featuresPost)
    {
        // recupera apenas as features excluidas
        $delFeatures = array_diff($featuresDB, $featuresPost);
       // verifica se nao teve nenhuma excluida
       if (!count($delFeatures)) {
            return false;
        }
        // exclui no banco
        return PropertyFeature::where('property_id', '=', $propertyId)->where('feature_id', '=', $delFeatures)->delete();
    }

    /**
     * Efetua o tratamento das caracteristicas alteradas no formulario
     *
     * @param integer $propertyId
     * @param array $features
     * @return void
     */
    public static function store($propertyId, $features)
    {
        $featuresPost = self::flattenPost($features);
        $featuresDB   = self::flattenDB($propertyId);

        // tratamento das novas caracteristicas
        self::create($propertyId, $featuresPost, $featuresDB);
        // tratamento das caracteristicas excluidas
        self::delete($propertyId, $featuresDB, $featuresPost);
    }
}
