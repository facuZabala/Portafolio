let menuVisible = true;
//Funcion que oculta o muestra menu

function mostrarOcultarMenu(){
    if(!menuVisible){
        document.getElementById("nav").classList="";
        menuVisible = true;
    }else{
        document.getElementById("nav").classList="responsive";
        menuVisible = false;
    }
}

function seleccionar(){
    //oculto el menu una vez que selecciono una opcion
    document.getElementById("nav").classList="";
    menuVisible = false;
}

//Funcion que aplica las animaciones de las habilidades
function efectoHabilidades(){
    var skills = document.getElementById("skills");
    var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
    if(distancia_skills >= 300){
        let habilidades = document.getElementsByClassName("progreso");
        habilidades[0].classList.add("javascript");
        habilidades[1].classList.add("htmlcss");
        habilidades[2].classList.add("php");
        habilidades[3].classList.add("c");
        habilidades[4].classList.add("java");
        habilidades[5].classList.add("mysql");
        habilidades[6].classList.add("sqlserver");
        habilidades[7].classList.add("comunicacion");
        habilidades[8].classList.add("tbe");
        habilidades[9].classList.add("liderazgo");
        habilidades[10].classList.add("creatividad");
        habilidades[11].classList.add("dedicacion");
        habilidades[12].classList.add("pm");
        habilidades[13].classList.add("adaptabilidad");
    }
}
//detecto el scrolling para aplicar la animacion de la barra de habilidades
window.onscroll = function(){
    efectoHabilidades();
}

// Arreglo de información de tus proyectos
const proyectos = [
    {
        titulo: "Sistema Administrativo para Sindicato",
        descripcion: "Aplicación web completa diseñada para la gestión y administración de afiliados, cuotas y reportes administrativos. Desarrollada con Node.js, Express y base de datos SQL.",
        imagen: "img/proyecto1.jpg",
        github: "https://github.com/tu-usuario/sistema-sindicato",
        galeria: "#"
    },
    {
        titulo: "Página Web Institucional",
        descripcion: "Sitio web moderno y responsivo para empresa local. Construido con HTML5, CSS3, JavaScript e integración de formulario de contacto con PHP.",
        imagen: "img/proyecto2.jpg",
        github: "https://github.com/tu-usuario/pagina-web",
        galeria: "#"
    },
    {
        titulo: "Aplicación de Gestión Fullstack",
        descripcion: "Plataforma desarrollada con Next.js y React en el frontend y PostgreSQL para la base de datos. Cuenta con autenticación de usuarios y panel de control.",
        imagen: "img/proyecto3.jpg",
        github: "https://github.com/tu-usuario/app-gestion",
        galeria: "#"
    }
];

// Función para cambiar el proyecto activo
function seleccionarProyecto(index) {
    const proyecto = proyectos[index];

    // Actualizar elementos de la tarjeta principal
    document.getElementById("proyecto-img").src = proyecto.imagen;
    document.getElementById("proyecto-titulo").textContent = proyecto.titulo;
    document.getElementById("proyecto-desc").textContent = proyecto.descripcion;
    document.getElementById("proyecto-github").href = proyecto.github;
    document.getElementById("proyecto-galeria").href = proyecto.galeria;

    // Actualizar clase activa en las miniaturas
    const miniaturas = document.querySelectorAll(".miniatura");
    miniaturas.forEach((min) => min.classList.remove("activo"));
    miniaturas[index].classList.add("activo");
}