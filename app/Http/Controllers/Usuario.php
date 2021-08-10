<?php

namespace App\Http\Controllers;

use App\Models\Usuario as UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Hash;
class Usuario extends Controller
{
    public function auth(Request $request){
        if(Auth::attempt(['email' => $request->email,'password' => $request->password])){
            dd('logou');
        }else{
            dd('nao logou');
            dd($request->email);
        }

    }
    public function cadastrar(){
 
     return view('usuario.cadastro');
    }
    public function salvar(Request $request){
        
        $request->validate([
            "txtnome"=>"required|min:5",
            "txtemail"=>"required|email",
             "txtsenha"=>array("required","regex:/^(?=.*[a-z])(?=.*[0-9])[\w$@]{6,}$/")
        ],[
            'txtnome.required'=>'O campo nome é Obribatório!',
            'txtnome.min'=>'O campo nome deve ter no mínimo 3 caracteres!',
            'txtemail.required'=>'Preencha com email válido!',
            'txtsenha.required'=>'O campo senha é Obrigatório!',
            'txtsenha.regex'=>'O campo senha deve conter no mínimo 6 caracteres com pelo menos um número e uma letra!',
            
        ]);
        try{
            UsuarioModel::cadastrar($request);
            return redirect()->back()
                ->with('success', 'Created successfully!');
            //return view('usuario.sucesso');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Error during the creation!');
        }
    }
    //
}
