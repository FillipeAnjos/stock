<?php

namespace App\Http\Controllers;

use Session;

use Illuminate\Http\Request;
use App\Models\ProviderModel;

class ProviderController extends Controller
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

    public function __construct(ProviderModel $providerModel){

        $this->saveProviderModel = $providerModel;
    }

    public function index(){

        $fornecedores = ProviderModel::all();

        return view('providers/index', compact('fornecedores'));

    }

    public function destroy($id){

        //DELETE
        $fornecedor = ProviderModel::findOrFail($id);
        $fornecedor->delete();

        return redirect()->back();

    }

    public function edit($id){

        $fornecedor = ProviderModel::find($id);
        
        return view('providers/editar-fornecedor', compact('fornecedor'));

    }

    public function update(Request $request){

        //PUT
        $fornecedor = ProviderModel::findOrFail($request->id);
        $fornecedor->update($request->all());

        $fornecedor = ProviderModel::find($request->id);

        Session::flash('fornecedor-success', 'Fornecedor atualizado com sucesso !!!');
        return view('providers/editar-fornecedor', compact('fornecedor'));

    }

    public function save(Request $request){

        if($request->nome == "" 
            || $request->email == "" 
            || $request->cnpj == "" 
            || $request->razao == "" 
            || $request->telefone == "" 
            || $request->falarcom == ""
        ){
            Session::flash('fornecedor-campos-vazios', 'Verifique seu cadastro. Não pode haver campos vazios.');
            return view('providers/criar-fornecedor');
        }

        $emailExiste = ProviderModel::where('email', '=', $request->email)->count();

            if($emailExiste > 0){
                Session::flash('fornecedor-email-existe', 'Esse email já está em uso !!!');
                return view('providers/criar-fornecedor');
            }

        // -----------------------------------------------------------------------------------------------------

        $fornecedor = $this->saveProviderModel->create([
            'nome' 	   => $request->nome,
    		'email'    => $request->email,
    		'cnpj' 	   => $request->cnpj,
    		'razao'    => $request->razao,
    		'telefone' => $request->telefone,
    		'falarcom' => $request->falarcom,
		]);
        
        if($fornecedor){
            Session::flash('fornecedor-success', 'Fornecedor cadastrado com sucesso !!!');
        }else{
            Session::flash('fornecedor-error', 'Desculpe. Ocorreu um erro ao cadastrar o fornecedor.');
        }

        return view('providers/criar-fornecedor');

    }

}
