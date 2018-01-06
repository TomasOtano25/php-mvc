<?php

class Principal extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }
    function principal(){
        $UserName = Session::getSession("User");
        if($UserName != ""){
            $response = $this->model->getDataModel('*','user');
            $this->view->render($this,'principal',$response);
        }else{
            header("Location:".URL);
        }

    }
}

?>