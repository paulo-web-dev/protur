<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\User;
use Hash;
use Illuminate\Support\Facades\Validator;
class MembrosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $membros = Membros::paginate(20);
        return view('adm.membros.show', [
            'membros' => $membros,
        ]);
    }

    
    public function form()
    {
        
        return view('adm.membros.form');
    }

    public function uploadArquivo()
    {
        
        return view('adm.membros.uploadarquivo');
    }

    public function uploadCSV(Request $request)
    {  
        
        set_time_limit(6000); 

        // Validação do arquivo
        $validator = Validator::make($request->all(), [
            'csv_file' => 'required|mimes:csv,txt|max:2048', // Limita o arquivo a 2MB e somente CSV ou TXT
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator);
        }

        // Verificar se o arquivo foi enviado
        if ($request->hasFile('csv_file')) {
            $file = $request->file('csv_file');
            $filePath = $file->getRealPath();

            // Abrir o arquivo e processar linha por linha
            if (($handle = fopen($filePath, 'r')) !== false) {
                while (($data = fgetcsv($handle, 1000, ',')) !== false) {
                    $nome = $data[1];
                    $email = $data[2];
                    $celular =$data[4];
                    $ocupacao = "Parceiro";
                    $sobre = " ";
                    $uf = $data[6];
                    $cidade = $data[5];
                    $cnpj = preg_replace('/\D/', '', $data[3]);
                    $telefone = preg_replace('/\D/', '', $data[4]);
                
                    $user = new User();
                    $user->name = $nome;
                    $user->email = $email;
                    $user->password = Hash::make($cnpj);
                    $user->save();
                    $membro = new Membros();
            
                    $membro->nome = $nome;
                    $membro->user_id = $user->id;
                    $membro->email = $email;
                    if(strlen($telefone) < 15){
                        $membro->celular = $telefone;
                    }else{
                        $membro->celular = 00000;
                    }
                    
                    $membro->cnpj_cpf = $cnpj;
                    $membro->ocupacao = $ocupacao;
                    $membro->sobre = $sobre;
                    $membro->uf = $uf;
                    $membro->cidade = $cidade;
                    $membro->status = "Associado";
                    $membro->save();
                }
                fclose($handle);
            }

            return back()->with('success', 'Arquivo CSV processado com sucesso!');
        }

        return back()->withErrors('Falha ao carregar o arquivo.');
    
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
