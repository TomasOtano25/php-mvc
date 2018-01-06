<?php
   
   require 'config.php';
                                                /* Controller/View */
    $url = isset($_GET["url"]) ? $_GET["url"] : "Index/index";
    $url = explode("/", $url);       
   // var_dump($url);
   
   $controller = "";
   $method = "";  
   
   if (isset($url[0])) {
       $controller = $url[0];
   }
   if (isset($url[1])) {
       if ($url[1] != '') {
           $method = $url[1];
       }
   }

   //Pasando parametros por la url
   if (isset($url[2])) {
       if ($url[2] != '') {
           $params = $url[2];
       }
   }

 /* print($controller."<br>");
  print($method);*/
   
    //Evalua si tenemos una clase cargada - Clase 4
    spl_autoload_register(function($class){
        //Condicion que evalua si existe esa determinada clase 
        if (file_exists(LBS.$class.".php")) {
            require LBS.$class.".php";
        }
    });
    //new Controllers();
    
    //Llamamos a los controladores
    $controllersPath = 'Controllers/'.$controller.'.php';
    //Si el archivo existe
    if (file_exists($controllersPath)) {
        require $controllersPath;

        //Instanciamos la clase
        $controller = new $controller(); /*$controller = new Index();*/        
        //Evaluamos la variable $method
        if (isset($method)) {
            //Si el metodo existe
            if (method_exists($controller,$method)) {
                
                //Pasando parametros por la url
                if (isset($params)) {
                    //ejecutamos el metodo que revisa el parametro
                    $controller->{$method}($params);
                }else {
                    $controller->{$method}();
                }
                
            }else {
                echo "Error no existe el metodo";
            }
        }       
    }else {
        echo "Error en la direccion no existe el controlador";
    }
    //print($controllersPath);
?>