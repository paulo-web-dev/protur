<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\User;
use Hash;
class MembrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $membros = Membros::all();
        return view('adm.membros.show', [
            'membros' => $membros,
        ]);
    }

    
    public function form()
    {
        
        return view('adm.membros.form');
    }

        
    public function info(Membros $membro)
    {
        
        return view('adm.membros.info',[
            'membro' => $membro,
        ]);
    }


    public function cadastrar(Request $request){
        
        $nome = $request->nome;
        $email = $request->email;
        $celular = $request->celular;
        $ocupacao = $request->ocupacao;
        $sobre = $request->sobre;
        $uf = $request->uf;
        $cidade = $request->cidade;

        $user = new User();
        $user->name = $nome;
        $user->email = $email;
        $user->password = Hash::make($email);
        $user->save();
        $membro = new Membros();

        $membro->nome = $nome;
        $membro->user_id = $user->id;
        $membro->email = $email;
        $membro->celular = $celular;
        $membro->ocupacao = $ocupacao;
        $membro->sobre = $sobre;
        $membro->uf = $uf;
        $membro->cidade = $cidade;
        $membro->status = "Assinante";

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $membro->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-membros/');
            $image->move($destinationPath, $photoname);
        }

        $membro->save();
        return redirect()->route('adm-show-membros');
    }

    public function update(Membros $membro, Request $request){
        
        $nome = $request->nome;
        $email = $request->email;
        $celular = $request->celular;
        $ocupacao = $request->ocupacao;
        $sobre = $request->sobre;
        $uf = $request->uf;
        $cidade = $request->cidade;

        $user =  User::where('id', $membro->user_id)->first();
        $user->name = $nome;
        $user->email = $email;
        $user->password = Hash::make($email);
        $user->save();

        $membro->nome = $nome;
        $membro->user_id = $user->id;
        $membro->email = $email;
        $membro->celular = $celular;
        $membro->ocupacao = $ocupacao;
        $membro->sobre = $sobre;
        $membro->uf = $uf;
        $membro->cidade = $cidade;
        $membro->status = "Assinante";

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $membro->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-membros/');
            $image->move($destinationPath, $photoname);
        }

        $membro->save();
        return redirect()->route('adm-show-membros');
    }
}
