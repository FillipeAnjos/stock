@extends('layouts.main')

@section('title', 'Editar Marca')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.marca');

    <div class="container">
    <div class="row">
        <div class="col-3" >
            <h4><b>Editar Marca</b></h4>
            <p></p>
            <div class="input-group input-group-sm mb-3">
                <a href="javascript:history.back()" type="submit" class="btn btn-primary">&nbsp;&nbsp; Voltar &nbsp;&nbsp;</a>
            </div>

        </div>
        <div class="col-6" >

            <form method="POST" action="/update-brand">
                @csrf

                <input type="hidden" name="id" value=" {{ $marca->id }}">

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Nome</span>
                    </div>
                    <input type="text" name="nome" value=" {{ $marca->nome }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
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