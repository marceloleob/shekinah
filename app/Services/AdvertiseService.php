<?php

namespace App\Services;

use App\Helpers\Filters;
use App\Services\BaseService;
use App\Services\UserService;
use App\Services\PropertyFeatureService;
use App\Models\Progress;
use App\Models\Property;
use Illuminate\Support\Facades\DB;
use Exception;

class AdvertiseService extends BaseService
{
    /**
     * Service layer - store (create and update)
     *
     * @param array $data
     * @return Advertise
     */
    public static function store($data = [])
    {
        // inicia o acoplamento de uma transacao
        DB::beginTransaction();

        try
        {
            // verifica se existe usuario logado
            if (!$data['user_id'] = UserService::getUserIdAuth()) {
                // cria um novo usuario
                $user = UserService::create($data);
                // verifica se nao cadastrou o usuario
                if ($user['type'] == 'error') {
                    throw new Exception($user['error']);
                }
                // seta os dados que restaram
                $data['user_id'] = ($user['entity'])->id;
            }

            $data['type_id']     = $data['property_type'];
            $data['city_id']     = $data['city'];
            $data['progress_id'] = Progress::$rules['WAITING_REVIEW'];
            $data['info_owner']  = ($data['owner_user'] == 'S') ? config('constants.ACTIVE') : config('constants.INACTIVE');
            $data['info_docs']   = config('constants.INACTIVE');
            $data['info_photos'] = config('constants.INACTIVE');
            $data['status']      = config('constants.INACTIVE');

            // cria um novo anuncio
            $property = Property::store($data);

            // efetua o tratamento das caracteristicas alteradas no formulario
            PropertyFeatureService::store($property->id, $data['feature']);

            // efetiva a transacao
            DB::commit();

            // retorna a entidade criada ou atualizada
            return [
                'type'    => 'success',
                'message' => 'Seu imóvel foi cadastrado com sucesso!',
                'entity'  => $property,
            ];
        }
        catch (Exception $exception)
        {
            // descarta a transacao
            DB::rollback();
            dd($exception);
            // retorna a entidade criada ou atualizada
            return [
                'type'    => 'error',
                'message' => 'Erro ao ' . (isset($data['id']) ? 'atualizar' : 'cadastrar') . ' seu imóvel!',
                'error'   => $exception,
            ];
        }
    }

