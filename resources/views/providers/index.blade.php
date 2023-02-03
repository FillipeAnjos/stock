@extends('layouts.main')

@section('title', 'Fornecedores')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.fornecedor');

    <div class="container">
    <div class="row">
        <div class="col-2" >
            <h4><b>Fornecedores</b></h4>
            
            <a href="/" type="button" class="btn btn-primary btn-sm">&nbsp; Voltar &nbsp;</a>

            <a href="create-provider" type="button" class="btn btn-success btn-sm">&nbsp; Cadastrar &nbsp;</a>

        </div>
        <div class="col-10" >

            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fornecedores as $fornecedor)
                        <tr>
                            <th scope="row">{{ $fornecedor->id }}</th>
                            <td>{{ $fornecedor->nome }}</td>
                            <td>{{ $fornecedor->cnpj }}</td>
                            <td>{{ $fornecedor->email }}</td>
                            <td>
                                <span onclick="excluirFornecedor('{{ $fornecedor->id }}')" type="button" class="btn btn-danger btn-sm">Excluir</span>
                                &nbsp;
                                <a href="edit-provider/{{ $fornecedor->id }}" type="button" class="btn btn-primary btn-sm">Editar</a>
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