<?php

namespace App\Service;

use App\Service\BaseService;

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
