document.addEventListener("DOMContentLoaded", function() {
    const siniestros = document.getElementById('siniestros'); 
    const aseguradoras = document.getElementById('aseguradoras');
    const btnBack = document.getElementById('back');
    const btnBackAseguradora = document.getElementById('back-aseguradora');
    const accordionBtns = document.querySelectorAll('.accordion-btn');
    const agregarAseguradora = document.getElementById('addAseguradoraBtn');
    const agregarsiniestro = document.getElementById('addSiniestroBtn');


    if (siniestros) {
        siniestros.addEventListener('click', function() {
            window.location.href ='./siniestros';
        });
    }

    if (aseguradoras) {
        aseguradoras.addEventListener('click', function() {
            window.location.href ='./aseguradoras';
        });
    }
    if (accordionBtns){
        accordionBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const content = this.nextElementSibling;

                console.log(content); 

                const allContents = document.querySelectorAll('.accordion-content');
                allContents.forEach(c => {
                    if (c !== content) {
                        c.style.display = "none"; 
                    }
                });

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
            window.location.href ='./home';
        });
    }
    
    if (btnBackAseguradora) {
        btnBackAseguradora.addEventListener('click', function() {
            window.location.href ='./aseguradoras';
        });
    }
    if (agregarAseguradora) {
        agregarAseguradora.addEventListener('click', function() {
            window.location.href ='./agregarAseguradora';
        });
    }
    if (agregarsiniestro) {
        agregarsiniestro.addEventListener('click', function() {
            window.location.href ='./siniestro';
        });
    }


    
});
