<?php

namespace App\Service;

use App\Service\BaseService;

class GroupTypeService extends BaseService
{
    /**
     * Select box values
     *
     * @return array
     */
    public static function options()
    {
        return [
            'R' => 'Residencial',
            'C' => 'Comercial',
        ];
    }
}
