<?php

class Edit_model extends Conexion
{
    function __construct()
    {
        parent::__construct();
    }

    function getDataModel($columns,$where){
        return $this->db->select1($columns,'user',$where);
    }

    function editModel($array,$where){
        return $this->db->update('user',$array,$where);
    }
}
?>