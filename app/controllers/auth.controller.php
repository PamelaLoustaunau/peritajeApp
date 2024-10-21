<?php
require_once './app/models/user.model.php';
require_once './app/views/auth.view.php';

class AuthController {
    private $model;
    private $view;
    
    public function __construct(){
        $this-> model = new UserModel();
        $this-> view  = new AuthView();
    }

    public function showLogin(){     //muestra el formulario de login
        return $this-> view-> showLogin();
    }

    public function login(){  //la acción de login

        if (!isset($_POST['email']) || empty($_POST['email'])){
            return $this-> view-> showLogin ('Falta completar el nombre de usuario');
        } 

        if (!isset($_POST['password']) || empty($_POST['password'])){
            return $this-> view-> showLogin('Falta completar la contraseña');
        } 

        $email  = $_POST['email'];
        $password = $_POST['password'];

        //verificar el usuario
        $user= $this-> model-> getUserByEmail($email);
        
        //error_log("DEBUG: Pass ".$password. " Hasheado ".password_hash($password, PASSWORD_DEFAULT));


         // pasword_verify es una función que chequea 
        //si la contraseña que nos da el usuario coincide con el hash que tenemos
       
        if(password_verify($password,$user->password) ){
                session_start();
                //error_log("DEBUG: entró al if con pass ".$password);
     
            //guardo en la sesión el Id del usuario
            $_SESSION['ID_USER'] = $user->id; 
            $_SESSION['EMAIL_USER'] = $user->email;
            //redirección al home
            header('Location: '.BASE_URL);
        } 
        
        else {
            return $this->view->showLogin('Credenciales incorrectas');
        }


        }

        public function logout() {
            session_start(); // busca la cookie
            session_destroy(); // borra la cookie almacenada
            header('Location: ' . BASE_URL);
        }


    }

