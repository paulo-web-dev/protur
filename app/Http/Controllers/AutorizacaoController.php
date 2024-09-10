<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutorizacaoController extends Controller
{
    public function home(){
        
        return view('autorizacao.home');
    }

    public function local(){
        
        return view('autorizacao.local');
    }

    public function nacional(){
        
        return view('autorizacao.nacional');
    }

    public function nacionalComarca(){
        
        return view('autorizacao.nacionalComarca');
    }

    public function qualIdade(){
        
        return view('autorizacao.idade');
    }

    public function dzeisanos(){
        
        return view('autorizacao.dzeiscomarca');
    }

    public function sozinhoAcompanhado(){
        
        return view('autorizacao.sozinho-acompanhado');
    }

    public function sozinhoAcompanhadoExterior(){
        
        return view('autorizacao.sozinho-acompanhado-exterior');
    }

    public function sozinho(){
        
        return view('autorizacao.sozinho');
    }

    public function acompanhado(){
        
        return view('autorizacao.acompanhado');
    }

    public function passaporte(){
        
        return view('autorizacao.passaporte');
    }

    public function paiMae(){
        
        return view('autorizacao.pai-mae');
    }

    public function irmao(){
        
        return view('autorizacao.irmao');
    }

    public function escolhairmao(){
        
        return view('autorizacao.escolhairmao');
    }

    public function avo(){
        
        return view('autorizacao.avo');
    }

    public function residencia(){
        
        return view('autorizacao.residencia');
    }

    public function exterior(){
        
        return view('autorizacao.exterior');
    }

    public function viajavolta(){
        
        return view('autorizacao.viajavolta');
    }
    public function viajavoltaPai(){
        
        return view('autorizacao.viajavoltaPai');
    }

    public function viajavoltasozinho(){
        
        return view('autorizacao.viajavoltasozinho');
    }

    public function viajavoltasozinhopass(){
        
        return view('autorizacao.iajavoltasozinhopass');
    }

    
    public function viajavoltacompanhado(){
        
        return view('autorizacao.viajavoltacompanhado');
    }

    public function viajavoltacompanhadopai(){
        
        return view('autorizacao.viajavoltacompanhadopai');
    }

    public function AutorizacaoExteriorSozinho(){
        
        return view('autorizacao.exterior-sozinho');
    }
}
