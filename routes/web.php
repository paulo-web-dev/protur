<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Adm\MembrosController;
use App\Http\Controllers\Adm\ParceirosController;
use App\Http\Controllers\Adm\EventosController;
use App\Http\Controllers\Adm\AdmHomeController;
use App\Http\Controllers\PerrenguesCategoriaController;
use App\Http\Controllers\Adm\PerrenguesController;
use App\Http\Controllers\Adm\ModulosController;
use App\Http\Controllers\AutorizacaoController;
use App\Http\Controllers\ApoiadoresController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
//Rotas Painel ADM Protur
//Rotas de Membros
Route::get('/home', [MembrosController::class, 'show'])->name('adm-show-membros');
Route::get('/upload/arquivo', [MembrosController::class, 'uploadArquivo'])->name('upload-arquivo');
Route::post('/upload/csv', [MembrosController::class, 'uploadCSV'])->name('upload-csv');
Route::get('/adm/form/membros', [MembrosController::class, 'form'])->name('adm-form-membro');
Route::get('/adm/info/membro/{membro}', [MembrosController::class, 'info'])->name('adm-info-membro');
Route::post('/adm/cad/membros', [MembrosController::class, 'cadastrar'])->name('adm-cad-membro');
Route::post('/adm/upd/membros/{membro}', [MembrosController::class, 'update'])->name('adm-upd-membro');

//Rotas de Parceiros
Route::get('/adm/parceiros', [ParceirosController::class, 'show'])->name('adm-show-parceiros');
Route::get('/adm/form/parceiros', [ParceirosController::class, 'form'])->name('adm-form-parceiro');
Route::get('/adm/info/parceiro/{parceiro}', [ParceirosController::class, 'info'])->name('adm-info-parceiro');
Route::post('/adm/cad/parceiros', [ParceirosController::class, 'cadastrar'])->name('adm-cad-parceiro');
Route::post('/adm/upd/parceiros/{parceiro}', [ParceirosController::class, 'update'])->name('adm-upd-parceiro');

//Rotas de Apoiadores
Route::get('/adm/apoiadores', [ApoiadoresController::class, 'show'])->name('adm-show-apoiadores');
Route::get('/adm/form/apoiadores', [ApoiadoresController::class, 'form'])->name('adm-form-apoiador');
Route::get('/adm/info/apoiador/{apoiador}', [ApoiadoresController::class, 'info'])->name('adm-info-apoiador');
Route::post('/adm/cad/apoiadores', [ApoiadoresController::class, 'cadastrar'])->name('adm-cad-apoiador');
Route::post('/adm/upd/apoiadores/{apoiador}', [ApoiadoresController::class, 'update'])->name('adm-upd-apoiador');

//Rotas de Eventos
Route::get('/adm/eventos', [EventosController::class, 'show'])->name('adm-show-eventos');
Route::get('/adm/form/eventos', [EventosController::class, 'form'])->name('adm-form-evento');
Route::get('/adm/info/evento/{evento}', [EventosController::class, 'info'])->name('adm-info-evento');
Route::post('/adm/cad/eventos', [EventosController::class, 'cadastrar'])->name('adm-cad-evento');
Route::post('/adm/upd/eventos/{evento}', [EventosController::class, 'update'])->name('adm-upd-evento');


//Rotas de  Home
Route::get('/adm/home', [AdmHomeController::class, 'show'])->name('adm-show-home');
Route::get('/adm/form/home', [AdmHomeController::class, 'form'])->name('adm-form-home');
Route::get('/adm/info/home/{home}', [AdmHomeController::class, 'info'])->name('adm-info-home');
Route::post('/adm/cad/home', [AdmHomeController::class, 'cadastrar'])->name('adm-cad-home');
Route::post('/adm/upd/home/{home}', [AdmHomeController::class, 'update'])->name('adm-upd-home');

//Rotas de Perrengues - Categorias
Route::get('/adm/perrengues-cateroria', [PerrenguesCategoriaController::class, 'show'])->name('adm-show-perrengues-cateroria');
Route::get('/adm/form/perrengues-cateroria', [PerrenguesCategoriaController::class, 'form'])->name('adm-form-perrengues-cateroria');
Route::get('/adm/info/perrengue-categoria/{perrengueCategoria}', [PerrenguesCategoriaController::class, 'info'])->name('adm-info-perrengue-categoria');
Route::post('/adm/cad/perrengues-cateroria', [PerrenguesCategoriaController::class, 'cadastrar'])->name('adm-cad-perrengue-categoria');
Route::post('/adm/upd/perrengues-cateroria/{perrengueCategoria}', [PerrenguesCategoriaController::class, 'update'])->name('adm-upd-perrengue-categoria');

//Rotas de Perrengues - Perrengues
Route::get('/adm/perrengues', [PerrenguesController::class, 'show'])->name('adm-show-perrengues');
Route::get('/adm/form/perrengues', [PerrenguesController::class, 'form'])->name('adm-form-perrengues');
Route::get('/adm/form/perrengue/{perrengueCategoria}', [PerrenguesController::class, 'form'])->name('adm-form-perrengues-categoria');
Route::get('/adm/info/perrengues/{perrengue}', [PerrenguesController::class, 'info'])->name('adm-info-perrengues');
Route::post('/adm/cad/perrengues', [PerrenguesController::class, 'cadastrar'])->name('adm-cad-perrengues');
Route::post('/adm/upd/perrengues/{perrengue}', [PerrenguesController::class, 'update'])->name('adm-upd-perrengues');

