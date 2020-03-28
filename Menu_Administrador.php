<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menu Biblioteca Quetzalcóatl</title>
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <header class="main-heder">
        <div class="container container--flex">
           <div class="imagen-heder column column--20">
                <img src="images/logo.svg">
            </div>
            <div class="logo-container column column--20">
                <hi class="logo">BIBLIOTECA QUETZALCOATL</hi>
            </div>
            <div class="imagen-heder column column--20">
                <img src="images/ninos.svg">
            </div>
        </div>
    </header>
    <nav class="main-nav">
        <div class="container container--flex"></div>
           <span class="icon-menu" id="btnmenu"></span>
           <ul class="menu" id="menu">
             <li class="menu__item"><a href="/" class="menu__link menu__link--select">INICIO</a></li>
             <li class="menu__item"><a href="LIBROS" class="menu__link">LIBROS</a></li>
             <li class="menu__item"><a href="Registro_de_Libros.php" class="menu__link">REGISTRO DE LIBROS</a></li>
             <li class="menu__item"><a href="Registro_de_Usuarios.php" class="menu__link">REGISTRO DE USUARIO</a></li>
           </ul>
    </nav>
    <section class="banner">
        <img src="images/banner.png.png" alt="" class="banner__img">
        <div class="banner__content">se puede hablar, reir, llorar, cantar y aprender en silencio... A eso se le llama LEER</div>
    </section>
    <main class="main">
        <section class="group group--color">
            <div class="container">
                <h2 class="main__title">BIENVENIDOS A SU BIBLIOTECA QUETZALCÓATL</h2>
                <p class="main__txt">MISIÓN 
Garantizar que todos los alumnos y alumnas del “jardín de niños Quetzalcóatl” obtenga una educación integral qué equilibre la formación en valores ciudadanos, el desarrollo de competencias y la adquisición de conocimientos, a través de actividades retadoras en el aula, la práctica docente y el ambiente institucional, para fortalecer la convivencia democrática Intercultural, en un ambiente de igualdad y respeto a la integridad física y la identidad de cada uno de nuestros alumnos. Contar con herramientas tecnología y didácticas acordé a las necesidades de los alumnos y alumnas promoviendo aprendizajes significativos acordé a nuestro nivel educativo. Lograr una educación de calidad, cumplimiento con las prioridades básicas de mejora escolar.
</p>
            </div>
        </section>
        <section class="group main__about__description container container--flex">
        <div class="column column--50"></div>
        <img src="img/escuela.jpg" alt="">
        <div class="column column--50">
            <h3 class="column__title">VISIÓN</h3>
            <p class="column__txt">Somos el “jardín de niños Quetzalcóatl”, comprometido a formar alumnos con un alto desempeño en sus habilidades comunicativas y de razonamiento lógico matemático, con pleno dominio de los enfoques curriculares. Una comunidad escolar que integran niños y niñas con necesidades educativas especiales, que favorece la educación intelectual, aprovechando el tiempo dedicado a la enseñanza, cumple el calendario escolar, disminuye los índices de deserción, que mejora la infraestructura escolar, rinde cuenta de su desempeño, comparte, cumple lo que planea y fortalece la práctica de valores, la formación ciudadana y la cultura de la legalidad, que impulsa una cultura de participación en la toma de decisiones. 
</p>
        </div>
        </section>
        <section class="GROUP some-books">
            <h2 class="some-books__title">LIBROS MÁS LEIDOS</h2>
            <div class="container container__flex">
                <div class="column column--50--25">
                    <img src="img/plate1.jpg" alt="" class="some-books__img">
                    <div class="some-books__title">LIBRO ESPECIAL1</div>
                </div>
                <div class="column column--50--25">
                    <img src="img/platel2.jpg" alt="" class="some-books__img">
                    <div class="some-books__title">LIBRO ESPECIAL2</div>
                </div>
                <div class="column column--50--25">
                    <img src="img/platel3.jpg" alt="" class="some-books__img">
                    <div class="some-books__title">LIBRO ESPECIAL3</div>
                </div>
                <div class="column column--50--25">
                    <img src="img/platel4.jpg" alt="" class="some-books__img">
                    <div class="some-books__title">LIBRO ESPECIAL4</div>
                </div>
            </div>
        </section>
    </main>
    <footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">JARDÍN DE NIÑOS QUETZALCÓATL</h2>
                    <p class="column__txt">En el año de 1983 se fundó el jardín de niños Quetzalcóatl ubicado en la CALLE ACCIÓN POPULAR #1804 COL, Acción Popular, Código Postal 31778 Nuevo Casas Grandes, Chihuahua.</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">HECHOS RELEVANTES</h2>
                    <p class="column__txt">Participación en programas de escuelas de calidad y escuelas al 100 donde el plantel se vio beneficiado en reparación total del inmueble.</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">IMPULSO</h2>
                    <p class="column__txt">Mediante el apoyo de madres y padres de familia, instancias correspondientes y colectivo escolar es como se abre este espacio que viene a apoyar la economía familiar y sobre todo la buena nutrición de nuestros niños y niñas.</p>
                </div>
            </div>
                <p class="copy">© 2020 
Jardín De Niños Quetzalcóatl | Todos los derechos reservados</p>
    </footer>
   <script src="js/menu.js"></script>
</body>
</html>