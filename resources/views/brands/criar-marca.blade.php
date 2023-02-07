@extends('layouts.main')

@section('title', 'Criar Marcas')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.marca');

    <div class="container">
    <div class="row">
        <div class="col-3" >
            <h4><b>Criar Marca</b></h4>
            <p></p>
            <div class="input-group input-group-sm mb-3">
                <a href="brand" type="submit" class="btn btn-primary">&nbsp;&nbsp; Voltar &nbsp;&nbsp;</a>
            </div>

        </div>
        <div class="col-6" >

            <form method="POST" action="/save-brand">
                @csrf

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Nome</span>
                    <input type="text" name="nome" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <input type="submit" class="btn btn-success" value="Cadastrar"></input>
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