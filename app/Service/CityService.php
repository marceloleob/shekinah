<?php

namespace App\Service;

use App\Models\City;
use App\Service\BaseService;


class CityService extends BaseService
{
    /**
     * Select box values
     *
     * @param int $state
     * @return array
     */
    public static function options($state)
    {
        // busca pelos registros no banco
        return City::orderBy('capital', 'DESC')
            ->orderBy('name', 'ASC')
            ->where('state_id', '=', $state)
            ->pluck('name', 'id');
    }

    /**
     * Select combo No Ajax complete
     *
     * @return array
     */
    public static function optionsNoAjax()
    {
        return [
            '' => 'Cidade'
        ];
    }

    /**
     * Select combo Ajax complete
     *
     * @param int $state
     * @param int $cityId
     * @return html
     */
    public static function optionsAjax($state, $cityId)
    {
        // busca pelos registros no banco
        $cities = self::options($state);
		// construindo as opcoes combobox
		$options = '<option value="">Cidade</option>';

		// percorre as categorias
		foreach ($cities as $id => $name) {
			// verifica se existe categoria
			if ($cityId == $id) {
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
}
