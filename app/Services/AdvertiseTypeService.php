<?php

namespace App\Services;

use App\Services\BaseService;

class AdvertiseTypeService extends BaseService
{
    /**
     * Select box values
     *
     * @return array
     */
    public static function options()
    {
        return [
            ''  => 'Tipo do anúncio',
            'A' => 'Alugar',
            'V' => 'Vender',
        ];
    }
}
