<?php

class User_model extends Conexion
{
    function __construct()
    {
        parent::__construct();
    }
    function userLogin($fields,$where){
        return $this->db->select1($fields,'user',$where);
        
    }
    function signInModel($array){
        return $this->db->insert('user',$array);
    }
}
?>