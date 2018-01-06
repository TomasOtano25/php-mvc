<?php

class Details extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }

    public function details($IdUser){
        $UserName = Session::getSession("User");
        if($UserName != ""){
            $response = $this->model->getDataModel("*","IdUser = '".$IdUser."'");
            $this->view->render($this,"details",$response);
        }else{
            header("Location:".URL);
        }
    }
}