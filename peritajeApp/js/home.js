document.addEventListener("DOMContentLoaded", function() {
    const siniestros = document.getElementById('siniestros'); 
    const aseguradoras = document.getElementById('aseguradoras');
    const btnBack = document.getElementById('back');
    const accordion = document.querySelector('.accordion');

    // Comprobar si el botón 'siniestros' existe
    if (siniestros) {
        siniestros.addEventListener('click', function() {
            window.location.href = './ruteo.php?action=siniestros';
        });
    }

    // Comprobar si el botón 'aseguradoras' existe
    if (aseguradoras) {
        aseguradoras.addEventListener('click', function() {
            window.location.href = './ruteo.php?action=aseguradoras';
        });
    }
    
    if (accordion) {
        accordion.addEventListener('click', function(){
         window.location.href = './ruteo.php?action=siniestro';

        });
    }
        // Comprobar si el botón 'back' existe

    if (btnBack) {
        btnBack.addEventListener('click', function() {
            window.location.href = './ruteo.php?action=home';
        });
    }
    

});
