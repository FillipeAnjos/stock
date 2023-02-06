@extends('layouts.main')

@section('title', 'Categorias')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.categoria');

    <div class="container">
    <div class="row">
        <div class="col-2" >
            <h4><b>Categorias</b></h4>
            
            <a href="/" type="button" class="btn btn-primary btn-sm">&nbsp; Voltar &nbsp;</a>

            <a href="create-category" type="button" class="btn btn-success btn-sm">&nbsp; Cadastrar &nbsp;</a>

        </div>
        <div class="col-10" >

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descricao</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categorias as $categoria)
                        <tr>
                            <th scope="row">{{ $categoria->id }}</th>
                            <td>{{ $categoria->nome }}</td>
                            <td>{{ $categoria->descricao }}</td>
                            <td>
                                <span onclick="excluirCategoria('{{ $categoria->id }}')" type="button" class="btn btn-danger btn-sm">Excluir</span>
                                &nbsp;
                                <a href="edit-category/{{ $categoria->id }}" type="button" class="btn btn-primary btn-sm">Editar</a>
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