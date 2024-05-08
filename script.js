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