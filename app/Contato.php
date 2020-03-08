<?php

namespace SistemaLaravel;

use SistemaLaravel\Nivel;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    /*public function enviar(Request $request, Contato $contato){
        $contato = new Contato();

        //chama as variáveis

        $contato->nome = $request->get('nome');
        $contato->sobrenome = $request->get('sobrenome');
        $contato->whatsapp = $request->get('whatsapp');
        $contato->email = $request->get('email');
        $contato->textarea = $request->get('textarea');

        $contato->save();

        echo "Sua mensagem foi armazenada com sucesso! Código: " . $contato->id;
    }

    public function lista(){
        return view('lista', array('contatos' => Contato::all()));
    }*/


    //após seed e migrate
    public function nivel(){
        return $this->belongsTo(Nivel::class);
    }

}

