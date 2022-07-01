<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>DocHome</title>
    <link rel="stylesheet" href="css/paginap.css">
</head>

<body>

    <header class="bloque header">
        <section class="fondo" >
            <section class="centrar">
                <section class="logo">
                    <h2>DocHome</h2><br><br>
                </section>
                <nav class="menu-principal">
                    <ul class="menu1">
                        <li><a href="{{ url('http://127.0.0.1:8000') }}">Inicio</a></li>
                        <li><a href="{{ route('Cita') }}">Citas</a></li>
                        <li><a href="">Nosotros</a></li>
                        <li><a href="">Registrarse</a>
                            <ul class="submenu">
                                <li><a href="{{ route('Registrodoc') }}">Medico</a></li>
                                <li><a href="{{ route('Registropaci') }}">Paciente</a></li>
                                <li><a href="{{ route('Login3') }}">Admin</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

            </section>
            <section class="centrar">
                <article class="encabezado">
                    <h4 class="subtitulo"></h4><br>

                    <h1 class="titulo-principal">Proyecto DocHome</h1>
                    <hr>
                    <br>
                    <p class="descripcion">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis soluta necessitatibus
                        blanditiis. Voluptatibus quod atque excepturi voluptas culpa maiores alias. Quis perspiciatis
                        eaque
                        labore repellendus tenetur necessitatibus voluptates facilis earum!
                    </p>
                    <br><br>
                </article>

                <article class="centrar">
                    <button> <a class=" bot " href="{{ route('Login1') }}"> Iniciar sesion
                        </a></button>
                </article>


            </section>
        </section>

        <section class="bloque elegir">
            <article class="centrar">

                <article class="derecha">
                    <h4 class="texto-naranja">Tu medico en casa</h4><br>

                    <h1>¿Por qué elegirnos?</h1>
                    <br>

                    <br>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque laborum earum quos quam,
                        perferendis suscipit. Commodi maiores dolorem necessitatibus illum ratione reiciendis corporis
                        at, similique minus eligendi, nesciunt impedit et.</p>

                    <br>
                    <br>

                    <section id="container" class="opciones">
                        <article class="opcion">
                            <img src="img/seguro-de-vida.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Te brindamos seguridad</h4>
                        </article>

                        <article class="opcion">
                            <img src="img/doctor.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Atención</h4>
                        </article>

                        <article class="opcion">
                            <img src="img/apreton-de-manos.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Comprometidos</h4>
                        </article>

                        <article class="opcion">
                            <img src="img/comercio-justo.png" class="img-opciones" alt="">
                            <h4 class="texto-opciones">Responsables</h4>
                        </article>
                    </section>
                </article>
            </article>
        </section>

        <section class="bloque servicios">
            <article class="centrar">
                <h5 class="texto-random">Lista de servicios</h5>
                <h1 class="opciones-servicios">Nuestros servicios</h1>
            </article>
            <section id="container" class="centrar contenedores">

                <section class="contenidos">
                    <img src="img/pago-en-efectivo1.png" class="img-servicios" alt="">
                    <h4 class="titulo-servicios">Metodos de pago</h4>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                        quos
                        voluptas, minus accusamus veritatis numquam ea error sequi modi? Autem nostrum libero.</p>
                </section>

                <section class="contenidos">
                    <img src="img/certificado-medico (1).png" class="img-servicios" alt="">
                    <h4 class="titulo-servicios">Doctores verificados y certificados</h4>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                        quos
                        voluptas, minus accusamus veritatis numquam ea error sequi modi? Autem nostrum libero.</p>
                </section>

                <section class="contenidos">
                    <img src="img/verificado.png" class="img-servicios" alt="">
                    <h4 class="titulo-servicios">Seguridad</h4>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                        quos
                        voluptas, minus accusamus veritatis.</p>
                </section>

                <section class="contenidos">
                    <img src="img/transformar.png" class="img-servicios" alt="">
                    <h4 class="titulo-servicios">Variedad de doctores</h4>
                    <p class="parrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio atque quae
                        quos
                        voluptas, minus accusamus veritatis.</p>
                </section>
            </section>
        </section>

        <footer class="bloque footer">
            <section class="centrar">
                <section class="izquierda">
                    <h4>Contactanos</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa excepturi atque ab neque, soluta
                        eos
                        sit perspiciatis. Perspiciatis perferendis atque minima quia incidunt. Laboriosam voluptate
                        harum et
                        quam, molestiae sit?
                    </p><br>
                    <ul>
                        <li><img src="img/whatsapp (1).png" alt=""><b>WHATSAPP:</b> 306487090</li>
                        <li><img src="img/instagram (1).png" alt=""><b>INSTAGRAM:</b> Instagram/DocHome.com</li>
                        <li><img src="img/facebook.png" alt=""><b>FACEBOOK:</b> Facebook/DocHome.com</li>
                    </ul>
                </section>
            </section>
            <section class="centrar">
                <p class="pie">
                    Todos los derechos reservados (c) - Creado por Aprendicez ADSI 2338357
                </p>
            </section>
        </footer>

</body>

</html>
