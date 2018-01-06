<?php

error_reporting(E_ALL ^E_NOTICE);

class Index extends Controllers
{
   //public $response;
    function __construct()
    {
        /*$response = "";*/
        parent::__construct();
    }
    public function index()
    {
        /*$this->response = $this->model->datosPersonales();
        $dato = $this->response;
        require VIEWS.'Index/index.php';*/

        $UserName = Session::getSession("User");
        if ($UserName != ""){
            header("Location:".URL."Principal/principal");
        }else{
            $this->view->render($this,'index',"");
        }



        //var_dump($this->view);
    }

    //Pasando parametros por la url
    /*public function index2($valor)
    {
        $dato = null;
        $i = 0;
        $this->response = $this->model->datosPersonales();
        $datos = $this->response;
        foreach ($datos as $value) {
            if ($datos[$i] == $datos[$valor]) {
                $dato = $value; //$dato = $datos[$i];
            }
            $i++;
        }
        require VIEWS.'index.php';
    }*/

    public function signIn(){
        /*$UserName = Session::getSession("User");
        if ($UserName != ""){
            Session::destroy();
            $this->view->render($this,'signIn',"");
        }else {*/
            $this->view->render($this, 'signIn', "");
       /*}*/
    }


}
    
?>