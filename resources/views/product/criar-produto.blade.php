@extends('layouts.main')

@section('title', 'Criar Produtos')

    <style>
        
    </style>

@section('content')

    <br/>

    @include('alert.produto');

    <div class="container">
    <div class="row">
        <div class="col-3" >
            <h4><b>Criar Produto</b></h4>
            <p></p>
            <div class="input-group input-group-sm mb-3">
                <a href="product" type="submit" class="btn btn-primary">&nbsp;&nbsp; Voltar &nbsp;&nbsp;</a>
            </div>

        </div>
        <div class="col-6" >

            <form method="POST" action="/save-product">
                @csrf

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Produto</span>
                    <input type="text" name="produto" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Descrição</span>
                    <input type="text" name="descricao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Tamanho</span>
                    <input type="text" name="tamanho" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Cor</span>
                    <input type="text" name="cor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Quantidade</span>
                    <input type="text" name="quantidade" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Valor</span>
                    <input type="text" name="valor" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Garantia</span>
                    <input type="text" name="garantia" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <select name="marca_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <option value="">Selecione a Marca</option>
                        @foreach($marcas as $marca)
                            <option value="{{ $marca->id }}">{{ $marca->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <select name="categoria_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <option value="">Selecione a Categoria</option>
                        @foreach($categorias as $categoria)
                            <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="input-group input-group-sm mb-3">
                    <select name="fornecedor_id" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                        <option value="">Selecione o Fornecedor</option>
                        @foreach($fornecedores as $fornecedor)
                            <option value="{{ $fornecedor->id }}">{{ $fornecedor->nome }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Status</span>
                    <input type="text" name="status" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" value="Ativo" readonly />
                </div>

                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" >Observação</span>
                    <input type="text" name="observacao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" />
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