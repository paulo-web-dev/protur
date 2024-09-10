<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Apoiadores;
use App\Models\User;
use Hash;
class ApoiadoresController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $apoiadores = Apoiadores::all();
        return view('adm.apoiadores.show', [
            'apoiadores' => $apoiadores,
        ]);
    }

    
    public function form()
    {
        
        return view('adm.apoiadores.form');
    }

        
    public function info(Apoiadores $apoiador)
    {
        
        return view('adm.apoiadores.info',[
            'apoiador' => $apoiador,
        ]);
    }


    public function cadastrar(Request $request){
        
        $nome = $request->nome;
        $email = $request->email;
        $celular = $request->celular;
        $site = $request->site;
        $sobre = $request->sobre;
        $uf = $request->uf;
        $cidade = $request->cidade;
        $cnpj = $request->cnpj;

        $user = new User();
        $user->name = $nome;
        $user->email = $email;
        $user->password = Hash::make($cnpj);
        $user->save();
        $apoiador = new Apoiadores();

        $apoiador->nome = $nome;
        $apoiador->user_id = $user->id;
        $apoiador->email = $email;
        $apoiador->celular = $celular;
        $apoiador->site = $site;
        $apoiador->uf = $uf;
        $apoiador->sobre = $sobre;
        $apoiador->cidade = $cidade;
        $apoiador->cnpj = $cnpj;
        $apoiador->status = "Apoiador";
        
        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $apoiador->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-apoiadores/');
            $image->move($destinationPath, $photoname);
        }

        $apoiador->save();
        return redirect()->route('adm-show-apoiadores');
    }

    public function update(Apoiadores $apoiador, Request $request){
        
        $nome = $request->nome;
        $email = $request->email;
        $celular = $request->celular;
        $site = $request->site;
        $sobre = $request->sobre;
        $uf = $request->uf;
        $cidade = $request->cidade;
        $cnpj = $request->cnpj;

        $user = User::where('id', $apoiador->user_id)->first();
        $user->name = $nome;
        $user->email = $email;
        $user->password = Hash::make($cnpj);
        $user->save();

        $apoiador->nome = $nome;
        $apoiador->user_id = $user->id;
        $apoiador->email = $email;
        $apoiador->celular = $celular;
        $apoiador->site = $site;
        $apoiador->uf = $uf;
        $apoiador->sobre = $sobre;
        $apoiador->cidade = $cidade;
        $apoiador->cnpj = $cnpj;
        $apoiador->status = "Apoiador";

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $apoiador->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-apoiadores/');
            $image->move($destinationPath, $photoname);
        }

        $apoiador->save();
        return redirect()->route('adm-show-apoiadores');
    }
}
