<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Services\BaseService;
use App\Models\User;
use Exception;

class UserService extends BaseService
{
    /**
     * Return user auth check
     *
     * @return boolean
     */
    public static function check()
    {
        return Auth::check();
    }

    /**
     * Return users id auth
     *
     * @return integer
     */
    public static function getUserIdAuth()
    {
        return Auth::id() ?? false;
    }

    /**
     * Return users rules
     *
     * @return array
     */
    public static function getRules()
    {
        return User::$rules;
    }

    /**
     * Return the name by rules auth
     *
     * @return string
     */
    public static function getNameByRules()
    {
        // recupera todas as regras de permissao
        $rules = UserService::getRules();
        // recupera a regra de permissao do usuario logado
        $userRule = Auth::user()->rule;
        // retorna o nome da regra referente ao usuario logado
        return strtolower(array_search($userRule, $rules));
    }

     /**
     * Service layer - create
     *
     * @param array $data
     * @return array
     */
    public static function create($data = [])
    {
        try
        {
            $data['password'] = bcrypt($data['password']);
            $data['rule']     = self::getRules()['ADVERTISER'];
            $data['status']   = config('constants.ACTIVE');
            // cria um novo ou atualiza
            $entity = User::create($data);
            // retorna a entidade criada ou atualizada
            return [
                'type'    => 'success',
                'message' => 'Usuário cadastrado com sucesso!',
                'entity'  => $entity,
            ];
        }
        catch (Exception $exception)
        {
            // retorna a entidade criada ou atualizada
            return [
                'type'    => 'error',
                'message' => 'Erro ao cadastrar um novo usuário!',
                'error'   => $exception,
            ];
        }
    }
}
