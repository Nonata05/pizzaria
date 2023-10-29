<?php

require __DIR__ . '/../vendor/autoload.php';

require __DIR__.'/../app/Config/app.php';
require  __DIR__.'/../app/Config/helpers.php';


$uri = $_SERVER['REQUEST_URI'];
$uri = str_replace('/public/', '', $uri); //substituir o public pelo vazio



$controller = CONTROLLER_PADRAO; // constante definida no app.php
$metodo = METODO_PADRAO; //constantante definida no app.php

if($uri != ''){//verificar se existe algum valor em $uri
    $uri = explode ('/', $uri); // converter a var $uri em um array

    $controller = $uri[0]; //reescrever a variavel $controller
    
    if(isset($uri[1])){//verificar se existe a posição 1 em $uri
        $metodo = explode('?', $uri[1])[0];
        
    }

}

//verrificar se o controller existe na pasta app/Controllers
//app/Controllers/Teste.php

if(is_file(__DIR__."/../app/Controllers/" . $controller . ".php")){

    $controller = "Pizzaria\\Controllers\\" . ucfirst($controller); //ucfirs transforma a primeira letra em maúscula
    $controllerExec = new $controller(); //cria uma instancia de controllers

    if(method_exists($controllerExec, $metodo)){
        $controllerExec->$metodo (); //executar o método do controller

    }else{
        echo "Página não encontrada !";
    }

}else{
    echo "Página não encontrada !";
}


