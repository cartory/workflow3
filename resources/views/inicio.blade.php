<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Leonidas Esteban</title>
    <link rel="icon" type="image/png" href="../images/favicon.png">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="{{ asset('css/estilos.css') }}" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <figure class="logo">
                <img src="../images/logo.png" height="50" alt="Logo de http://leonidasesteban.com">
            </figure>
            <nav class="menu">
                <ol>
                    <li>
                        <a class="link" href="#portafolio">Portafolio</a>
                    </li>
                    <li>
                        <a class="link" href="#eventos">Experiencia</a>
                    </li>
                    <li>
                        <a class="link" href="#contacto">Trabajemos juntos</a>
                    </li>
                </ol>
            </nav>   
        </div>
    </header>
    <section class="hero">
        <div class="container">
            <h1>
                Hola! Soy <strong>Leonidas Esteban</strong><br>
                Desarrollador <strong>Javascript</strong> con<br>
                pasión por la <strong>enseñanza</strong>
            </h1>
            <img class="hero-image"src="../images/hero.jpg" width="500" height="300" alt="imagen principal del sitio" />
        </div>
    </section>
    <section class="portfolio" id="portafolio">
        <div class="container">
            <h2>Portafolio (Proyectos Destacados)</h2>
            <article class="project">
                <div class="project-details">
                    <h3 class="project-tittle">Platzi Video</h3>
                    <h6 class="project-course">React Native / React</h6>
                    <p class="project-date"><small><strong>Fecha:</strong> 08/11/2019</small></p>
                    <p class="project-url"><small><strong>Puedes verlo en: </strong> www.platzi.com/native</small></p>
                    <p class="project-description">
                        Platzi Video fue el resultado de 3 meses de Trabajemos
                        parra crear la mejor app para enseñar el funcionamiento
                        de React y React Native. Desde crear una vista-detalle,
                        hasta patrones avanzados de navegación, este proyecto
                        ha sido el ejemplo de futuros creadores de aplicaciones
                        multiplataformas
                    </p>
                </div>
                <figure class="project-imageContainer">
                    <img class="project-image" width="500" src="../images/platzi-video-react-native.png"
                        alt="proyecto del curso del curso de react native">
                </figure>
            </article>
            <article class="project">
                <div class="project-details">
                    <h3 class="project-tittle">Platzi Video</h3>
                    <h6 class="project-course">React Native / React</h6>
                    <p class="project-date"><small><strong>Fecha:</strong> 08/11/2019</small></p>
                    <p class="project-url"><small><strong>Puedes verlo en: </strong> www.platzi.com/native</small></p>
                    <p class="project-description">
                        Platzi Video fue el resultado de 3 meses de Trabajemos
                        parra crear la mejor app para enseñar el funcionamiento
                        de React y React Native. Desde crear una vista-detalle,
                        hasta patrones avanzados de navegación, este proyecto
                        ha sido el ejemplo de futuros creadores de aplicaciones
                        multiplataformas
                    </p>
                </div>
                <figure class="project-imageContainer">
                    <img class="project-image" width="500" src="../images/platzi-video-react-native.png"
                        alt="proyecto del curso del curso de react native">
                </figure>
            </article>
        </div>
    </section>
    <div class="container">
        <h2 class="event-list-tittle">Más sobre mi experiencia</h2>
    </div>
    <section class="event-list" id="eventos">
        <div class="container">
            <article class="event">
                <figure class="event-imageContainer">
                    <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
                </figure>
                <div class="event-detail">
                    <h3 class="event-tittle">PlatziConf México 2018</h3>
                    <p class="event-description">
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver plática</a>
                </div>
            </article>
            <article class="event">
                <figure class="event-imageContainer">
                    <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
                </figure>
                <div class="event-detail">
                    <h3 class="event-tittle">PlatziConf México 2018</h3>
                    <p class="event-description">
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver plática</a>
                </div>
            </article>
            <article class="event">
                <figure class="event-imageContainer">
                    <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
                </figure>
                <div class="event-detail">
                    <h3 class="event-tittle">PlatziConf México 2018</h3>
                    <p class="event-description">
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver plática</a>
                </div>
            </article>
            <article class="event">
                <figure class="event-imageContainer">
                    <img class="event-image" src="../images/platzi-conf.jpg" width="500" />
                </figure>
                <div class="event-detail">
                    <h3 class="event-tittle">PlatziConf México 2018</h3>
                    <p class="event-description">
                        El evento más grande sobre gente que quiere aprender
                        más de internet. En este evento te comparto cómo tener
                        una vida de constante aprendizaje
                    </p>
                    <a class="event-url" href="https://www.youtube.com/watch?v=BIS7cWGgJg0" target="_blank">Ver plática</a>
                </div>
            </article>
        </div>
    </section>
    <section class="contact" id="contacto">
        <div class="container">
            <form class="form-email" action="/suscripcion/">
                <h3>¿Creamos algo juntos?</h3>
                <input type="text" placeholder="Déjame tu email" id="email">
                <button>Enviar</button>
            </form>
            <div class="social">
                <a href="https://twitter.com/leonidasesteban" class="social-link twitter"></a>
                <a href="https://facebook.com/leonidas.esteban" class="social-link facebook"></a>
                <a href="htpps://github.com/cartory/workflow3" class="social-link github"></a>
                <a href="htpps://instagram.com/leonidasesteban" class="social-link instagram"></a>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div>
                <p>Curso de Desarrollo Web Online 2018 <img src="../images/platzi.png" width="80px" alt="platzi"></p>
            </div>
            <div>
                <p>
                    Designed with Love by <a href="htpps://twitter.com/thespianartist">@thespianartist</a>
                </p>
            </div>
        </div>
    </footer>
</body>

</html>