//Rotas de Modulos 
Route::get('/adm/form/modulos/{perrengue}', [ModulosController::class, 'form'])->name('adm-form-modulos');
Route::get('/adm/info/modulos/{modulo}', [ModulosController::class, 'info'])->name('adm-info-modulos');
Route::post('/adm/cad/modulos', [ModulosController::class, 'cadastrar'])->name('adm-cad-modulos');
Route::post('/adm/upd/modulos/{modulo}', [ModulosController::class, 'update'])->name('adm-upd-modulos');


//Rotas Portal Protur
Route::get('/portal', [HomeController::class, 'index'])->name('home');
Route::get('/membros', [HomeController::class, 'membros'])->name('membros');
Route::get('/perfil/{membro}', [HomeController::class, 'perfil'])->name('perfil-membros');
Route::get('/perrengue/{perrengue}', [HomeController::class, 'perrengue'])->name('perfil-perrengue');
Route::get('/agenda', [HomeController::class, 'agenda'])->name('agenda');
Route::get('/eventos', [HomeController::class, 'eventos'])->name('eventos');
Route::get('/parceiros', [HomeController::class, 'parceiros'])->name('parceiros');
Route::get('/parceiros/perfil/{parceiro}', [HomeController::class, 'parceirosPerfil'])->name('parceiros-perfil');
Route::get('/apoiadores', [HomeController::class, 'apoiadores'])->name('apoiadores');
Route::get('/apoiadores/perfil/{apoiador}', [HomeController::class, 'apoiadoresPerfil'])->name('apoiadores-perfil');

//Rotas Institucionais 
//Rotas Autorização Blindada 
Route::get('/autorizacao/blindada', [AutorizacaoController::class, 'home'])->name('autorizacao-home');
//Nacional
Route::get('/autorizacao/blindada/local', [AutorizacaoController::class, 'local'])->name('autorizacao-local');
Route::get('/autorizacao/blindada/nacional', [AutorizacaoController::class, 'nacional'])->name('autorizacao-nacional');
Route::get('/autorizacao/blindada/nacional/comarca', [AutorizacaoController::class, 'nacionalComarca'])->name('autorizacao-nacional-comarca');
Route::get('/autorizacao/blindada/qual/idade', [AutorizacaoController::class, 'qualIdade'])->name('autorizacao-qual-idade');
Route::get('/autorizacao/blindada/16anos', [AutorizacaoController::class, 'dzeisanos'])->name('autorizacao-dz-anos');
Route::get('/autorizacao/blindada/sozinho-acompanhado', [AutorizacaoController::class, 'sozinhoAcompanhado'])->name('autorizacao-sozinho-acompanhado');
Route::get('/autorizacao/blindada/sozinho', [AutorizacaoController::class, 'sozinho'])->name('autorizacao-sozinho');
Route::get('/autorizacao/blindada/passaporte', [AutorizacaoController::class, 'passaporte'])->name('autorizacao-passaporte');
Route::get('/autorizacao/blindada/acompanhado', [AutorizacaoController::class, 'acompanhado'])->name('autorizacao-acompanhado');
Route::get('/autorizacao/blindada/pai-mae', [AutorizacaoController::class, 'paiMae'])->name('autorizacao-pai-mae');
Route::get('/autorizacao/blindada/escolhairmao', [AutorizacaoController::class, 'escolhairmao'])->name('autorizacao-escolhairmao');
Route::get('/autorizacao/blindada/irmao', [AutorizacaoController::class, 'irmao'])->name('autorizacao-irmao');
Route::get('/autorizacao/blindada/avo', [AutorizacaoController::class, 'avo'])->name('autorizacao-avo');
//Exterior 
Route::get('/autorizacao/blindada/residencia', [AutorizacaoController::class, 'residencia'])->name('autorizacao-residencia');
Route::get('/autorizacao/blindada/residencia/exterior', [AutorizacaoController::class, 'exterior'])->name('autorizacao-exterior');
Route::get('/autorizacao/blindada/residencia/viajavolta', [AutorizacaoController::class, 'viajavolta'])->name('autorizacao-viajavolta');
Route::get('/autorizacao/blindada/residencia/viajavolta/pai', [AutorizacaoController::class, 'viajavoltaPai'])->name('autorizacao-viajavolta-pai');
Route::get('/autorizacao/blindada/residencia/viajavolta/sozinho', [AutorizacaoController::class, 'viajavoltasozinho'])->name('autorizacao-sozinho');
Route::get('/autorizacao/blindada/residencia/viajavolta/acompanhado', [AutorizacaoController::class, 'viajavoltacompanhado'])->name('autorizacao-acompanhado');
Route::get('/autorizacao/blindada/residencia/viajavolta/acompanhado/pai', [AutorizacaoController::class, 'viajavoltacompanhadopai'])->name('autorizacao-acompanhadopai');
Route::get('/autorizacao/blindada/residencia/viajavolta/sozinhopass', [AutorizacaoController::class, 'viajavoltasozinhopass'])->name('autorizacao-sozinho-pass');
Route::get('/autorizacao/blindada/exterior/sozinho-acompanhado', [AutorizacaoController::class, 'sozinhoAcompanhadoExterior'])->name('autorizacao-sozinho-acompanhado-exterior');

//ARQUIVO
Route::get('/autorizacao/form/exterior/sozinho', [AutorizacaoController::class, 'FormAutorizacaoExteriorSozinho'])->name('autorizacao-exterior-sozinho-form');
Route::post('/autorizacao/exterior/sozinho', [AutorizacaoController::class, 'AutorizacaoExteriorSozinho'])->name('autorizacao-exterior-sozinho');