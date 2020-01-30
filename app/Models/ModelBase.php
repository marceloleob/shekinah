<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;

class ModelBase extends Model
{
	/**
	 * Salva ou atualiza um modelo
	 *
	 * @param array $data
	 * @return $this
	 */
	public static function store($data = [])
	{
        try
        {
            // verifica qual acao
            if (!empty($data['id'])) {
                // recupera a entidade
                $entity = self::find($data['id']);
                // realiza o update
                $entity->update($data);
                // retorna a entidade atualizada
                return $entity;

            } else {
                // realiza o save e retorna o objeto
                return self::create($data);
            }
        }
        catch (Exception $exception)
        {
            throw new Exception($exception);
        }
	}
}
