@extends('site.layouts.pages')

@section('title-page', ' - Anunciar meu imóvel')

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
    {{-- BREADCRUMB --}}
    <section id="breadcrumb" class="full_row header_margin bg_img_5 py_80 overlay_1 page-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page_banner">
                        <h3 class="title text_white d-table float-left">Anunciar meu Imóvel</h3>
                        <ul class="page_location float-right">
                            <li><a href="{!! route('home') !!}">Início</a> </li>
                            <li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
                            <li><span>Anunciar meu Imóvel</span> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- BREADCRUMB --}}

    {{-- SUBMIT PROPERTY --}}
    <section id="submit_property" class="full_row py_40 bg_gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 show-feedback">
                    {!! Form::boxMessage($errors) !!}
                </div>
                <div class="col-lg-9 col-md-10">
                    {!! Form::open(['id' => 'form-advertise', 'route' => 'advertise', 'method' => 'POST', 'role' => 'form', 'class' => 'form submit_form']) !!}
                        <div class="property_owner">
                            <h4 class="inner-title mb-4">Informações de contato e acesso administrativo</h4>
                            <p>Caso você já tenha cadastro, <a href="{!! route('login') !!}" class="text_primary">clique aqui</a> para acessar o sistema.</p>
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group">
                                        {!! Form::text('name', old('name'), ['class' => 'form-control text', 'placeholder' => 'Nome completo']) !!}
                                        {!! Form::errorField('name', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        {!! Form::text('phone', old('phone'), ['class' => 'form-control phone phoneOnly', 'placeholder' => 'Telefone de contato']) !!}
                                        {!! Form::errorField('phone', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12">
                                    <div class="form-group">
                                        {!! Form::text('born', old('born'), ['class' => 'form-control date', 'placeholder' => 'Data de nascimento', 'autocomplete' => 'off']) !!}
                                        {!! Form::errorField('born', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::email('email', old('email'), ['class' => 'form-control email emailOnly', 'placeholder' => 'E-mail']) !!}
                                        {!! Form::errorField('email', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Criar uma nova senha']) !!}
                                        {!! Form::errorField('password', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('cpf', old('cpf'), ['class' => 'form-control cpf cpfOnly', 'placeholder' => 'CPF']) !!}
                                        {!! Form::errorField('cpf', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="important_facts">
                                        <label>Você é o proprietário deste imóvel?</label>
                                        <div class="radio_check">
                                            {!! Form::checkbox('owner', 'N', (old('owner_user') == 'S') ? true : false, ['class' => 'hide', 'id' => 'owner']) !!}
                                            <label for="owner"><span>Não</span><span>Sim</span></label>
                                            {!! Form::hidden('owner_user', (empty(old('owner_user'))) ? 'N' : old('owner_user')) !!}
                                            {!! Form::errorField('owner_user', $errors) !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning">Com seu e-mail e sua senha você poderá acessar nosso sistema administrativo para acompanhar a aprovação de seu imóvel.</div>
                        </div>
                        <div class="basic_information mt-5">
                            <h4 class="inner-title mb-4">Informações básicas</h4>
                            <div class="row">
                                <div class="col-md-12 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::select('advertise_type', $optionsadvertisetype, old('advertise_type'), ['class' => 'selectpicker']) !!}
                                        {!! Form::errorField('advertise_type', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::select('group_type', $optionsgrouptype, old('group_type'), ['class' => 'selectpicker']) !!}
                                        {!! Form::errorField('group_type', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::hidden('old_property_type', old('property_type')) !!}
                                        {!! Form::select('property_type', $optionspropertytype, old('property_type'), ['class' => 'selectpicker']) !!}
                                        {!! Form::errorField('property_type', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::number('bathroom', old('bathroom'), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Banheiros']) !!}
                                        {!! Form::errorField('bathroom', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::number('bedroom', old('bedroom'), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Quartos']) !!}
                                        {!! Form::errorField('bedroom', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 residential">
                                    <div class="form-group">
                                        {!! Form::hidden('old_master', old('master')) !!}
                                        {!! Form::number('master', old('master'), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Suítes']) !!}
                                        {!! Form::errorField('master', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4 residential">
                                    <div class="form-group checkbox">
                                        {!! Form::checkbox('check_master', '1', (old('master') ? false : true), ['id' => 'check_master', 'class' => 'hide']) !!}
                                        {!! Form::label('check_master', 'Não tem suítes', ['class' => 'label-checkbox']) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::number('parking', old('parking'), ['class' => 'form-control integer numbersOnly', 'placeholder' => 'Vagas']) !!}
                                        {!! Form::errorField('parking', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <div class="form-group">
                                        {!! Form::text('square_meter', old('square_meter'), ['class' => 'form-control decimal', 'placeholder' => 'Área útil (m²)']) !!}
                                        {!! Form::errorField('square_meter', $errors) !!}
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning">Estas são as informações básicas de seu imóvel. Caso seja comercial, deixe o campo "quartos" vazio.</div>
                        </div>
                        <div class="price_information mt-5">
                            <h4 class="inner-title mb-4">Valores do Imóvel</h4>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="price">Valor <span class="span-price">da <span class="span-text-price">venda</span></span> (R$)</label>
                                                {!! Form::text('price', old('price'), ['class' => 'form-control money', 'placeholder' => '']) !!}
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
                                                {!! Form::text('condo_fee', old('condo_fee'), ['class' => 'form-control money', 'placeholder' => '', 'disabled' => true]) !!}
                                                {!! Form::errorField('condo_fee', $errors) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group checkbox mt_20">
                                                {!! Form::hidden('old_condo_fee', old('condo_fee')) !!}
                                                {!! Form::checkbox('check_condo_fee', '1', (old('condo_fee') ? false : true), ['id' => 'check_condo_fee', 'class' => 'hide']) !!}
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
                                                {!! Form::text('tax_fee', old('tax_fee'), ['class' => 'form-control money', 'placeholder' => '', 'disabled' => true]) !!}
                                                {!! Form::errorField('tax_fee', $errors) !!}
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="form-group checkbox mt_20">
                                                {!! Form::hidden('old_tax_fee', old('tax_fee')) !!}
                                                {!! Form::checkbox('check_tax_fee', '1', (old('tax_fee') ? false : true), ['id' => 'check_tax_fee', 'class' => 'hide']) !!}
                                                {!! Form::label('check_tax_fee', 'Isento', ['class' => 'label-checkbox']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="alert alert-warning"></div> --}}
                        </div>
                        <div class="description mt-5">
                            <h4 class="inner-title mb-4">Descrição do imóvel</h4>
                            <div class="row">
                                <div class="col-md-12 col-sm-12">
                                    <div class="form-group">
                                        {!! Form::textarea('description', old('description'), ['class' => 'form-control', 'rows' => '5', 'placeholder' => 'Adicione informações importantes do seu imóvel']) !!}
                                        {!! Form::errorField('description', $errors) !!}
                                    </div>
                                </div>
                            </div>
                            <p><strong>Exemplo:</strong> Apartamento bem localizado, próximo ao Parque Boulevard e a 5 minutos à pé da estação de metrô Rubi. <br /> Rua arborizada, com padaria e farmácia a 2 quadras do edifício. Imóvel arejado e com face norte, recém reformado (elétrica e hidráulica), armários embutidos nos quartos. Lazer completo no térreo e segurança 24h.</p>
                            <div class="alert alert-warning">Descreva todos os detalhes que você acredita ser importante, como por exemplo uma reforma recente, ou uma vista previlegiada, etc.</div>
                        </div>
                        <div class="property_location mt-5">
                            <h4 class="inner-title mb-4">Endereço do imóvel</h4>
                            <div class="row">
                                <div class="col-md-9 col-sm-12">
                                    <div class="form-group">
                                        {!! Form::text('address', old('address'), ['class' => 'form-control text', 'placeholder' => 'Endereço (Rua, Avenida, etc)']) !!}
                                        {!! Form::errorField('address', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('number', old('number'), ['class' => 'form-control text', 'placeholder' => 'Número']) !!}
                                        {!! Form::errorField('number', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('comp', old('comp'), ['class' => 'form-control text', 'placeholder' => 'Complemento']) !!}
                                        {!! Form::errorField('comp', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('neighborhood', old('neighborhood'), ['class' => 'form-control text', 'placeholder' => 'Bairro']) !!}
                                        {!! Form::errorField('neighborhood', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::select('state', $optionsstate, old('state'), ['class' => 'selectpicker']) !!}
                                        {!! Form::errorField('state', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-5 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::hidden('old_city', old('city')) !!}
                                        {!! Form::select('city', $optionscity, old('city'), ['class' => 'selectpicker']) !!}
                                        {!! Form::errorField('city', $errors) !!}
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6">
                                    <div class="form-group">
                                        {!! Form::text('zipcode', old('zipcode'), ['class' => 'form-control cep', 'placeholder' => 'CEP']) !!}
                                        {!! Form::errorField('zipcode', $errors) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="check_feature mt-5">
                            <h4 class="inner-title mb-4">Características do Imóvel</h4>
                            <div class="row">
                                <ul class="check_submit">
                                    @foreach ($optionsfeature as $value)
                                    <li>
                                        {!! Form::checkbox('feature[' . $value->id . ']', $value->id, (old('feature[' . $value->id . ']') ? true : false), ['id' => 'feature[' . $value->id . ']', 'class' => 'hide']) !!}
                                        <label for="feature[{!! $value->id !!}]">{!! $value->name !!}</label>
                                    </li>
                                    @endforeach
                                </ul>
                                {!! Form::errorField('feature', $errors) !!}
                            </div>
                            <div class="alert alert-warning">Selecione todas as características presentes em seu imóvel, caso esteja faltando alguma características, aproveite e nos conte qual é no campo "descrição" do imóvel.</div>
                        </div>
                        <div class="button_block mt-5">
                            <div class="browse_submit">
                                {!! Form::button('Enviar Imóvel', ['type' => 'submit', 'class' => 'btn btn_primary']) !!}
                                <p><span>Aviso</span>: Suas informações serão analisadas e entraremos em contato o mais breve possível*</p>
                            </div>
                        </div>


                        {{--
                        <div class="upload_media mt-5">
                            <h4 class="inner-title mb-4">Enviar documentos e fotos do imóvel</h4>
                            <p>Felis etiam erat curabitur bibendum iaculis quisque placerat egestas. Nullam, lacus dis et consectetuer rhoncus etiam. Non vitae turpis curae; lacus sociosqu. Quisque. Lobortis aliquam penatibus mi. </p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="browse_submit"> <span>Adicionar Fotos</span>
                                        {!! Form::file('photo', ['class' => 'hide']) !!}
                                        <label class="fileupload_label" for="fileupload-example-1">Clique aqui para anexar sua foto</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="property_thumbnails mt-5">
                                        <div class="row">
                                            <div class="thumbnails_box mb_30 col-lg-2 col-md-4 col-6"> "{!! asset('images/properties/property_grid-1.png') !!}" alt=""> <i class="fas fa-window-close"></i> </div>
                                            <div class="thumbnails_box mb_30 col-lg-2 col-md-4 col-6"> "{!! asset('images/properties/property_grid-2.png') !!}" alt=""> <i class="fas fa-window-close"></i> </div>
                                            <div class="thumbnails_box mb_30 col-lg-2 col-md-4 col-6"> <img src="{!! asset('images/properties/property_grid-3.png') !!}" alt=""> <i class="fas fa-window-close"></i> </div>
                                            <div class="thumbnails_box mb_30 col-lg-2 col-md-4 col-6"> <img src="{!! asset('images/properties/property_grid-4.png') !!}" alt=""> <i class="fas fa-window-close"></i> </div>
                                            <div class="thumbnails_box mb_30 col-lg-2 col-md-4 col-6"> <img src="{!! asset('images/properties/property_grid-5.png') !!}" alt=""> <i class="fas fa-window-close"></i> </div>
                                            <div class="thumbnails_box mb_30 col-lg-2 col-md-4 col-6"> <img src="{!! asset('images/properties/property_grid-6.png') !!}" alt=""> <i class="fas fa-window-close"></i> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="browse_submit"> <span>Adicionar Documentos</span>
                                        {!! Form::file('documents', ['class' => 'hide']) !!}
                                        <label class="fileupload_label" for="fileupload-example-1">Clique aqui para anexar os documentos</label>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="video_upload">
                                        <input type="url" placeholder="Add property video links or URL" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="alert alert-warning">Please uplaod the photo of the property, please keep the photo size 760X410 ratio and please upload the PDF or Doc file at the document attachment.</div>
                        </div>

                                <div class="col-md-12">
                                    <div class="important_facts">
                                        <label>Este imóvel está parcelado?</label>
                                        <div class="radio_check">
                                            {!! Form::checkbox('installments', '1', false, ['id' => 'installments', 'class' => 'hide']) !!}
                                            <label for="installments"><span>Não</span><span>Sim</span></label>
                                        </div>
                                    </div>
                                    <div class="important_facts">
                                        <label>Este imóvel tem seguro?</label>
                                        <div class="radio_check">
                                            {!! Form::checkbox('insurance', '1', false, ['id' => 'insurance', 'class' => 'hide']) !!}
                                            <label for="insurance"><span>Não</span><span>Sim</span></label>
                                        </div>
                                    </div>
                                </div>


                        --}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
    {{-- SUBMIT PROPERTY --}}

@stop
