<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Models\CategoryModel;
use App\Models\ProviderModel;
use App\Models\brandModel;

class ProductController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function __construct(ProductModel $productModel){

        $this->saveProductModel = $productModel;
    }

    public function index(){

        $produtos = ProductModel::all();

        return view('product/index', compact('produtos'));

    }

    public function destroy($id){

        //DELETE
        $produto = ProductModel::findOrFail($id);
        $produto->delete();

        return redirect()->back();

    }

    public function edit($id){

        $produto = ProductModel::find($id);

        $categorias = CategoryModel::all();
        $fornecedores = ProviderModel::all();
        $marcas = brandModel::all();
        
        return view('product/editar-produto', compact('produto', 'categorias', 'fornecedores', 'marcas'));

    }

    public function update(Request $request){

        //PUT
        $produto = ProductModel::findOrFail($request->id);
        $produto->update($request->all());

        $produto = ProductModel::find($request->id);

        $categorias = CategoryModel::all();
        $fornecedores = ProviderModel::all();
        $marcas = brandModel::all();

        Session::flash('produto-success', 'Produto atualizado com sucesso !!!');
        return view('product/editar-produto', compact('produto', 'categorias', 'fornecedores', 'marcas'));

    }

    public function fetchData(){
        
        $categorias = CategoryModel::all();
        $fornecedores = ProviderModel::all();
        $marcas = brandModel::all();

        return view('product/criar-produto', compact('categorias', 'fornecedores', 'marcas'));

    }

    public function save(Request $request){

        $categorias = CategoryModel::all();
        $fornecedores = ProviderModel::all();
        $marcas = brandModel::all();

        if($request->produto == "" ||
            $request->descricao == "" ||
            $request->tamanho == "" ||
            $request->cor == "" ||
            $request->quantidade == "" ||
            $request->valor == "" ||
            $request->garantia == "" ||
            $request->marca_id == "" ||
            $request->categoria_id == "" ||
            $request->fornecedor_id == "" ||
            $request->observacao == "" ||
            $request->status == ""){

                Session::flash('produto-campos-vazios', 'Verifique seu cadastro. Não pode haver campos vazios.');
                return view('product/criar-produto', compact('categorias', 'fornecedores', 'marcas'));
        }

        // -----------------------------------------------------------------------------------------------------

        $produto = $this->saveProductModel->create([
            'produto' => $request->produto,
            'descricao' => $request->descricao,
            'tamanho' => $request->tamanho,
            'cor' => $request->cor,
            'quantidade' => intval($request->quantidade),
            'valor' => $request->valor,
            'garantia' => $request->garantia,
            'marca_id' => intval($request->marca_id),
            'categoria_id' => intval($request->categoria_id),
            'fornecedor_id' => intval($request->fornecedor_id),
            'observacao' => $request->observacao,
            'status' => true
		]);
        
        if($produto){
            Session::flash('produto-success', 'Produto cadastrado com sucesso !!!');
        }else{
            Session::flash('produto-error', 'Desculpe. Ocorreu um erro ao cadastrar o produto.');
        }

        return view('product/criar-produto', compact('categorias', 'fornecedores', 'marcas'));

    }
}
