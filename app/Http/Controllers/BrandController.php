<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use App\Models\BrandModel;

class BrandController extends Controller
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

    public function __construct(BrandModel $brandModel){

        $this->saveBrandModel = $brandModel;
    }

    public function index(){

        $marcas = BrandModel::all();

        return view('brands/index', compact('marcas'));

    }

    public function destroy($id){

        //DELETE
        $marca = BrandModel::findOrFail($id);
        $marca->delete();

        return redirect()->back();

    }

    public function edit($id){

        $marca = BrandModel::find($id);
        
        return view('brands/editar-marca', compact('marca'));

    }

    public function update(Request $request){

        //PUT
        $marca = BrandModel::findOrFail($request->id);
        $marca->update($request->all());

        $marca = BrandModel::find($request->id);

        Session::flash('marca-success', 'Marca atualizada com sucesso !!!');
        return view('brands/editar-marca', compact('marca'));

    }

    public function save(Request $request){

        if($request->nome == ""){
            Session::flash('marca-campos-vazios', 'Verifique seu cadastro. Não pode haver campos vazios.');
            return view('brands/criar-marca');
        }

        // -----------------------------------------------------------------------------------------------------

        $marca = $this->saveBrandModel->create([
            'nome' => $request->nome
		]);
        
        if($marca){
            Session::flash('marca-success', 'Marca cadastrada com sucesso !!!');
        }else{
            Session::flash('marca-error', 'Desculpe. Ocorreu um erro ao cadastrar o marca.');
        }

        return view('brands/criar-marca');

    }
}
