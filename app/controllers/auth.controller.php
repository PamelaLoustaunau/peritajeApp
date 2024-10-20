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

    public function login(){     //la acción de login

        if (!isset($_POST['email']) || empty($_POST['email'])){
            return $this-> view-> showLogin ('Falta completar el nombre de usuario');
        } 

        if (!isset($_POST['password']) || empty($_POST['password'])){
            return $this-> view-> showLogin('Falta completar la contraseña');
        }  

        $email  = $_POST['email'];
        $password = $_POST['password'];

        //verificar el usuario
        $userFromDB = $this-> model-> getUserByEmail($email); // pasword_verify es una función que chequea 
        //si la contraseña que nos da el usuario coincide con el hash que tenemos
        if($userFromDB && password_verify($password,$userFromDB->password)){
            //guardo en la sesión el Id del usuario
            session_start();//para poder almacenar o intercambiar cookies
            $_SESSION['ID_USER'] = $userFromDB->id; 
            $_SESSION['EMAIL_USER'] = $userFromDB->email;

            //redirección al home
            header('Location: '.BASE_URL.'aseguradoras');
            return $this->view->showLogin('Credenciales incorrectas');
        }
        }

            public function logout() {
                session_start(); // busca la cookie
                session_destroy(); // borra la cookie almacenada
                header('Location: ' . BASE_URL);
            }


    }

