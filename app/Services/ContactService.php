<?php

namespace App\Services;

use App\Services\BaseService;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
use Exception;

class ContactService extends BaseService
{
    /**
     * Retorna a quantidade de mensagens novas
     *
     * @return int
     */
    public static function countNewMsg()
    {
        return Contact::where('read', '=', '0')->count();
    }

    /**
     * Service layer - create
     *
     * @param array $data
     * @return Contact
     */
    public static function create($data = [])
    {
        try
        {
            $data['read'] = false;
            // cria um novo ou atualiza
            $entity = Contact::store($data);
            // retorna a entidade criada ou atualizada
            return [
                'type'    => 'success',
                'message' => 'Sua mensagem foi enviada com sucesso!',
                'entity'  => $entity,
            ];
        }
        catch (Exception $exception)
        {
            // retorna a entidade criada ou atualizada
            return [
                'type'    => 'error',
                'message' => 'Erro ao enviar sua mensagem!',
                'error'   => $exception,
            ];
        }
    }

    /**
     * Recupera os dados de uma mensagem
     *
     * @param int $id
     * @return array
     */
    public static function view($id)
    {
		// efetiva a busca no BD obedecendo as regras da paginacao
        self::$collection = Contact::where('id', '=', $id)->get();
        // efetua o tratamento no collection
        static::customCollection();
        // seta que a mensagem foi lida
        self::read($id);

        return ['data' => (self::$collection)->first()];
    }

    /**
     * Atualiza a mensagem para lida ou nao lida
     *
     * @param integer $id
     * @param boolean $read
     * @return void
     */
    public static function read($id, $read = true)
    {
        // inicia o acoplamento de uma transacao
        DB::beginTransaction();

        try
        {
            // atualiza o modelo
            $message = Contact::find($id);
            $message->read = $read;
            $message->save();
            // efetiva a transacao
            DB::commit();
        }
        catch (Exception $exception)
        {
            // descarta a transacao
            DB::rollback();
        }
    }

    /**
     * Monta a lista com paginacao
     *
     * @return array
     */
    public static function list()
    {
        // retorna a query para a busca do grid
        $query = Contact::orderBy('created_at', 'DESC');
        // cria uma collection com pagination para montar o grid
        parent::handlePagination($query);
        // efetua o tratamento no collection
        static::customCollection();

		return [
			'data'     => parent::$collection,
			'paginate' => parent::$paginate,
		];
    }

	/**
	 * Percorre a Collection e customiza dados para imprimir na view
	 *
	 * @return Collection
	 */
	public static function customCollection()
	{
		// percorre toda a Collection
		parent::$collection->map(function ($array) {
            $array->created_date = $array->created_at->format('d/m/Y');
            $array->created_time = $array->created_at->format('H:i');
		});
	}
}
