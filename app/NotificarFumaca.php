<?php
/**
 * Created by PhpStorm.
 * User: jonat
 * Date: 24/02/2020
 * Time: 15:37
 */

namespace SistemaLaravel;


use App\NotificacaoInterface;

class NotificarFumaca implements NotificacaoInterface{

    public function notificar(){
        /*
         * Um código muito legal que emite um sinal de fumaça
         */
        echo "Notificando com Fumaça..";
    }

}