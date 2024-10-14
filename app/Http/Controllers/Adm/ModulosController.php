<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modulos;
class ModulosController extends Controller
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

    
    public function form($perrengue)
    {
        return view('adm.modulos.form',[
            'perrengue' => $perrengue,
        ]);
    }

        
    public function info(Modulos $modulo)
    {
       
        return view('adm.modulos.info',[
            'modulo' => $modulo,
        ]);
    }


    public function cadastrar(Request $request){
        
        $titulo = $request->titulo;
        $texto = $request->texto;
        $id_perrengue = $request->perrengue;
 

        $modulo = new Modulos();

        $modulo->titulo = $titulo;
        $modulo->texto = $texto;
        $modulo->id_perrengue = $id_perrengue;
        $modulo->save();

        return redirect()->route('adm-info-perrengues', ['perrengue' => $modulo->id_perrengue]);
    }

    public function update(Modulos $modulo, Request $request){
        $titulo = $request->titulo;
        $texto = $request->texto;
        $id_perrengue = $request->perrengue;
 

        $modulo->titulo = $titulo;
        $modulo->texto = $texto;
        $modulo->save();
       
        return redirect()->route('adm-info-perrengues', ['perrengue' => $modulo->id_perrengue]);
    }


    public function destroy(Modulos $modulo){
        $id_perrengue = $modulo->id_perrengue;
        $modulo->delete();
       
        return redirect()->route('adm-info-perrengues', ['perrengue' => $id_perrengue]);
    }
}
