<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Portafolio</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <!-- MENU ENCABEZADO -->
    <div class="contenedor-header">
        <header>
            <div class="logo">
                <a href="#inicio"><i class="fa-solid fa-user-astronaut"></i></a>
            </div>
            <nav id="nav">
                <ul>
                    <li><a href="#inicio" onclick="seleccionar()">INICIO</a></li>
                    <li><a href="#sobremi" onclick="seleccionar()">SOBRE MI</a></li>
                    <li><a href="#skills" onclick="seleccionar()">HABILIDADES</a></li>
                    <li><a href="#curriculum" onclick="seleccionar()">CURRICULUM</a></li>
                    <li><a href="#portafolio" onclick="seleccionar()">PORTAFOLIO</a></li>
                    <li><a href="#contacto" onclick="seleccionar()">CONTACTO</a></li>
                </ul>
            </nav>
            <div class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars-staggered"></i>
            </div>
        </header>
    </div>

    <!-- INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-banner">
            <div class="contenedor-img">
                <img src="img\WhatsApp Image 2023-12-11 at 02.25.24.jpeg" alt="">
            </div>
            <h1>Rebollo Facundo</h1>
            <h2>Licenciado en Sistemas de la Informacion</h2>
            <div class="redes">
                <a href="https://www.facebook.com/facundogabriel.rebollo" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://wa.me/543794324325" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://github.com/facuZabala" target="_blank"><i class="fa-brands fa-github"></i></a>

            </div>
        </div>
    </section>

    <!-- SOBRE MI -->
    <section id="sobremi" class="sobremi">
        <div class="contenido-seccion">
            <h2>Sobre Mi</h2>
            <p><span>Hola, soy Rebollo Facundo.</span> Un apasionado Analista en Sistemas de la Información y Programador Junior. Mi enfoque se centra en transformar desafíos en soluciones creativas y eficientes.
                Con sólidos conocimientos técnicos y una actitud orientada al aprendizaje, estoy comprometido con el crecimiento continuo. Mi experiencia incluye una pagina web para descargar unidades de estudio de la facultad UNNE, donde pude aplicar mis habilidades en Backend.
                Aunque soy relativamente nuevo en el campo, mi entusiasmo y dedicación para enfrentar nuevos desafíos son evidentes. Estoy emocionado por la oportunidad de contribuir y aprender en entornos de desarrollo dinámicos.
                ¡Gracias por explorar mi perfil!</p>

            <div class="fila">
                <!-- Datos Personales -->
                <div class="col">
                    <h3>Datos Personales</h3>
                    <ul>
                        <li>
                            <strong>Cumpleaños</strong>
                            29-08-2001
                        </li>
                        <li>
                            <strong>Telefono</strong>
                            +54 3794 324325
                        </li>
                        <li>
                            <strong>Email</strong>
                            facu21gabriel@gmail.com
                        </li>
                        <li>
                            <strong>Cargo</strong>
                            <span>FREELANCE</span>
                        </li>
                    </ul>

                </div>
                <!-- Intereses -->
                <div class="col">
                    <h3>Intereses</h3>
                    <div class="contenedor-intereses">
                        <div class="interes">
                            <i class="fa-solid fa-gamepad"></i>
                            <span>VideoJuegos</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-headphones"></i>
                            <span>Musica</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-book"></i>
                            <span>Leer</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-volleyball"></i>
                            <span>VolleyBall</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-plane"></i>
                            <span>Viajar</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-person-swimming"></i>
                            <span>Natacion</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-clapperboard"></i>
                            <span>Peliculas</span>
                        </div>
                        <div class="interes">
                            <i class="fa-solid fa-chess-knight"></i>
                            <span>Ajedrez</span>
                        </div>
                    </div>

                </div>
            </div>
            <button>
                Descargar CV <i class="fa-solid fa-download"></i>
                <span class="overlay"></span>

            </button>
        </div>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="skills">
        <div class="contenido-seccion">
            <h2>Habilidades</h2>
            <div class="fila">
                <!-- Habilidades Tecnicas -->
                <div class="col">
                    <h3>Habilidades Tecnicas</h3>
                    <div class="skill">
                        <span>JavaScript</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>75%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>HTML & CSS</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>79%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>PHP</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>C#</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Java</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>80%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>MySQL</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>SQLServer</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>87%</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Habilidades Profesionales -->
                <div class="col">
                    <h3>Habilidades Profesionales</h3>
                    <div class="skill">
                        <span>Comunicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Trabajo en Equipo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Liderazgo</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>70%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Creatividad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>78%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Dedicación</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>68%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Project Management</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>85%</span>
                            </div>
                        </div>
                    </div>
                    <div class="skill">
                        <span>Adaptabilidad</span>
                        <div class="barra-skill">
                            <div class="progreso">
                                <span>90%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- CURRICULUM -->
    <section id="curriculum" class="curriculum">
        <div class="contenido-seccion">
            <h2>Curriculum</h2>
            <div class="fila">
                <div class="col izquierda">
                    <h3>Formación</h3>
                    <div class="item izq">
                        <h4>Primario</h4>
                        <span class="casa">Escuela N° 955 "Libertador de America"</span>
                        <span class="fecha">2007-2012</span>
                        <p></p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Secudario</h4>
                        <span class="casa">Colegio Secundario "Fray José de la Quintana"</span>
                        <span class="fecha">2013-2018</span>
                        <p>Bachillerato en Agro y Ambiente</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Tecnicatura</h4>
                        <span class="casa">Instituto Superion "Carlos Molina del Llano"</span>
                        <span class="fecha">2022-2024</span>
                        <p>Tecnicatura Superior en Desarrollo de Software</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                    <div class="item izq">
                        <h4>Licenciatura</h4>
                        <span class="casa">Univercidad Nacional del Nordeste Argentino</span>
                        <span class="fecha">2019-2025</span>
                        <p>Licenciado en Sistemas de la Informacion - Analista Programador Univercitario</p>
                        <div class="conectori">
                            <div class="circuloi"></div>
                        </div>
                    </div>
                </div>

                <div class="col derecha">
                    <h3>Experiencia</h3>
                    <div class="item der">
                        <h4>Back Developer</h4>
                        <span class="casa">FreeLance</span>
                        <span class="fecha">2023-2024</span>
                        <p>Me dedique a desarrollar la base de datos y las conexiones de paginas Web con un amigo de la facultad, donde el se encargaba de desarrollar el diseño y las animaciones.</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Arreglo de Computadoras</h4>
                        <span class="casa">Proyecto Personal</span>
                        <span class="fecha">2017-2017</span>
                        <p>Junto con mi tio nos encargamos de dar mantenimiento y arreglar computadoras a personas cercanas</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                    <div class="item der">
                        <h4>Back Developer</h4>
                        <span class="casa">Pagina Web UNNE</span>
                        <span class="fecha">2023-2023</span>
                        <p>Desarrolle la base de datos y las conexiones con la base de datos de una pagina Web para la universidad para que los alumnos pudieran descargar los planes de estudio de las materias</p>
                        <div class="conectord">
                            <div class="circulod"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- PORTAFOLIO -->
    <section id="portafolio" class="portafolio">
        <div class="contenido-seccion">
            <h2>PORTAFOLIO</h2>
            <div class="galeria">
                <div class="proyecto">
                    <img src="img\Captura de pantalla 2023-12-11 230422.png" alt="">
                    <div class="overlay">
                        <h3>Descarga de Unidades UNNE</h3>
                        <p>Pagina web para descargar las unidades de estudio de las materias de la UNNE</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img\portafolio1.jpg" alt="">
                    <div class="overlay">
                        <h3>Fauna y Flora de Crrientes</h3>
                        <p>Con mi grupo de la Tecnicatura realizamos una pagina Web sobre la Flora y Fauna de nuestra provincia</p>
                    </div>
                </div>
                <div class="proyecto">
                    <img src="img\GenSys.jpeg" alt="">
                    <div class="overlay">
                        <h3>Gestion de Productos Empresarial</h3>
                        <p>Una Aplicacion de pantalla para gestionar los productos, usuarios, reportes, transacciones, etc.</p>
                    </div>
            </div>
            <div class="proyecto">
                <img src="img\que-se-necesita-estudiar-para-ser-programador-scaled-1200x900.jpg" alt="">
                <div class="overlay">
                    <h3>Futuros Proyectos</h3>
                    <p>Trabajando en Proyectos Futuros</p>
                </div>
            </div>
        </div>
    </div>

    </section>

    <!-- CONTACTO -->
    <section id="contacto" class="contacto">
        <div class="contenedor-seccion">
            <h2>CONTACTO</h2>
            <div class="fila">
                <!-- Formulario -->
                <form class="col" method="post" action="contacto.php">
                    <input type="text" name="nombre" placeholder="Tú Nombre">
                    <input type="text" name="telefono" placeholder="Número Telefónico">
                    <input type="text" name="direccion" placeholder="Dirección">
                    <input type="text" name="tema" placeholder="Tema">
                    <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                    <button type="submit" name="enviar">
                        Enviar Mensaje <i class="fa-solid fa-paper-plane"></i>
                        <span class="overlay"></span>
                    </button>
                </form>
                <!-- Mapa -->
                <div class="col">
                    <img src="img\desktop-wallpaper-live-gift-space-drawings-astronaut-astronaut-1200x900-for-your-mobile-tablet-cool-astronaut.jpg" alt="">
                    <div class="info">
                        <ul>
                            <li>
                                <i class="fa-solid fa-mobile-screen-button"></i>
                                Telefono: 3794-324325
                            </li>
                            <li>
                                <i class="fa-regular fa-envelope"></i>
                                Email: facu21gabriel@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- FOOTER -->
    <footer>
        <a href="#inicio" class="arriba">
            <i class="fa-solid fa-angles-up"></i>
        </a>
        <div class="redes">
                <a href="https://www.facebook.com/facundogabriel.rebollo" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://wa.me/543794324325" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://github.com/facuZabala" target="_blank"><i class="fa-brands fa-github"></i></a>

            </div>
    </footer> 

    <script src="script.js"></script>
</body>
</html>