<?php

class AseguradoraModel{
    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=peritajes;charset=utf8', 'root', '');
     }

    public function getAseguradoras(){
        $query = $this -> db->prepare('SELECT * FROM aseguradora');
        $query->execute();
        $aseguradoras = $query -> fetchAll(PDO::FETCH_OBJ);
        return $aseguradoras;
    }
    public function getsiniestrosAseguradoraId($id){
        $query = $this -> db->prepare('SELECT * FROM siniestro WHERE ID_Aseguradora=?');
        $query->execute([$id]);
        $siniestrosAseguradoraId = $query -> fetchAll(PDO::FETCH_OBJ);
        return $siniestrosAseguradoraId;

    }


}