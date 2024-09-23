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
//Parte Final
    public function AutorizacaoExteriorSozinho(Request $request){
        $nome_acompanhante = $request->nome_acompanhante;
        $parentesco = $request->parentesco;
        $telefone = $request->Telefone;
        $rg = $request->rg;
        $orgao_emissor_responsavel = $request->orgao_emissor_responsavel;
        $numero_acompanhante = $request->numero_acompanhante;
        $bairro_acompanhante = $request->bairro_acompanhante;
        $cep = $request->cep;
        $rua = $request->rua;
        $cidade = $request->cidade;
        $estado = $request->estado;
        $nome_crianca = $request->nome_crianca;
        $rg_crianca = $request->rg_crianca;
        $bairro_crianca = $request->bairro_crianca;
        $nascimento_crianca = $request->nascimento_crianca;
        $cep_crianca = $request->cep;
        $rua_crianca = $request->rua_crianca;
        $cidade_crianca = $request->cidade_crianca;
        $estado_crianca = $request->estado_crianca;
        $estado_nascimento_crianca = $request->estado_nascimento_crianca;
        $cidade_nascimento_crianca = $request->cidade_nascimento_crianca;
        $cidade_documento = $request->cidade_documento;
        $orgao_emissor_crianca = $request->orgao_emissor_crianca;
        $numero_crianca = $request->numero_crianca;
        $hoje = date("d/m/Y");
        $dois_anos = date("d/m/Y", strtotime("+2 years"));

        return view('autorizacao.exterior-sozinho', [
            'nome_acompanhante' => $nome_acompanhante,
            'parentesco' => $parentesco,
            'telefone' => $telefone,
            'rg' => $rg,
            'orgao_emissor_responsavel' => $orgao_emissor_responsavel,
            'numero_acompanhante' => $numero_acompanhante,
            'bairro_acompanhante' => $bairro_acompanhante,
            'cep' => $cep,
            'rua' => $rua,
            'cidade' => $cidade,
            'estado' => $estado,
            'nome_crianca' => $nome_crianca,
            'rg_crianca' => $rg_crianca,
            'numero_crianca' => $numero_crianca,
            'bairro_crianca' => $bairro_crianca,
            'nascimento_crianca' => $nascimento_crianca,
            'cep_crianca' => $cep_crianca,
            'rua_crianca' => $rua_crianca,
            'cidade_nascimento_crianca' => $cidade_nascimento_crianca,
            'estado_nascimento_crianca' =>$estado_nascimento_crianca,
            'cidade_documento' =>$cidade_documento,
            'cidade_crianca' => $cidade_crianca,
            'estado_crianca' => $estado_crianca,
            'hoje' => $hoje,
            'orgao_emissor_crianca' => $orgao_emissor_crianca,
            'dois_anos' => $dois_anos,
        ]);
    }

    public function FormAutorizacaoExteriorSozinho(){
        
     

        return view('autorizacao.form-autorizacao-sozinho', [
        
        ]);
    }
}
