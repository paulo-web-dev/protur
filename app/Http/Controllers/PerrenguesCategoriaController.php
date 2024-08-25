<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerrenguesCategorias;
use App\Models\Perrengue;
use App\Models\User;
use Hash;
class PerrenguesCategoriaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $perrengues = PerrenguesCategorias::all();
        return view('adm.perrengues.categorias.show', [
            'perrengues' => $perrengues,
        ]);
    }

    
    public function form()
    {
        
        return view('adm.perrengues.categorias.form');
    }

        
    public function info($perrengueCategoria_id)
    {
        $perrengueCategoria = PerrenguesCategorias::where('id', $perrengueCategoria_id)->with('perrengues')->first();
        return view('adm.perrengues.categorias.info',[
            'perrengueCategoria' => $perrengueCategoria,
        ]);
    }


    public function cadastrar(Request $request){
        
        $nome = $request->nome;
        $status = 'able';
 

        $perrengue = new PerrenguesCategorias();

        $perrengue->nome = $nome;
        $perrengue->status = $status;
        $perrengue->save();

        return redirect()->route('adm-show-perrengues-cateroria');
    }

    public function update(PerrenguesCategorias $perrengueCategoria, Request $request){
        $nome = $request->nome;
        $status = 'able';
 

        $perrengueCategoria->nome = $nome;
        $perrengueCategoria->status = $status;
        $perrengueCategoria->save();
       
        return redirect()->route('adm-show-perrengues-cateroria');
    }
}
