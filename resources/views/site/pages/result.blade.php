@extends('site.layouts.pages')

@section('title-page', 'Imóveis encontrados')

@section('js-custom')
	{!! Html::script('js/forms/search.js', ['defer' => 'defer']) !!}
@stop

@section('content')

	{{-- BREADCRUMB --}}
	<section id="breadcrumb" class="full_row header_margin bg_img_5 py_80 overlay_1 page-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="page_banner">
						<h3 class="title text_white d-table float-left">Imóveis Disponíveis</h3>
						<ul class="page_location float-right">
							<li><a href="{!! route('home') !!}">Início</a> </li>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> </li>
							<li><span>Alugar</span> </li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	{{-- BREADCRUMB --}}

	{{-- Property List Start --}}
	<section class="full_row py_80 bg_gray">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 bg_white">
                    @include('site.partials.filter')
                </div>

				<div class="col-lg-9">
                    {{-- FILTER TOP --}}
					<div class="row">
						<div class="col-md-12">
                            {!! Form::open(['id' => 'form-filter', 'method' => 'POST', 'role' => 'form', 'class' => 'form']) !!}
							    <div class="property_sorting mb_30 mt_md_50">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-12">
                                            <span>O que você precisa?</span>
                                            <div class="filter-buttons">
                                                <a href="#" class="">Comprar</a>
                                                <a href="#" class="active">Alugar</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-12 float-right">
                                            <span class="span-right">Ordenar por:</span>
                                            <div class="order-buttons">
                                                <a href="#"><i class="fas fa-long-arrow-alt-down"></i> &nbsp; Menor valor primeiro</a>
                                                {{-- <a href="#"><i class="fas fa-long-arrow-alt-up"></i> &nbsp; Maior valor primeiro</a> --}}
                                            </div>
                                        </div>
									</div>
                                </div>
                            {!! Form::close() !!}
						</div>
                    </div>
                    {{-- FILTER TOP --}}

                    {{-- TOTAL --}}
					<div class="row">
						<div class="col-md-12 mb_30 mt_md_50">
                            <h5>692 apartamentos para alugar em São Paulo - SP</h5>
						</div>
                    </div>
                    {{-- TOTAL --}}

                    {{-- GRID --}}
					<div class="row">

						<div class="col-md-6">
							<div class="property_grid_1 property_item bg-white mb_30">
								<div class="zoom_effect_1">
									<div class="upper_2 bg_primary text-white">Destaque</div>
									<a href="#"><img src="{!! asset('images/properties/property_grid-4.png') !!}" alt="Image Not Found!"></a>
									{{-- <div class="upper_3 text_secondary">NOVO</div> --}}
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">Apartamento 2 quartos, 1 banheiro</a></h5>
									<span class="mt-3 d-block"><i class="fas fa-map-marker-alt"></i> Rua Santos, Jardim América, São Paulo</span>
									<div class="mt-3 quantity">
										<ul>
											<li data-toggle="tooltip" data-placement="top" title="Área útil">67,88 m²</li>
											<li data-toggle="tooltip" data-placement="top" title="Quartos"><i class="fas fa-bed"></i> &nbsp; 2</li>
											<li data-toggle="tooltip" data-placement="top" title="Banheiros"><i class="fas fa-bath"></i> &nbsp; 1</li>
											<li data-toggle="tooltip" data-placement="top" title="Vagas"><i class="fas fa-car"></i> &nbsp; 1</li>
										</ul>
									</div>
                                    <span class="mt-3 d-block detail"> + R$ 175,00 condomínio &nbsp; | &nbsp; + R$ 98,00 IPTU / ano</span>
                                </div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>R$ 760,00 / mês</li>
										{{-- <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a> </li> --}}
									</ul>
								</div>
							</div>
                        </div>

						<div class="col-md-6">
							<div class="property_grid_1 property_item bg-white mb_30">
								<div class="zoom_effect_1">
									<div class="upper_2 bg_secondary text-white">Exclusivo</div>
									<a href="#"><img src="{!! asset('images/properties/property_grid-5.png') !!}" alt="Image Not Found!"></a>
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">Apartamento 3 quartos, 2 banheiros</a></h5>
									<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> Rua Ibiraci, Praia Grande, São Paulo </span>
									<div class="quantity">
										<ul>
											<li data-toggle="tooltip" data-placement="top" title="Área útil">67,88 m²</li>
											<li data-toggle="tooltip" data-placement="top" title="Quartos"><i class="fas fa-bed"></i> &nbsp; 3</li>
											<li data-toggle="tooltip" data-placement="top" title="Banheiros"><i class="fas fa-bath"></i> &nbsp; 2 </li>
											<li data-toggle="tooltip" data-placement="top" title="Vagas"><i class="fas fa-car"></i> &nbsp; 1</li>
										</ul>
									</div>
                                    <span class="mt-3 d-block detail"> + R$ 205,00 condomínio &nbsp; | &nbsp; + R$ 115,00 IPTU / ano</span>
								</div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>R$ 1.350,00 / mês</li>
										{{-- <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a> </li> --}}
									</ul>
								</div>
							</div>
                        </div>

						<div class="col-md-6">
							<div class="property_grid_1 property_item bg-white mb_30">
								<div class="zoom_effect_1">
									{{-- <div class="upper_2 bg_secondary text-white">Exclusivo</div> --}}
									<a href="#"><img src="{!! asset('images/properties/property_grid-6.png') !!}" alt="Image Not Found!"></a>
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">Apartamento 3 quartos, 2 banheiros</a></h5>
									<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> Rua Iquiririm, Butantã, São Paulo </span>
									<div class="quantity">
										<ul>
											<li data-toggle="tooltip" data-placement="top" title="Área útil">109,00 m²</li>
											<li data-toggle="tooltip" data-placement="top" title="Quartos"><i class="fas fa-bed"></i> &nbsp; 3</li>
											<li data-toggle="tooltip" data-placement="top" title="Banheiros"><i class="fas fa-bath"></i> &nbsp; 2 </li>
											<li data-toggle="tooltip" data-placement="top" title="Vagas"><i class="fas fa-car"></i> &nbsp; 2</li>
										</ul>
									</div>
                                    <span class="mt-3 d-block detail"> + R$ 278,00 condomínio &nbsp; | &nbsp; + R$ 145,00 IPTU / ano</span>
								</div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>R$ 1.780,00 / mês</li>
										{{-- <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a> </li> --}}
									</ul>
								</div>
							</div>
                        </div>

						<div class="col-md-6">
							<div class="property_grid_1 property_item bg-white mb_30">
								<div class="zoom_effect_1">
									{{-- <div class="upper_2 bg_secondary text-white">Exclusivo</div> --}}
									<a href="#"><img src="{!! asset('images/properties/property_grid-2.png') !!}" alt="Image Not Found!"></a>
								</div>
								<div class="property_text p-3">
									<h5 class="title"><a href="#">Apartamento 4 quartos, 2 banheiros</a></h5>
									<span class="my-3 d-block"><i class="fas fa-map-marker-alt"></i> Rua Teste, Jardim Paulista, São Paulo </span>
									<div class="quantity">
										<ul>
											<li data-toggle="tooltip" data-placement="top" title="Área útil">205,00 m²</li>
											<li data-toggle="tooltip" data-placement="top" title="Quartos"><i class="fas fa-bed"></i> &nbsp; 4</li>
											<li data-toggle="tooltip" data-placement="top" title="Banheiros"><i class="fas fa-bath"></i> &nbsp; 3 </li>
											<li data-toggle="tooltip" data-placement="top" title="Vagas"><i class="fas fa-car"></i> &nbsp; 2</li>
										</ul>
									</div>
                                    <span class="mt-3 d-block detail"> + R$ 370,00 condomínio &nbsp; | &nbsp; + R$ 180,00 IPTU / ano</span>
								</div>
								<div class="bed_area d-table w-100">
									<ul>
										<li>R$ 2.230,00 / mês</li>
										{{-- <li class="icon_medium"><a href="#"><i class="flaticon-like"></i></a> </li> --}}
									</ul>
								</div>
							</div>
                        </div>

                    </div>
                    {{-- GRID --}}

                    {{-- PAGINATION --}}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="pagination_style my-5 d-flex">
                                {!! $paginate !!}
                            </div>
                        </div>
                    </div>
                    {{-- PAGINATION --}}

                </div>
            </div>
		</div>
	</section>

@stop