    /**
     * Monta a lista com paginacao
     *
     * @param int|array $progress
     * @return array
     */
    public static function list($progress)
    {
        // monta a query
        $query = Property::join('property_types', 'property_types.id', '=', 'properties.type_id')
            ->join('progresses', 'progresses.id', '=', 'properties.progress_id')
            ->select(
                'properties.id AS id',
                'property_types.name AS property_type',
                'progresses.name AS property_progress',
                'advertise_type',
                'group_type',
                'bathroom',
                'bedroom',
                'square_meter',
                'price',
                'address',
                'number',
                'neighborhood',
                'properties.status AS status'
            )
            ->orderBy('properties.created_at', 'DESC');

        // verifica se foi informado array
        if (is_array($progress)) {
            $query->whereIn('properties.progress_id', $progress);
        } else {
            $query->where('properties.progress_id', '=', $progress);
        }
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
     * Monta a lista com paginacao
     *
     * @return array
     */
    public static function listMine()
    {
        // monta a query
        $query = Property::join('property_types', 'property_types.id', '=', 'properties.type_id')
            ->join('progresses', 'progresses.id', '=', 'properties.progress_id')
            ->select(
                'properties.id AS id',
                'property_types.name AS property_type',
                'progresses.name AS property_progress',
                'advertise_type',
                'group_type',
                'bathroom',
                'bedroom',
                'square_meter',
                'price',
                'address',
                'number',
                'neighborhood',
                'properties.status AS status'
            )
            ->where('properties.user_id', '=', UserService::getUserIdAuth())
            ->orderBy('properties.created_at', 'DESC');

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
     * Retorna os dados de uma propriedade para editar ou analisar
     *
     * @param integer $id
     * @return Property
     */
    public static function find($id)
    {
        // verifica se foi informado uma propriedade
        if (empty($id)) {
            return new Property;
        }

        // monta uma query
        $query = Property::join('property_types', 'property_types.id', '=', 'properties.type_id')
            ->join('progresses', 'progresses.id', '=', 'properties.progress_id')
            ->join('cities', 'cities.id', '=', 'properties.city_id')
            ->join('states', 'states.id', '=', 'cities.state_id')
            ->select(
                'properties.id AS id',
                'type_id AS property_type',
                'city_id AS city',
                'states.id AS state',
                'progress_id',
                'progresses.name AS property_progress',
                'owner_user',
                'advertise_type',
                'group_type',
                'bathroom',
                'bedroom',
                'master',
                'parking',
                'square_meter',
                'price',
                'condo_fee',
                'tax_fee',
                'description',
                'address',
                'number',
                'comp',
                'neighborhood',
                'zipcode',
                'properties.status AS status'
            )
            ->where('properties.id', '=', $id);

        // cria uma collection com pagination para montar o grid
        parent::handleFirst($query);
        // efetua o tratamento customizado
        static::customFind();

		return parent::$collection ?? new Property;
    }

    public static function search($data)
    {
        // monta uma query
        $query = Property::join('property_types', 'property_types.id', '=', 'properties.type_id')
            ->join('progresses', 'progresses.id', '=', 'properties.progress_id')
            ->join('cities', 'cities.id', '=', 'properties.city_id')
            ->join('states', 'states.id', '=', 'cities.state_id')
            ->select(
                'properties.id AS id',
                'type_id AS property_type',
                'city_id AS city',
                'states.id AS state',
                'progress_id',
                'progresses.name AS property_progress',
                'owner_user',
                'advertise_type',
                'group_type',
                'bathroom',
                'bedroom',
                'master',
                'parking',
                'square_meter',
                'price',
                'condo_fee',
                'tax_fee',
                'description',
                'address',
                'number',
                'comp',
                'neighborhood',
                'zipcode',
                'properties.status AS status'
            )
            ->where('advertise_type', '=', (!empty($data['search_type'])) ? $data['search_type'] : 'A');

        // verifica se foi informado o tipo de propriedade
        if ($data['property_type'] != 'qualquer-tipo') {
            $query->where('property_types.slug', '=', $data['property_type']);
        }
        // verifica se foi informado o tipo de propriedade
        if ($data['city'] != 'todos') {
            $query->where('property_types.slug', '=', $data['property_type']);
        }

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
        // efetua o metodo default
        parent::customCollection();

		// percorre toda a Collection
		parent::$collection->map(function ($array) {
			// verifica o tipo da propriedade
			if ($array->advertise_type == 'A') {
                $array->advertise_type = 'para alugar';
			} else {
				$array->advertise_type = 'à venda';
            }
			// verifica o grupo da propriedade
			if ($array->group_type == 'R') {
                $array->group_type   = 'Residencial';
                $array->bedroom_type = ($array->bedroom == 1) ? 'quarto' : 'quartos';
			} else {
                $array->group_type   = 'Comercial';
                $array->bedroom_type = ($array->bedroom == 1) ? 'sala' : 'salas';
            }
            // tratamentos
            $array->bathroom_amount = ($array->bathroom == 1) ? 'banheiro' : 'banheiros';
            $array->square_meter    = Filters::amount($array->square_meter);
            $array->price           = Filters::amount($array->price);
		});
	}

    /**
     * Customiza os valores para apresentar na view
     *
     * @return void
     */
    public static function customFind()
    {
        parent::$collection->square_meter = Filters::amount(parent::$collection->square_meter);
        parent::$collection->price        = 'R$ ' . Filters::amount(parent::$collection->price);
        parent::$collection->condo_fee    = (!empty(parent::$collection->condo_fee)) ? 'R$ ' . Filters::amount(parent::$collection->condo_fee) : null;
        parent::$collection->tax_fee      = (!empty(parent::$collection->tax_fee)) ? 'R$ ' . Filters::amount(parent::$collection->tax_fee) : null;
        parent::$collection->zipcode      = Filters::zipcode(parent::$collection->zipcode);
    }
}
