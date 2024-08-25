<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\Eventos;
use App\Models\User;
use Hash;
class EventosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $eventos = Eventos::all();
        return view('adm.eventos.show', [
            'eventos' => $eventos,
        ]);
    }

    
    public function form()
    {
        
        return view('adm.eventos.form');
    }

        
    public function info(Eventos $evento)
    {
        
        return view('adm.eventos.info',[
            'evento' => $evento,
        ]);
    }


    public function cadastrar(Request $request){
        
        $titulo = $request->titulo;
        $data = $request->data;
        $horario = $request->horario;
 

        $evento = new Eventos();

        $evento->titulo = $titulo;
        $evento->data = $data;
        $evento->horario = $horario;
   

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $evento->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-eventos/');
            $image->move($destinationPath, $photoname);
        }

        $evento->save();
        return redirect()->route('adm-show-eventos');
    }

    public function update(Eventos $evento, Request $request){
        $titulo = $request->titulo;
        $data = $request->data;
        $horario = $request->horario;

        $evento->titulo = $titulo;
        $evento->data = $data;
        $evento->horario = $horario;
   

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $evento->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-eventos/');
            $image->move($destinationPath, $photoname);
        }

        $evento->save();
        return redirect()->route('adm-show-eventos');
    }
}
