<?php //este middleware modifica el response para asignarle datos al usuario
    function sessionAuthMiddleware($res) {
        session_start(); //lee si hay una cookie, sino le da al cliente una sin datos
        if(isset($_SESSION['ID_USER'])){ //si está seteado el id del usuario...
            $res->user = new stdClass(); //en este objeto que habíamos creado guarda la info del usuario
            $res->user->id = $_SESSION['ID_USER'];
            $res->user->email = $_SESSION['EMAIL_USER'];
            return;
    }
}
?>
