<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PerrenguesCategorias;
use App\Models\Perrengue;
use App\Models\Modulos;
class PerrenguesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $perrengues = Perrengue::all();
        return view('adm.perrengues.show', [
            'perrengues' => $perrengues,
        ]);
    }

    
    public function form()
    {
        $categorias = PerrenguesCategorias::all();
        return view('adm.perrengues.form',[
            'categorias' => $categorias,
        ]);
    }

        
    public function info($perrengue)
    {
        $perrengues = Perrengue::where('id', $perrengue)->with('modulos')->first();
   
        $categorias = PerrenguesCategorias::all();
        $modulos = Modulos::all();
        return view('adm.perrengues.info',[
            'perrengue' => $perrengues,
            'categorias' => $categorias,
           
        ]);
    }


    public function cadastrar(Request $request){
        
        $nome = $request->nome;
        $categoria = $request->categoria;
        $status = 'able';
 

        $perrengue = new Perrengue();

        $perrengue->nome = $nome;
        $perrengue->status = $status;
        $perrengue->categoria_id = $categoria;
        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $perrengue->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-perrengue/');
            $image->move($destinationPath, $photoname); 
        }

        $perrengue->save();

        return redirect()->route('adm-show-perrengues');
    }

    public function update(Perrengue $perrengue, Request $request){
        $nome = $request->nome;
        $categoria = $request->categoria;
        $status = $request->status;
 

        $perrengue->nome = $nome;
        $perrengue->categoria_id = $categoria;
        $perrengue->status = $status;
        $perrengue->save();
       
        return redirect()->route('adm-show-perrengues');
    }
}
