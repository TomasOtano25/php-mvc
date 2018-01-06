<?php

class User extends Controllers
{
    function __construct()
    {
        parent::__construct();
    }
    public function userLogin(){
        if (isset($_POST["email"]) && isset($_POST["password"])){
            $response = $this->model->userLogin('*',"Email = '".$_POST["email"]."'");
            $response = $response[0];
            if($response["Password"] == $_POST["password"]){
                $this->createSession($response["User"]);
                echo  1;
            }
        }
    }

    function createSession($user){
        Session::setSession('User',$user);
    }
    function destroySession(){
        Session::destroy();

        header("Location:".URL);
    }

    public function signIn(){
        if (isset($_POST["name"]) && isset($_POST["lastname"])
            && isset($_POST["user"]) && isset($_POST["email"])
            && isset($_POST["password"])) {
            $response = $this->model->userLogin('*',"Email = '".$_POST["email"]."'");
            $response = $response[0];
            if ($response == null){
                $array["Name"] = $_POST["name"];
                $array["LastName"] = $_POST["lastname"];
                $array["User"] = $_POST["user"];
                $array["Email"] = $_POST["email"];
                $array["Password"] = $_POST["password"];

                $this->model->signInModel($array);
                echo 1;
            }

        }

    }

}

?>