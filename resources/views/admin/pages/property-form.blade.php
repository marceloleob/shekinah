@extends('admin.layouts.main')

@section('js-custom')
	{!! Html::script('js/forms/jquery.validate.min.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/forms/jquery.validate.message.' . strtolower(App::getLocale()) . '.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/forms/jquery.maskedinput.min.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/forms/jquery.maskMoney.min.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/forms/validations.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/forms/masks.js', ['defer' => 'defer']) !!}
	{!! Html::script('js/forms/advertise.js', ['defer' => 'defer']) !!}
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 show-feedback">
            {!! Form::boxMessage($errors) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="property-buttons mb-5">
                <a href="{!! route('properties-form') !!}" class="active">IMÓVEL</a>
                <a href="" class="">PROPRIETÁRIO</a>
                <a href="" class="">DOCUMENTOS</a>
                <a href="" class="">FOTOS</a>
            </div>
        </div>
    </div>
    @if (isset($data->id))
    <div class="row">
        <div class="col-md-12">
            <div class="property-status mb-5">
                <h4 class="inner-title mb-4">Seu imóvel está {!! $data->property_progress !!} com status {!! $data->status !!}</h4>
            </div>
        </div>
    </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            {!! Form::open(['id' => 'form-advertise', 'route' => 'properties-store', 'method' => 'POST', 'role' => 'form', 'class' => 'form submit_form']) !!}
                <div class="basic_information">
                    <h4 class="inner-title mb-4">Informações básicas</h4>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="important_facts">
                                <label>Você é o proprietário deste imóvel?</label>
                                <div class="radio_check">
                                    {!! Form::checkbox('owner', 'N', (old('owner_user', $data->owner_user) == 'S') ? true : false, ['class' => 'hide', 'id' => 'owner']) !!}
                                    <label for="owner"><span>Não</span><span>Sim</span></label>
                                    {!! Form::hidden('owner_user', old('owner_user', $data->owner_user)) !!}
                                    {!! Form::errorField('owner_user', $errors) !!}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-6">
                            <div class="form-group">
                                {!! Form::select('advertise_type', $optionsadvertisetype, old('advertise_type', $data->advertise_type), ['class' => 'selectpicker']) !!}
                                {!! Form::errorField('advertise_type', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                {!! Form::select('group_type', $optionsgrouptype, old('group_type', $data->group_type), ['class' => 'selectpicker']) !!}
                                {!! Form::errorField('group_type', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                {!! Form::hidden('old_property_type', old('property_type', $data->property_type)) !!}
                                {!! Form::select('property_type', $optionspropertytype, old('property_type', $data->property_type), ['class' => 'selectpicker']) !!}
                                {!! Form::errorField('property_type', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                {!! Form::label('bathroom', 'Banheiros') !!}
                                {!! Form::number('bathroom', old('bathroom', $data->bathroom), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Banheiros']) !!}
                                {!! Form::errorField('bathroom', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                {!! Form::label('bedroom', 'Quartos') !!}
                                {!! Form::number('bedroom', old('bedroom', $data->bedroom), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Quartos']) !!}
                                {!! Form::errorField('bedroom', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 residential">
                            <div class="form-group">
                                {!! Form::label('master', 'Suítes') !!}
                                {!! Form::hidden('old_master', old('master', $data->master)) !!}
                                {!! Form::number('master', old('master', $data->master), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Suítes']) !!}
                                {!! Form::errorField('master', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4 residential">
                            <div class="form-group checkbox">
                                {!! Form::label('check_master', '&nbsp;') !!}
                                {!! Form::checkbox('check_master', '1', (old('master', $data->master) ? false : true), ['id' => 'check_master', 'class' => 'hide']) !!}
                                {!! Form::label('check_master', 'Não tem suítes', ['class' => 'label-checkbox']) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                {!! Form::label('parking', 'Vagas') !!}
                                {!! Form::number('parking', old('parking', $data->parking), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Vagas']) !!}
                                {!! Form::errorField('parking', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <div class="form-group">
                                {!! Form::label('square_meter', 'Área útil (m²)') !!}
                                {!! Form::text('square_meter', old('square_meter', $data->square_meter), ['class' => 'form-control decimal', 'placeholder' => 'Área útil (m²)']) !!}
                                {!! Form::errorField('square_meter', $errors) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="price_information mt-5">
                    <h4 class="inner-title mb-4">Valores do Imóvel</h4>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <label for="price">Valor <span class="span-price">da <span class="span-text-price">venda</span></span> (R$)</label>
                                        {!! Form::text('price', old('price', $data->price), ['class' => 'form-control money', 'placeholder' => '']) !!}
                                        {!! Form::errorField('price', $errors) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('condo_fee', 'Valor do condomínio por mês (R$)') !!}
                                        {!! Form::text('condo_fee', old('condo_fee', $data->condo_fee), ['class' => 'form-control money', 'placeholder' => '', 'disabled' => true]) !!}
                                        {!! Form::errorField('condo_fee', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group checkbox mt_20">
                                        {!! Form::hidden('old_condo_fee', old('condo_fee', $data->condo_fee)) !!}
                                        {!! Form::checkbox('check_condo_fee', '1', (old('condo_fee', $data->condo_fee) ? false : true), ['id' => 'check_condo_fee', 'class' => 'hide']) !!}
                                        {!! Form::label('check_condo_fee', 'Isento', ['class' => 'label-checkbox']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::label('tax_fee', 'Valor do IPTU por ano (R$)') !!}
                                        {!! Form::text('tax_fee', old('tax_fee', $data->tax_fee), ['class' => 'form-control money', 'placeholder' => '', 'disabled' => true]) !!}
                                        {!! Form::errorField('tax_fee', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group checkbox mt_20">
                                        {!! Form::hidden('old_tax_fee', old('tax_fee', $data->tax_fee)) !!}
                                        {!! Form::checkbox('check_tax_fee', '1', (old('tax_fee', $data->tax_fee) ? false : true), ['id' => 'check_tax_fee', 'class' => 'hide']) !!}
                                        {!! Form::label('check_tax_fee', 'Isento', ['class' => 'label-checkbox']) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="description mt-5">
                    <h4 class="inner-title mb-4">Descrição do imóvel</h4>
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="form-group">
                                {!! Form::textarea('description', old('description', $data->description), ['class' => 'form-control', 'rows' => '5', 'placeholder' => 'Adicione informações importantes do seu imóvel']) !!}
                                {!! Form::errorField('description', $errors) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property_location mt-5">
                    <h4 class="inner-title mb-4">Endereço do imóvel</h4>
                    <div class="row">
                        <div class="col-md-9 col-sm-12">
                            <div class="form-group">
                                {!! Form::text('address', old('address', $data->address), ['class' => 'form-control text', 'placeholder' => 'Endereço (Rua, Avenida, etc)']) !!}
                                {!! Form::errorField('address', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                {!! Form::text('number', old('number', $data->number), ['class' => 'form-control text', 'placeholder' => 'Número']) !!}
                                {!! Form::errorField('number', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                {!! Form::text('comp', old('comp', $data->comp), ['class' => 'form-control text', 'placeholder' => 'Complemento']) !!}
                                {!! Form::errorField('comp', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                {!! Form::text('neighborhood', old('neighborhood', $data->neighborhood), ['class' => 'form-control text', 'placeholder' => 'Bairro']) !!}
                                {!! Form::errorField('neighborhood', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="form-group">
                                {!! Form::select('state', $optionsstate, old('state', $data->state), ['class' => 'selectpicker']) !!}
                                {!! Form::errorField('state', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-6">
                            <div class="form-group">
                                {!! Form::hidden('old_city', old('city', $data->city)) !!}
                                {!! Form::select('city', $optionscity, old('city', $data->city), ['class' => 'selectpicker']) !!}
                                {!! Form::errorField('city', $errors) !!}
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="form-group">
                                {!! Form::text('zipcode', old('zipcode', $data->zipcode), ['class' => 'form-control cep', 'placeholder' => 'CEP']) !!}
                                {!! Form::errorField('zipcode', $errors) !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="check_feature mt-5 mb-4">
                    <h4 class="inner-title mb-4">Características do Imóvel</h4>
                    <div class="row">
                        <ul class="check_submit">
                            @foreach ($optionsfeature as $value)
                            <li>
                                {!! Form::checkbox('feature[' . $value->id . ']', $value->id, (old('feature[' . $value->id . ']', isset($feature[$value->id])) ? true : false), ['id' => 'feature[' . $value->id . ']', 'class' => 'hide']) !!}
                                <label for="feature[{!! $value->id !!}]">{!! $value->name !!}</label>
                            </li>
                            @endforeach
                        </ul>
                        {!! Form::errorField('feature', $errors) !!}
                    </div>
                </div>

                <hr />

                <div class="button_block mt-4">
                    <div class="browse_submit">
                        @if (isset($data->id))
                            {!! Form::hidden('id', $data->id, ['id' => 'id']) !!}
                        @endif
                        <a href="{!! route('properties-waiting', ['page' => $page]) !!}" class="btn btn_primary btn-left"><i class="fas fa-arrow-circle-left"></i> &nbsp; Voltar</a>
                        {!! Form::button('<i class="fas fa-cloud-upload-alt"></i> &nbsp; Salvar', ['type' => 'submit', 'class' => 'btn btn-success btn-right']) !!}
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection
