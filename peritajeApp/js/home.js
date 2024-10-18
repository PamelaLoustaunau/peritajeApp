document.addEventListener("DOMContentLoaded", function() {
    const siniestros = document.getElementById('siniestros'); 
    const aseguradoras = document.getElementById('aseguradoras');
    const btnBack = document.getElementById('back');
    const btnBackAseguradora = document.getElementById('back-aseguradora');

    const accordionBtns = document.querySelectorAll('.accordion-btn');

    if (siniestros) {
        siniestros.addEventListener('click', function() {
            window.location.href ='./ruteo.php?action=siniestros';
        });
    }

    if (aseguradoras) {
        aseguradoras.addEventListener('click', function() {
            window.location.href ='./ruteo.php?action=aseguradoras';
        });
    }
    if (accordionBtns){
        accordionBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const content = this.nextElementSibling;

                console.log(content); // Verifica el contenido seleccionado

                // Ocultar todos los demás contenidos
                const allContents = document.querySelectorAll('.accordion-content');
                allContents.forEach(c => {
                    if (c !== content) {
                        c.style.display = "none"; // Ocultar otros contenidos
                    }
                });

                // Alternar el display del contenido correspondiente
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        });
    }
    

    if (btnBack) {
        btnBack.addEventListener('click', function() {
            window.location.href ='./ruteo.php?action=home';
        });
    }
    
    if (btnBackAseguradora) {
        btnBackAseguradora.addEventListener('click', function() {
            console.log('Botón Atrás presionado');
            window.location.href ='./ruteo.php?action=aseguradoras';
        });
    }
    
});
