<?php

class Session
{
    //Iniciamos la sesion

    static function start()
    {
        @session_start();
    }

    //Obtenemos el valor de una de los indice de sesion

    static function getSession($name){
        return $_SESSION[$name];
    }

    //Inicialisamos un valor

    static function setSession($name,$data){
        $_SESSION[$name] = $data;
    }

    //Destruye la sesion

    static function destroy(){
        @session_destroy();
    }
}
?>