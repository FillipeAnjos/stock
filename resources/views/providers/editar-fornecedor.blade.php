@extends('layouts.main')

@section('title', 'Editar Fornecedores')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.fornecedor');

    <div class="container">
    <div class="row">
        <div class="col-3" >
            <h4><b>Editar Fornecedor</b></h4>
            <p></p>
            <div class="input-group input-group-sm mb-3">
                <a href="javascript:history.back()" type="submit" class="btn btn-primary">&nbsp;&nbsp; Voltar &nbsp;&nbsp;</a>
            </div>

        </div>
        <div class="col-6" >

            <form method="POST" action="/update-provider">
                @csrf

                <input type="hidden" name="id" value=" {{ $fornecedor->id }}">

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                    </div>
                    <input type="text" name="nome" value=" {{ $fornecedor->nome }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
                    </div>
                    <input type="text" name="email" value=" {{ $fornecedor->email }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">CNPJ</span>
                    </div>
                    <input type="text" name="cnpj" value=" {{ $fornecedor->cnpj }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Razão Social</span>
                    </div>
                    <input type="text" name="razao" value=" {{ $fornecedor->razao }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Telefone</span>
                    </div>
                    <input type="text" name="telefone" value=" {{ $fornecedor->telefone }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Falar Com</span>
                    </div>
                    <input type="text" name="falarcom" value=" {{ $fornecedor->falarcom }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <input type="submit" class="btn btn-success" value="Editar"></input>
                </div>

            </form>

        </div>
        <div class="col-3" >
            
        </div>
    </div>
    </div>


    <br/>
    <br/>
    <br/>
    <br/>


@endsection