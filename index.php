<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@v2.15.1/devicon.min.css">
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


    <!-- SOBRE MI -->
    <section id="sobre-mi" class="seccion-sobre-mi">
        <div class="container sobre-mi-grid">
            <!-- Foto a la izquierda -->
            <div class="col-izquierda">
                <img src="img/tu-foto-perfil.jpeg" alt="Foto de perfil" class="foto-perfil">
            </div>

            <!-- Información a la derecha -->
            <div class="col-derecha">
                <h2>Sobre Mí</h2>
                <p>
                    Técnico Superior en Desarrollo de Software y estudiante universitario apasionado por la tecnología. 
                    Tengo experiencia desarrollando proyectos web fullstack y soluciones de software administrativo, 
                    además de contar con certificación CCNA de CISCO en redes.
                </p>

                <h3>Habilidades Técnicas</h3>
                <div class="logos-habilidades">
                    <!-- Puedes usar etiquetas <img> con SVGs o fuentes de iconos como Devicon -->
                    <div class="skill-item" title="Node.js"><i class="devicon-nodejs-plain colored"></i><span>Node.js</span></div>
                    <div class="skill-item" title="Next.js"><i class="devicon-nextjs-original colored"></i><span>Next.js</span></div>
                    <div class="skill-item" title="React.js"><i class="devicon-react-original colored"></i><span>React</span></div>
                    <div class="skill-item" title="JavaScript"><i class="devicon-javascript-plain colored"></i><span>JavaScript</span></div>
                    <div class="skill-item" title="Java"><i class="devicon-java-plain colored"></i><span>Java</span></div>
                    <div class="skill-item" title="PHP"><i class="devicon-php-plain colored"></i><span>PHP</span></div>
                    <div class="skill-item" title="PostgreSQL"><i class="devicon-postgresql-plain colored"></i><span>PostgreSQL</span></div>
                    <div class="skill-item" title="MySQL"><i class="devicon-mysql-plain colored"></i><span>MySQL</span></div>
                    <div class="skill-item" title="SQL Server"><i class="devicon-microsoftsqlserver-plain colored"></i><span>SQL Server</span></div>
                    <div class="skill-item" title="Redes Cisco"><i class="devicon-cisco-plain colored"></i><span>Cisco CCNA</span></div>
                </div>

                <!-- Currículum al final -->
                <div class="seccion-cv">
                    <a href="ruta-a-tu-cv.pdf" download class="btn-cv">Descargar Curriculum (PDF)</a>
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
    <section id="proyectos" class="seccion-proyectos">
        <div class="container">
            <h2>Proyectos</h2>

            <!-- Tarjeta Grande Destacada -->
            <div class="tarjeta-destacada">
                <div class="img-destacada-container">
                    <img id="proyecto-img" src="img/proyecto1.jpg" alt="Imagen del proyecto destacado">
                </div>
                <div class="info-destacada">
                    <h3 id="proyecto-titulo">Sistema Administrativo para Sindicato</h3>
                    <p id="proyecto-desc">
                        Aplicación web completa diseñada para la gestión y administración de afiliados, cuotas y reportes administrativos. Desarrollada con Node.js y base de datos SQL.
                    </p>
                    <div class="botones-proyecto">
                        <a id="proyecto-github" href="https://github.com/tu-usuario/proyecto" target="_blank" class="btn btn-github">Ver GitHub</a>
                        <a id="proyecto-galeria" href="#" class="btn btn-imagenes">Ver Más Imágenes</a>
                    </div>
                </div>
            </div>

            <!-- Carrusel / Miniaturas de Proyectos -->
            <div class="carrusel-contenedor">
                <p class="instruccion-carrusel">Haz clic en un proyecto para verlo en detalle:</p>
                <div class="carrusel-miniaturas">
                    <div class="miniatura activo" onclick="seleccionarProyecto(0)">
                        <img src="img/proyecto1.jpg" alt="Sistema Sindicato">
                    </div>
                    <div class="miniatura" onclick="seleccionarProyecto(1)">
                        <img src="img/proyecto2.jpg" alt="Página Web Institucional">
                    </div>
                    <div class="miniatura" onclick="seleccionarProyecto(2)">
                        <img src="img/proyecto3.jpg" alt="App Web React/Node">
                    </div>
                    <!-- Agrega más miniaturas según necesites -->
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