<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use App\Models\CategoryModel;

class CategoryController extends Controller
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

    public function __construct(CategoryModel $categoryModel){

        $this->saveCategoryModel = $categoryModel;
    }

    public function index(){

        $categorias = CategoryModel::all();

        return view('categorys/index', compact('categorias'));

    }

    public function destroy($id){

        //DELETE
        $categoria = CategoryModel::findOrFail($id);
        $categoria->delete();

        return redirect()->back();

    }

    public function edit($id){

        $categoria = CategoryModel::find($id);
        
        return view('categorys/editar-categoria', compact('categoria'));

    }

    public function update(Request $request){

        //PUT
        $categoria = CategoryModel::findOrFail($request->id);
        $categoria->update($request->all());

        $categoria = CategoryModel::find($request->id);

        Session::flash('categoria-success', 'Categoria atualizada com sucesso !!!');
        return view('categorys/editar-categoria', compact('categoria'));

    }

    public function save(Request $request){

        if($request->nome == "" || $request->descricao == "" ){
            Session::flash('categoria-campos-vazios', 'Verifique seu cadastro. Não pode haver campos vazios.');
            return view('categorys/criar-categoria');
        }

        // -----------------------------------------------------------------------------------------------------

        $categoria = $this->saveCategoryModel->create([
            'nome' 	    => $request->nome,
    		'descricao' => $request->descricao
		]);
        
        if($categoria){
            Session::flash('categoria-success', 'Categoria cadastrada com sucesso !!!');
        }else{
            Session::flash('categoria-error', 'Desculpe. Ocorreu um erro ao cadastrar o categoria.');
        }

        return view('categorys/criar-categoria');

    }
}
