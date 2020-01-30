<?php

namespace App\Service;

use App\Models\State;
use App\Service\BaseService;


class StateService extends BaseService
{
    /**
     * Select box values
     *
     * @return array
     */
    public static function options()
    {
        // busca pelos registros no banco
        $options = State::orderBy('name', 'ASC')
            ->where('id', '=', 26) // forca pegar apenas SP
            ->pluck('name', 'id');
		// retorna o combobox pronto
		return $options->prepend('Estado', '');
    }
}
