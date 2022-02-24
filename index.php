<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TeamCode</title>
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"/>
    
</head>
<body>
    <!-- Boton de para subir a inicio de pagina -->
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Team<span>Code</span></a></div>
            <ul class="menu">
                <li><a href="#home" class="menu-btn">Inicio</a></li>
                <li><a href="#about" class="menu-btn">Sobre nosotros</a></li>
                <li><a href="#services" class="menu-btn">Nuestros servicios</a></li>
                <li><a href="#skills" class="menu-btn">Nuestro trabajo</a></li>
                <li><a href="#teams" class="menu-btn">Nuestro equipo</a></li>
                <li><a href="#contact" class="menu-btn">Contáctanos</a></li>
                <li><a href="./View/login.php" class="menu-btn">Login</a></li>
            </ul>
            <!-- Boton para desplegar menu al ver desde celular -->
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>
        <!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hola, bienvenido(a) a TeamCode</div>
                <div class="text-3"><span class="typing"></span></div>
                <a href="#about">Saber más</a>
            </div>
        </div>
    </section>
        
    <!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Sobre nosotros</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="Images/TeamCodeLogo3.png" alt="">
                </div>
                <div class="column right">
                    <div class="text">Somos <span class="typing-2"></span></div>
                    <p>Somos un equipo de trabajo con conocimientos en la creación de soluciones en software. TeamCode es una idea en desarrollo con características de emprendimiento el cual esta siendo realizado por un pequeño grupo de entusiastas de la programación. Nuestro principal objetivo es conectarte con tus clientes por medio de una solución de software de calidad pero centrándonos en generar una excelente experiencia a los que la utilicen. No dudes en contactarnos si necesitas una aplicación, sistema o pagina web para hacer crecer a tu negocio. 
                    <p>"Tráenos tus ideas, te ayudaremos a hacerla realidad"</p>
                    <p>"TeamCode. Exelencia, eficacia y calidad a un click"</p>
                    <!-- <a href="#">Download CV</a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
            <h2 class="title">Nuestros servicios</h2>
            <div class="serv-content">
                <div class="card">
                    <div class="box">
                        <i class="fas fa-paint-brush"></i>
                        <div class="text">Diseño web</div>
                        <p>¿No sabes como deberia de verse tu pagina o aplicación web? Nosotros te ayudamos!! :)</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-chart-line"></i>
                        <div class="text">Aplicaciones web</div>
                        <p>Creamos aplicaciones web a la medida, deacuerdo a la necesidad de cada negocio o cliente.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Páginas web</div>
                        <p>¿Quieres dar a conocer más tu negocio?, Nosotros crearemos una página atractiva y informativa para tu negocio.</p>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">¿Cómo trabajamos?</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Nos centramos en tener control completo sobre lo que hacemos.</div>
                    <p>Para nosotros es de gran importancia el diseñar y implementar cada pequeño detalle de tu sistema, por eso nos centramos en utilizar lenguajes de programación para crear tu sistema en lugar de utilizar herramientas como WIX, Wordpress, etc. ¿Porqué?, ésto es debido a que estas herramientas se utilizan para generar sistemas de manera mas rapida, pero en el proceso perdemos la habilidad de decidir el "como" se maneja cada cosa de tu sistema a lo interno, de manera que esto genera problemas y evita que tu sistema sea escalable (Que se puedan agregar o modificar funcionalidades personalizadas a tu sistema). Por ello, te garantizamos que nuestros sistemas van a ser creados buscando cumplir con tus expectativas y tambien permitiendo que se pueda mejorar o implementar funcionalidades nuevas.</p>
                    <!-- <a href="#">Read more</a> -->
                </div>
                <div class="column right">
                    <div class="text">Lo que utilizamos:</div>
                    <div class="bars">
                        <div class="info">
                            <span>HTML</span>
                        </div>
                        <div class="line html"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>CSS</span>
                        </div>
                        <div class="line css"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>JavaScript</span>
                        </div>
                        <div class="line js"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>PHP</span>
                        </div>
                        <div class="line php"></div>
                    </div>
                    <div class="bars">
                        <div class="info">
                            <span>MySQL</span>  
                        </div>
                        <div class="line mysql"></div>
                    </div>
                    <div class="text">Entre otros :).</div>
                </div>
            </div>
        </div>
    </section>

    <!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Nuestro equipo</h2>
            <div class="carousel owl-carousel">
                <div class="card">
                    <div class="box">
                        <img src="Images/Jafet.jpg" alt="">
                        <div class="text">Jafet Lara</div>
                        <p>Project Manager/CEO/Developer.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Yimy.jpg" alt="">
                        <div class="text">Yimy Gutierrez</div>
                        <p>Frontend/Analista.</p>
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <img src="images/Luis.jpg" alt="">
                        <div class="text">Luis Valerio</div>
                        <p>Backend/Developer</p>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">¿Tienes dudas o quieres coordinar con nosotros?</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Contáctanos</div>
                    <p>Para TeamCode es un placer atenderle. Envíanos un mensaje :) </p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Nombre</div>
                                <div class="sub-title">TeamCode</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">Correo electrónico</div>
                                <div class="sub-title">grupoteamcode@gmail.com</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                    <div class="text">Cuentanos sobre tu idea</div>
                    <form action="./Bussiness/messageaction.php" method="post">
                        <div class="fields">
                            <div class="field name">
                                <input type="text" name="name" placeholder="Nombre" required>
                            </div>
                            <div class="field email">
                                <input type="email" name="email" placeholder="Correo electrónico" required>
                            </div>
                        </div>
                        <div class="field textarea">
                            <textarea name="message" cols="30" rows="10" placeholder="Mensaje..." required></textarea>
                        </div>
                        <div class="button-area">
                            <input type="hidden" name="action" value="save">
                            <?php
                            if(isset($_GET["r_m"])){
                                if(strcmp($_GET["r_m"], "r") == 0){
                                    echo "<p style='color:green'>Mensaje enviado ;)</p>";
                                }
                            }
                            ?>
                            <button type="submit">Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

        <!-- footer section start -->
        <footer>
            <span>Creado por TeamCode | <span class="far fa-copyright"></span> 2020</span>
        </footer>
        <script src="script.js"></script>
</body>
</html>