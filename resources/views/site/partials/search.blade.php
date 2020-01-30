@section('js-custom')
    {!! Html::script('js/forms/search.js', ['defer' => 'defer']) !!}
@stop

    <section id="slider-fixed" class="full_row header_margin bg_img_4 py_80 overlay_1">
        <div class="vertical_center w-100">
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <div class="radio_check search">
                            {!! Form::checkbox('search', 'alugar', (old('search_type') == 'comprar') ? true : false, ['class' => 'hide', 'id' => 'search']) !!}
                            <label for="search"><span>Quero alugar</span><span>Quero comprar</span></label>
                        </div>
                    </div>
                </div> --}}
                <div class="slider-search-2 mt-5">
                    <h3 class="title text_white">
                        ENCONTRE SEU IMÓVEL {{-- NO ESTADO DE SÃO PAULO <img src="{!! asset('images/map/sp-bg.png') !!}" class="ico-sp" data-toggle="tooltip" data-placement="bottom" title="Atendemos apenas no estado de São Paulo" /> --}}
                    </h3>
                    <div class="property_search_form p-4 mt_30 bg_white">
                        {!! Form::open(['id' => 'form-search', 'route' => 'search', 'method' => 'GET', 'role' => 'form', 'class' => 'form property_filter_input']) !!}
                            <div class="row">
                                <div class="col-lg-3 col-sm-12">
                                    <div class="radio_check search">
                                        {!! Form::checkbox('search', 'alugar', (old('search_type') == 'comprar') ? true : false, ['class' => 'hide', 'id' => 'search']) !!}
                                        <label for="search"><span>Quero alugar</span><span>Quero comprar</span></label>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-12">
                                    <div class="form-group">
                                        {!! Form::select('property_type', $optionstype, old('property_type'), ['class' => 'selectpicker property', 'placeholder' => 'Tipo do imóvel']) !!}
                                        {!! Form::errorField('property_type', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12">
                                    <div class="form-group">
                                        {!! Form::text('city_name', old('city_name'), ['class' => 'form-control', 'data-live-search' => true, 'placeholder' => 'Escreva o nome da cidade']) !!}
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-12">
                                    {!! Form::hidden('search_type', (empty(old('search_type'))) ? 'alugar' : old('search_type')) !!}
                                    {!! Form::button('<i class="fas fa-search-location"></i> Buscar', ['type' => 'button', 'class' => 'btn btn_primary btngo']) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                    {{-- <div class="my-3"> <a href="#" class="btn btn_default">Advance Search</a> </div>
                    <span class="h4 text_white">TEMOS CENTENAS DE IMÓVEIS CADASTRADOS</span> --}}
                </div>
            </div>
        </div>
    </section>
