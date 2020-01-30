@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h4 class="inner_title mb-4">Imóveis Publicados</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 show-feedback">
            {!! Form::boxMessage($errors) !!}
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if (count($data))
            <table class="property_list">
                <thead>
                    <tr>
                        <td>Propriedades</td>
                        <td class="center" width="30%">Publicado em</td>
                        <td class="center" width="15%">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            <div class="text">
                                <h6 class="title">{{ $item->property_type }} {{ $item->bedroom }} {{ $item->bedroom_type }}, {{ $item->bathroom }} {{ $item->bathroom_amount }} {{ $item->advertise_type }}, {{ $item->square_meter }}m²</h6>
                                <span><i class="fas fa-map-marker-alt"></i>{{ $item->address }}, {{ $item->number }}, {{ $item->neighborhood }}</span>
                                <div class="price">R$ {{ $item->price }}</div>
                            </div>
                        </td>
                        <td class="center">July 28, 2017</td>
                        <td class="actions">
                            <a href="#" class="edit"><i class="fas fa-pencil-alt"></i> Editar</a>
                            <a href="#" class="delete"><i class="fas fa-times"></i> Desativar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">Exibindo de {!! $data->firstItem() !!} até {!! $data->lastItem() !!} de um total de {!! $data->total() !!} registros</td>
                    </tr>
                </tfoot>
            </table>
            @else
                <div class="no-records-found">Nenhum imóvel publicado no site</div>
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="pagination_style my-5 d-flex">
                {!! $paginate !!}
            </div>
        </div>
    </div>

@endsection
