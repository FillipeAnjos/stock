@extends('layouts.main')

@section('title', 'Produtos')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.produto');

    <div class="container">
    <div class="row">
        <div class="col-2" >
            <h4><b>Produtos</b></h4>
            
            <a href="/" type="button" class="btn btn-primary btn-sm">&nbsp; Voltar &nbsp;</a>

            <a href="create-product" type="button" class="btn btn-success btn-sm">&nbsp; Cadastrar &nbsp;</a>

        </div>
        <div class="col-10" >

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Produto</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Tamanho</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Garantia</th>
                    {{--<th scope="col">Observação</th>--}}
                    <th scope="col">Status</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($produtos as $produto)
                        <tr>
                            <th scope="row">{{ $produto->id }}</th>
                            <td>{{ $produto->produto }}</td>
                            <td>{{ $produto->descricao }}</td>
                            <td>{{ $produto->tamanho }}</td>
                            <td>{{ $produto->cor }}</td>
                            <td>{{ $produto->quantidade }}</td>
                            <td>{{ $produto->valor }}</td>
                            <td>{{ $produto->garantia }}</td>
                            {{--<td>{{ $produto->observacao }}</td>--}}
                            <td>{{ $produto->status }}</td>
                            <td>
                                <span onclick="excluirProduto('{{ $produto->id }}')" type="button" class="btn btn-danger btn-sm">Excluir</span>
                                &nbsp;
                                <a href="edit-product/{{ $produto->id }}" type="button" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="col-0" >
            
        </div>
    </div>
    </div>

    <br/>
    <br/>
    <br/>
    <br/>


@endsection