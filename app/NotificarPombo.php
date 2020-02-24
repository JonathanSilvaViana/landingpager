<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 24/02/2020
 * Time: 15:50
 */

namespace SistemaLaravel;


use App\NotificacaoInterface;

class NotificarPombo implements NotificacaoInterface{

    public function notificar(){
        /*
         * Um código muito legal que envia um pombo
         */
        echo "Enviando o Pombo..";
    }
}