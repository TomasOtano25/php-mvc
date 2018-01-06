<?php
class Delete extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }

    public function delete($IdUser){
        $UserName = Session::getSession("User");
        if($UserName != ""){
            $response = $this->model->getDataModel("*","IdUser = '".$IdUser."'");
            $this->view->render($this,"delete",$response);
        }else{
            header("Location:".URL);
        }
    }

    public function deleteDatos(){
        if (isset($_POST["IdUser"])){

            $where = "IdUser = '".$_POST["IdUser"]."'";
            $this->model->deleteModel($where);

            echo 1;
        }
    }


}
?>