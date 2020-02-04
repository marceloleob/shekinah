<?php

namespace App\Services;

use App\Models\Property;
use App\Models\PropertyType;
use App\Services\BaseService;

class PropertyTypeService extends BaseService
{
    /**
     * Select box values
     *
     * @param string $group
     * @return array
     */
    public static function options($group)
    {
        // busca pelos registros no banco
        return PropertyType::orderBy('name', 'ASC')
            ->where('status', '=', 1)
            ->where('group', '=', $group)
            ->pluck('name', 'id');
    }

    /**
     * Select combo No Ajax complete
     *
     * @param string $group
     * @return array
     */
    public static function optionsNoAjax($group)
    {
        // busca pelos registros no banco
        $options = self::options($group);
		// retorna o combobox pronto
		return $options->prepend('Tipo do imóvel', '');
    }

    /**
     * Select combo Ajax complete
     *
     * @param string $group
     * @param int $propertyTypeId
     * @return html
     */
    public static function optionsAjax($group, $propertyTypeId)
    {
        // busca pelos registros no banco
        $propertyType = self::options($group);
		// construindo as opcoes combobox
		$options = '<option value="">Tipo do imóvel</option>';

		// percorre os tipos de imovel
		foreach ($propertyType as $id => $name) {
			// verifica se existe categoria
			if ($propertyTypeId == $id) {
				// monta o html
				$options .= '<option value="' . $id . '" selected>' . $name . '</option>';
			} else {
				// monta o html
				$options .= '<option value="' . $id . '">' . $name . '</option>';
			}
        }
        // retorna o combobox pronto
		return $options;
    }

    /**
     * Select box values
     *
     * @return array
     */
    public static function optionsSearch()
    {
        // busca pelos registros no banco
        $collection = PropertyType::select('group', 'slug', 'name')
            ->where('status', '=', 1)
            ->orderBy('group', 'DESC')
            ->orderBy('name', 'ASC')
            ->get()
            ->toArray();

        $residential = [];
        $commercial  = [];
        foreach ($collection as $array) {
            if ($array['group'] == 'R') {
                $residential[$array['slug']] = $array['name'];
            } else {
                $commercial[$array['slug']] = $array['name'];
            }
        }
        $options['Residencial'] = $residential;
        $options['Comercial']   = $commercial;

		// retorna o combobox pronto
		return $options;
    }

    /**
     * Monta a lista com paginacao
     *
     * @return Collection
     */
    public static function list($group)
    {
        // recupera a chave do array
        $key = array_search($group, Property::$group);
        // retorna a query para a busca do grid
        $query = PropertyType::where('group', '=', $key)
            ->orderBy('group', 'ASC')
            ->orderBy('name', 'ASC');
        // cria uma collection com pagination para montar o grid
        parent::handlePagination($query);
        // efetua o tratamento no collection
        static::customCollection();

		return [
			'data'     => parent::$collection,
			'paginate' => parent::$paginate,
		];
    }
}
