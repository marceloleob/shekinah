@section('js-custom')
    {!! Html::script('js/forms/search.js', ['defer' => 'defer']) !!}
@stop

<div class="property_sidebar">
    <div class="sidebar-widget my-4">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h5 class="mb-4 center">Filtrar resultados</h5>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                {!! Form::label('price', 'Preço:') !!}
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {!! Form::text('price_min', old('price_min'), ['class' => 'form-control money', 'placeholder' => 'mínimo']) !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {!! Form::text('price_max', old('price_max'), ['class' => 'form-control money', 'placeholder' => 'máximo']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                {!! Form::label('square_meter', 'Área útil (m²):') !!}
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {!! Form::text('square_meter_min', old('square_meter_min'), ['class' => 'form-control decimal', 'placeholder' => 'mínimo']) !!}
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    {!! Form::text('square_meter_max', old('square_meter_max'), ['class' => 'form-control decimal', 'placeholder' => 'máximo']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <h6 class="my-4">Busca detalhada</h6>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    {!! Form::label('address', 'Localização:') !!}
                    {!! Form::text('address', old('address'), ['class' => 'form-control text', 'placeholder' => 'Endereço (Rua, Avenida, etc)']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    {!! Form::label('advertise_type', 'Tipo do anúncio:') !!}
                    {!! Form::select('group_type', $optionsgrouptype, old('group_type'), ['class' => 'selectpicker']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    {!! Form::label('property_type', 'Tipo do imóvel:') !!}
                    {!! Form::hidden('old_property_type', old('property_type')) !!}
                    {!! Form::select('property_type', $optionspropertytype, old('property_type'), ['class' => 'selectpicker']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    {!! Form::label('bathroom', 'Número de banheiros:') !!}
                    {!! Form::number('bathroom', old('bathroom'), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Banheiros']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    {!! Form::label('bedroom', 'Número de quartos:') !!}
                    {!! Form::number('bedroom', old('bedroom'), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Quartos']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    {!! Form::label('parking', 'Número de vagas:') !!}
                    {!! Form::number('parking', old('parking'), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Vagas']) !!}
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                {!! Form::button('<i class="fas fa-search-location"></i> Filtrar', ['type' => 'button', 'class' => 'btn btn_primary btngo w-100']) !!}
            </div>
        </div>

    </div>
</div>
