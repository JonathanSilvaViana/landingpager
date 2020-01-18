<?php

use App\Http\Requests;
use App\Http\Controllers\Controller;
use SistemaLaravel\Contato;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/enviar', function(Illuminate\Http\Request $request){
    #var_dump($request->all());

    //encapsula a instância do controller
    #$contato = new App/Contato();
    $contato = new Contato();

    //chama as variáveis

    $contato->nome = $request->get('nome');
    $contato->sobrenome = $request->get('sobrenome');
    $contato->whatsapp = $request->get('whatsapp');
    $contato->email = $request->get('email');
    $contato->textarea = $request->get('textarea');

    //salva os valores
    $contato->save();


    //chama o tipo de código salvo
    echo "Sua mensagem foi salva com sucesso! Código: " . $contato->id;



});


Route::get('/lista', function () {
    return view('lista', array('contatos' => Contato::all()));
});