<?php

namespace SistemaLaravel\Http\Controllers;

use Illuminate\Http\Request;
use SistemaLaravel\Http\Requests\ContatoEnviarRequest;
use Illuminate\Support\Facades\App;
use SistemaLaravel\Contato;
use SistemaLaravel\NotificarEmail;
#use App\NotificacaoInterface;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function enviar(Request $request, Contato $contato/*, NotificacaoInterface $notificar*/)
    {
        $contato = new Contato();

        $contato->nome = $request->get('nome');
        $contato->sobrenome = $request->get('sobrenome');
        $contato->whatsapp = $request->get('whatsapp');
        $contato->email = $request->get('email');
        $contato->textarea = $request->get('textarea');

        $contato->save();

        echo "Sua mensagem foi armazenada com sucesso! Código: " . $contato->id;

        //Notificando via e-mail

        #$notificar->notificar();
    }

    /**
     * Exibe uma lista com as mensagens cadastradas
     */
    public function lista(){
        return view('lista', array('contatos' => Contato::all()));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sucesso()
    {
        return view('sucesso');
    }

    public function checaquemevoce()
    {

    }

    public function tryagain()
    {
        return view('tryagain');
    }
}
