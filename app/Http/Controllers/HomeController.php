<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use App\Models\Eventos;
use App\Models\Membros;
use App\Models\Parceiros;
use App\Models\Perrengue;
use App\Models\Apoiadores;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $home = Home::first();
        $eventos = Eventos::all();
        return view('home', [
            'home' => $home,
            'eventos' => $eventos,
        ]);
    }

    public function membros()
    {
        $membros = Membros::all();
        return view('painel.membros', [
            'membros' => $membros,
        ]);
    }

    
    public function perfil(Membros $membro)
    {
        return view('painel.perfil', [
            'membro' => $membro,
        ]);
    }

    public function agenda()
    {
        return view('painel.agenda');
    }

    public function eventos()
    {
        $eventos = Eventos::all();
        return view('painel.eventos',[
            'eventos' => $eventos,
        ]);
    }

    public function parceiros()
    {
        $parceiros = Parceiros::all();
        return view('painel.parceiros', [
            'parceiros' => $parceiros,
        ]);
    }

    public function parceirosPerfil(Parceiros $parceiro)
    {
        return view('painel.parceiros-perfil', [
            'parceiro' => $parceiro,
        ]);
    }

    
    public function apoiadores()
    {
        $apoiadores = Apoiadores::all();
        return view('painel.apoiadores', [
            'apoiadores' => $apoiadores,
        ]);
    }

    public function apoiadoresPerfil(Apoiadores $apoiador)
    {
        return view('painel.apoiadores-perfil', [
            'apoiador' => $apoiador,
        ]);
    }

    public function perrengue($perrengue_id)
    {
        $perrengue = Perrengue::where('id', $perrengue_id)->with('modulos')->first();
        return view('painel.perrengue', [
            'perrengue' => $perrengue,
        ]);
    }
}
