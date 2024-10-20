<?php
require_once "./libs/response.php";
require_once "./app/middlewares/session.auth.middleware.php";
require_once "./app/controllers/siniestro.controller.php";
require_once "./app/controllers/aseguradora.controller.php";
require_once "./app/controllers/general.controller.php";
require_once "./app/controllers/auth.controller.php";

// base_url para redirecciones y base tag
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

$res= new Response();
//no empty es para preguntar y ver que NO LLEGUE VACIA; si tiene algun dato ingresa y lo guarda en action, sino action es igual a vacio.
if(!empty($_GET["action"])){
    $action = $_GET["action"];
}else {
    $action ="home";
}
$params = explode("/", $action); // params se convierte en un arreglo separado por la barra.

// con el indice recorro los parametros dentro de params
switch($params[0]){
    case "home":
        $controller = new GeneralController($res);
        $controller -> getHome();
        break;
    case "siniestros":
        $controller = new SiniestroController();
        $controller -> getListSiniestros();
        break;
    case "aseguradoras":
        $controller = new AseguradoraController();
        $controller -> getListAseguradoras();
        break;
    case "aseguradora":
        $controller = new AseguradoraController();
        $controller -> getAseguradoraId($params[1]);
        break;
    case "agregarAseguradora":
        //sessionAuthMiddleware();
        $controller = new AseguradoraController();
        $controller -> getAgregarAseguradora();
        break;
    case "aseguradoraAdd":
        $controller = new AseguradoraController();
        $controller -> getAseguradoraAdd();
        break;
    case "aseguradoraDelete":
        $controller = new AseguradoraController();
        $controller -> getAseguradoradelete($params[1]);
        break;
    case "modificarAseguradora":
        $controller = new AseguradoraController();
        $controller -> getAseguradoraModify($params[1]);
        break;
    case "modifyaseguradora":
        $controller = new AseguradoraController();
        $controller -> getModifyAseguradora($params[1]);
        break;
    case "agregarSiniestro":
        //sessionAuthMiddleware();
        $controller = new SiniestroController();
        $controller -> getAgregarSiniestro();
        break;
    case "siniestroAdd":
        $controller = new SiniestroController();
        $controller -> getSiniestroAdd();
        break;
    case "siniestroDelete":
        $controller = new SiniestroController();
        $controller -> getsiniestrodelete($params[1]);
        break;
    case "modificarSiniestro":
        $controller = new SiniestroController();
        $controller -> getSiniestroModify($params[1]);
        break;
    case "modifySiniestro":
        $controller = new SiniestroController();
        $controller -> getModifySiniestro($params[1]);
        break;
    
       
    

    case "showlogin":
        $controller = new AuthController();
        $controller -> showLogin();
        break;
    case "login":
        $controller = new AuthController();
        $controller -> login();
        break;
    case "logout":
        $controller = new AuthController();
        $controller -> logout();
        break;
    default:
        echo "No se encuentra lo ingresado";
}
