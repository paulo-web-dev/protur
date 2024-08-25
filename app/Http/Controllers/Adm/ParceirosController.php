<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\Parceiros;
use App\Models\User;
use Hash;

class ParceirosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $parceiros = Parceiros::all();
        return view('adm.parceiros.show', [
            'parceiros' => $parceiros,
        ]);
    }

    
    public function form()
    {
        
        return view('adm.parceiros.form');
    }

        
    public function info(Parceiros $parceiro)
    {
        
        return view('adm.parceiros.info',[
            'parceiro' => $parceiro,
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
        $parceiro = new Parceiros();

        $parceiro->nome = $nome;
        $parceiro->user_id = $user->id;
        $parceiro->email = $email;
        $parceiro->celular = $celular;
        $parceiro->site = $site;
        $parceiro->uf = $uf;
        $parceiro->sobre = $sobre;
        $parceiro->cidade = $cidade;
        $parceiro->cnpj = $cnpj;
        $parceiro->status = "Parceiro";

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $parceiro->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-parceiros/');
            $image->move($destinationPath, $photoname);
        }

        $parceiro->save();
        return redirect()->route('adm-show-parceiros');
    }

    public function update(Parceiros $parceiro, Request $request){
        
        $nome = $request->nome;
        $email = $request->email;
        $celular = $request->celular;
        $site = $request->site;
        $sobre = $request->sobre;
        $uf = $request->uf;
        $cidade = $request->cidade;
        $cnpj = $request->cnpj;

        $user = User::where('id', $parceiro->user_id)->first();
        $user->name = $nome;
        $user->email = $email;
        $user->password = Hash::make($cnpj);
        $user->save();

        $parceiro->nome = $nome;
        $parceiro->user_id = $user->id;
        $parceiro->email = $email;
        $parceiro->celular = $celular;
        $parceiro->site = $site;
        $parceiro->uf = $uf;
        $parceiro->sobre = $sobre;
        $parceiro->cidade = $cidade;
        $parceiro->cnpj = $cnpj;
        $parceiro->status = "Parceiro";

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $parceiro->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-parceiros/');
            $image->move($destinationPath, $photoname);
        }

        $parceiro->save();
        return redirect()->route('adm-show-parceiros');
    }
}
