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

/*

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



    if($contato != null)
    {
        //salva os valores
        $contato->save();
        //chama o tipo de código salvo
        echo "Sua mensagem foi salva com sucesso! Código: " . $contato->id;
    }

    else
    {
        return view('/404');
    }

});


Route::get('/lista', function () {
    return view('lista', array('contatos' => Contato::all()
    )
    );
});

*/

Route::get('/sucesso', 'ContatoController@sucesso');

Route::get('/', 'ContatoController@index');
Route::post('/enviar', 'ContatoController@enviar');
Route::get('/lista', 'ContatoController@lista');
Route::get('/tente_novamente', 'ContatoController@tryagain');
#talvez, seja necessário comentar ou refatorar o três caminhos abaixo.
Route::get('auth/login', ['as' => 'auth.form', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', ['as' => 'auth.login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@getLogout']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
