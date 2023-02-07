@extends('layouts.main')

@section('title', 'Marcas')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.marca');

    <div class="container">
    <div class="row">
        <div class="col-2" >
            <h4><b>Marcas</b></h4>
            
            <a href="/" type="button" class="btn btn-primary btn-sm">&nbsp; Voltar &nbsp;</a>

            <a href="create-brand" type="button" class="btn btn-success btn-sm">&nbsp; Cadastrar &nbsp;</a>

        </div>
        <div class="col-10" >

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($marcas as $marca)
                        <tr>
                            <th scope="row">{{ $marca->id }}</th>
                            <td>{{ $marca->nome }}</td>
                            <td>
                                <span onclick="excluirMarca('{{ $marca->id }}')" type="button" class="btn btn-danger btn-sm">Excluir</span>
                                &nbsp;
                                <a href="edit-category/{{ $marca->id }}" type="button" class="btn btn-primary btn-sm">Editar</a>
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