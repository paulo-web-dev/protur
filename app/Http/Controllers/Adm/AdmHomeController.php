<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\Home;
use App\Models\User;
class AdmHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        $homes = Home::all();
        return view('adm.home.show', [
            'homes' => $homes,
        ]);
    }

    
    public function form()
    {
        
        return view('adm.home.form');
    }

        
    public function info(Home $home)
    {
        
        return view('adm.home.info',[
            'home' => $home,
        ]); 
    }


    public function cadastrar(Request $request){
        
        $titulo_foto = $request->titulo_foto;
        $titulo_video = $request->titulo_video;
        $video = $request->video;
 

        $home = new Home();

        $home->titulo_foto = $titulo_foto;
        $home->titulo_video = $titulo_video;
        $home->video = $video;
   

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $home->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-home/');
            $image->move($destinationPath, $photoname);
        }

        $home->save();
        return redirect()->route('adm-show-home');
    }

    public function update(Home $home, Request $request){
        
        $titulo_foto = $request->titulo_foto;
        $titulo_video = $request->titulo_video;
        $video = $request->video;
 

       

        $home->titulo_foto = $titulo_foto;
        $home->titulo_video = $titulo_video;
        $home->video = $video;
   

        if(isset($request->file)){
            $photoname = $request->file->getClientOriginalName();
            $home->foto = $photoname;
            $image = $request->file('file');
            $destinationPath = public_path('fotos-home/');
            $image->move($destinationPath, $photoname);
        }

        $home->save();
        return redirect()->route('adm-show-home');
    }
}
