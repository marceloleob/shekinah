@extends('admin.layouts.main')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h4 class="inner_title mb-4">Tipos de Imóveis ({!! request()->segment(3) !!})</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            @if (count($data))
            <table class="table_list">
                <thead>
                    <tr>
                        <td>Tipo do Imóvel </td>
                        <td class="center">Status</td>
                        <td class="center" colspan="2" width="20%">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>{!! $item->name !!}</td>
                        <td class="center {!! $item->status['class'] !!}">{!! $item->status['label'] !!}</td>
                        <td class="edit"><a href="#"><i class="fas fa-pencil-alt"></i> Editar</a></td>
                        <td class="delete"><a href="#"><i class="fas fa-times"></i> Excluir</a></td>
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
                <div class="no-records-found">Nenhum tipo de imóvel cadastrado</div>
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
