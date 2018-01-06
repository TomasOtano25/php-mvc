<?php

class Edit extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }
    public function edit($IdUser){
        $UserName = Session::getSession("User");
        if($UserName != ""){
            $response = $this->model->getDataModel("*","IdUser = '".$IdUser."'");
            $this->view->render($this,"edit",$response);
        }else{
            header("Location:".URL);
        }

    }

    public function editDatos(){
        if  ( isset($_POST["name"]) && isset($_POST["lastname"])  && $_POST["user"]
            && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["IdUser"])){
            $IdUser = $_POST["IdUser"];
                $array["Name"] = $_POST["name"];
                $array["LastName"] = $_POST["lastname"];
                $array["User"] = $_POST["user"];
                $array["Password"] = $_POST["password"];
            $this->model->editModel($array,"IdUser = '".$IdUser."'");

            echo 1;
        }

    }
}

?>