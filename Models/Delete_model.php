<?php

class Delete_model extends Conexion
{
    function __construct()
    {
        parent::__construct();
    }

    function getDataModel($columns,$where){
        return $this->db->select1($columns,'user',$where);
    }
    
    function deleteModel($where){
        return $this->db->delete('user',$where);
    }
}