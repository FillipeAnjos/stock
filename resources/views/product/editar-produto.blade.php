@extends('layouts.main')

@section('title', 'Editar Produto')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.produto');

    <div class="container">
    <div class="row">
        <div class="col-3" >
            <h4><b>Editar Produto</b></h4>
            <p></p>
            <div class="input-group input-group-sm mb-3">
                <a href="javascript:history.back()" type="submit" class="btn btn-primary">&nbsp;&nbsp; Voltar &nbsp;&nbsp;</a>
            </div>

        </div>
        <div class="col-6" >

            <form method="POST" action="/update-product">
                @csrf

                <input type="hidden" name="id" value=" {{ $produto->id }}">

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Produto</span>
                    </div>
                    <input type="text" name="produto" value=" {{ $produto->produto }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Descrição</span>
                    </div>
                    <input type="text" name="descricao" value=" {{ $produto->descricao }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tamanho</span>
                    </div>
                    <input type="text" name="tamanho" value=" {{ $produto->tamanho }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Cor</span>
                    </div>
                    <input type="text" name="cor" value=" {{ $produto->cor }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Quantidade</span>
                    </div>
                    <input type="text" name="quantidade" value=" {{ $produto->quantidade }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Valor</span>
                    </div>
                    <input type="text" name="valor" value=" {{ $produto->valor }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Garantia</span>
                    </div>
                    <input type="text" name="garantia" value=" {{ $produto->garantia }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>

                <div class="input-group input-group-sm mb-3">
                    <select name="marca_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <!--<option value="">Selecione a Marca</option>-->
                        @foreach($marcas as $marca)
                            @if($produto->marca_id == $marca->id) 
                                <option value="{{ $marca->id }}" selected>{{ $marca->nome }}</option>
                            @else
                                <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <select name="categoria_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <!--<option value="">Selecione a Marca</option>-->
                        @foreach($categorias as $categoria)
                            @if($produto->categoria_id == $categoria->id) 
                                <option value="{{ $categoria->id }}" selected>{{ $categoria->nome }}</option>
                            @else
                                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <select name="fornecedor_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <!--<option value="">Selecione a Marca</option>-->
                        @foreach($fornecedores as $fornecedor)
                            @if($produto->fornecedor_id == $fornecedor->id) 
                                <option value="{{ $fornecedor->id }}" selected>{{ $fornecedor->nome }}</option>
                            @else
                                <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <select name="status" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                            <option value="{{ 1 }}">Verdadeiro</option>
                            <option value="{{ 0 }}">Falsidade</option>
                    </select>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Observação</span>
                    </div>
                    <input type="text" name="observacao" value=" {{ $produto->observacao }}" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
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