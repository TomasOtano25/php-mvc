<?php

class Views
{
    function __construct()
    {
    }
    //Metodo que ejecutara las vistas
    function render($controller,$view,$array){
        //get_class - Devuelve el nombre de la clase de un objeto
        $controller = get_class($controller);

        require VIEWS.DFT.'head.php';

        require VIEWS.$controller.'/'.$view.'.php';

        require VIEWS.DFT.'footer.php';
    }
}