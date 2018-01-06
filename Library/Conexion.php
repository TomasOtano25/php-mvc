<?php

class Conexion extends Controllers
{
    function __construct()
    {                               /*Servidor, Usuario, Contraseña, base de datos*/
        $this->db = new QueryManager("localhost","root","","users");
    }

}
?>