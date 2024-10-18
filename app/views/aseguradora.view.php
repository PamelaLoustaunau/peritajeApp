<link rel="stylesheet" href="./style/style.css">



<?php
class AseguradoraView {


    public function showAseguradoras($aseguradoras){

        echo "<h1>Aseguradoras</h1>
        <div class='accordion'>";
        
        // Recorrer el array utilizando tanto la key como el objeto siniestro

        foreach ($aseguradoras as $key => $aseguradora) {
            echo "
                <button class='accordion-btn aseguradoraBtn' id='accordion-btn-$key'>
                    Aseguradora: $aseguradora->Nombre
                </button>
                <div class='accordion-content' id='accordion-content-$key'>
                    <a href='aseguradora/$aseguradora->ID_Aseguradora'>ID aseguradora: $aseguradora->ID_Aseguradora</a>
                </div>";
        }       
         echo "</div>
         <div class = btn-back>
        <button id='back'>Atrás</button>
        </div>";

    }


    public function showSiniestrosByAseguradora($siniestrosAseguradora){

        echo "<h1>Siniestros por Aseguradora</h1>
        <ul>";
        foreach ($siniestrosAseguradora as $key => $siniestro) {
            echo "
                <li class='siniestrosAseguradora' id='siniestrosAseguradora-$key'>
                    Nombre y Apellido: $siniestro->Asegurado - Fecha: $siniestro->Fecha
                    ID del Siniestro: $siniestro->ID_Siniestro
                    $siniestro->Tipo_Siniestro
                    ID de la Aseguradora: $siniestro->ID_Aseguradora
                </li>";
        }
        
        echo "</ul>
        <div class ='btn-back'>
       <button id='back-aseguradora'>Atrás</button>
       </div>";


    }
}

?>

<script src="./js/home.js"></script>

