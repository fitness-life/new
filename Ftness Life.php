<!DOCTYPE html>
<html lang="en"><!-- cambiar al es -->
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css"  rel="stylesheet"/>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="shortcut icon" href="../IMAGENES/logo_fitnes life-Photoroom.png" type="image/x-icon">
    <link rel="stylesheet" href="../CSS/estilos3.css" />
    <title>Fitnes Life</title>
  </head>
  <body>
  <div id="biblia-Dios" style="background-color:white; border:1px solid rgb(234,131,131); box-shadow:2px 2px 3px red; position:fixed; z-index:999; border-radius:50%; bottom:20px; left:20px; padding:10px; transition:ease 0.2s;">
    <a href="../HTML/carrito_compras.php"><img src="../IMAGENES/carrito-de-compras.png" class="boton" style="width: 45px; transition: ease 1s;"></a>
  </div>
    <!-- menu -->
    <header class="header" id="principio">
      <nav>
        <div class="nav__header">
          <div class="nav__logo">
            <a href="#"><img src="../IMAGENES/logo_fitnes life-Photoroom.png" alt="logo"/>Fitness Life </a> <!-- logo -->
          </div>
          <div class="nav__menu__btn" id="menu-btn">
            <span><i class="ri-menu-line"></i></span>
          </div>
        </div>
        <ul class="nav__links" id="nav-links">
          <li class="link"><a href="#home">Hogar</a></li>
          <li class="link"><a href="#about">Acerca De</a></li>
          <li class="link"><a href="#class">Clases</a></li>
          <li class="link"><a href="#trainer">Formadores</a></li>
          <li class="link"><a href="#price">Planes</a></li>
          <li class="link"><a href="#product">Productos</a></li>
          <li class="link"><a href="../HTML/contactenos.php"> <button class="btn">Contáctenos</button></li></a>
          <li class="link"><a href="./inicio_sesion.php"> <button class="btn">¡Inicia sesión!</button></li></a>
        </ul>
      </nav>
      <!-- menu -->

      <!-- hogar -->
      <div class="section__container header__container" id="home">
        <div class="header__image">
          <img src="../IMAGENES/header.png" alt="header"/>
        </div>
        <div class="header__content">
          <h4>Construye tu cuerpo y</h4>
          <h1 class="section__header">¡Dale forma!</h1>
          <p>
           Libera tu potencial y embárcate en un viaje hacia una vida más fuerte, Más en forma y más seguro de sí mismo. Inscríbete en 'Haz que tu cuerpo esté en forma' ahora y sé testigo de la increíble transformación de la que es capaz tu cuerpo.
          </p>
          <div class="header__btn">
          <a href="../HTML/unete.php"><button class="btn">¡Unete ahora!</button></a>
          </div>
        </div>
      </div>
      <!--/ hogar -->
    </header>
    <!--/ forma parte del menu y hogar -->

    <!-- historia -->
    <section class="section__container about__container" id="about">
      <div class="about__image">
        <img src="../IMAGENES/about.png" alt="about" />
      </div>
      <div class="about__content">
        <h2 class="section__header">Nuestra historia</h2>
        <p class="section__description">
          Dirigido por nuestro equipo de instructores expertos y motivacionales, "Ftness Life" es una sesión de alta energía y orientada a los resultados que combina Una combinación perfecta de cardio, entrenamiento de fuerza y funcional Ejercicios.
        </p>
        <div class="about__grid">
          <div class="about__card">
            <span><i class="ri-open-arm-line"></i></span>
            <div>
              <h4>
                Política de Puertas Abiertas</h4>
              <p>
                 proporcionamos  acceso sin restricciones a todas las personas, independientemente de su nivel de condición física, edad.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-shield-cross-line"></i></span>
            <div>
              <h4>Totalmente asegurado</h4>
              <p>
                Su tranquilidad es nuestra máxima prioridad, y nuestro compromiso con Su seguridad se extiende a todos los aspectos de su viaje de entrenamiento físico.
              </p>
            </div>
          </div>
          <div class="about__card">
            <span><i class="ri-p2p-line"></i></span>
            <div>
              <h4>Entrenador Personal</h4>
              <p>
                Con planes de entrenamiento personalizados y adaptados a sus necesidades, haremos lo siguiente: Asegúrate de sacar el máximo partido a tu experiencia en el gimnasio.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / historia -->

    <!-- clases -->
    <section class="section__container class__container" id="class">
      <h2 class="section__header">Nuestras Clases</h2>
      <p class="section__description">
        Descubra una amplia gama de clases emocionantes en nuestro gimnasio diseñado para Se adapta a todos los niveles de condición física e intereses. Ya sea que seas un experto atleta o recién comenzando su viaje de entrenamientofísico, nuestras clases ofrecen Algo para todos
      </p>
      <div class="class__grid">
        <div class="class__card">
         
          <img src="../IMAGENES/class-1.jpg" alt="class" />
          <div class="class__content">
            <h4>Entrenamiento de fuerza</h4>
            <p>Entrenamiento de Resistencia</p>
          </div>
        </div>
        <div class="class__card">
          
          <img src="../IMAGENES/class-2.jpg" alt="class" />
          <div class="class__content">
            <h4>Flexibilidad y movilidad</h4>
            <p>Yoga y Boxeo</p>
          </div>
        </div>
        <div class="class__card">
         
          <img src="../IMAGENES/class-3.jpg" alt="class" />
          <div class="class__content">
            <h4>Hito</h4>
            <p>Entrenamiento en circuito</p>
          </div>
        </div>
        <div class="class__card">
        
          <img src="../IMAGENES/class-4.jpg" alt="class" />
          <div class="class__content">
            <h4>Fitness grupal</h4>
            <p>Zumba o Baile</p>
          </div>
        </div>
      </div>
    </section>
<!-- /clases /-->

    <!-- entrenadores -->
    <section class="section__container trainer__container" id="trainer">
      <h2 class="section__header">Nuestros Entrenadores</h2>
      <p class="section__description">
        Nuestros entrenadores son más que expertos en ejercicio; Son apasionados acerca de ayudarlo a alcanzar sus objetivos de salud y estado físico. Nuestros entrenadores están equipados para adaptar los programas de entrenamiento a sus necesidades únicas.
      </p>
      <div class="trainer__grid">
        <div class="trainer__card">
          <img src="../IMAGENES/trainer-1.jpg" alt="trainer" />
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>James Rodriguez</h4>
            <h5>Fuerza y acondicionamiento</h5>
            <hr/>
            <p>
              Con experiencia en deportes competitivos, se dedica a ayudar Alcanzas tu máximo rendimiento físico.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-google-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
          </div>
        </div>
        <div class="trainer__card">
          <img src="../IMAGENES/trainer-2.jpg" alt="trainer" />
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Mark Harris</h4>
            <h5>HIIT y funcional</h5>
            <hr />
            <p>
              Sus entrenamientos enérgicos y dinámicos están diseñados para empujar tu limita, acelera el metabolismo y quema calorías.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-google-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
          </div>
        </div>
        <div class="trainer__card">
          <img src="../IMAGENES/trainer-3.jpg" alt="trainer" />
        </div>
        <div class="trainer__card">
          <div class="trainer__content">
            <h4>Emily Davis</h4>
            <h5>Yoga y Mindfulness</h5>
            <hr />
            <p>
              Las sesiones de Emily son sobre posturas físicas y también sobre Cultivando la paz interior y la atención plena.
            </p>
            <div class="trainer__socials">
              <a href="#"><i class="ri-facebook-fill"></i></a>
              <a href="#"><i class="ri-google-fill"></i></a>
              <a href="#"><i class="ri-instagram-line"></i></a>
              <a href="#"><i class="ri-twitter-fill"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- / entrenadores -->

    <!-- Galeria -->
    <section class="carusel-img">
      <div class="carousel">
        <img src="../IMAGENES/top-view-perfectly-ordered-fitness-items.jpg" alt="Imagen 1" class="active">
        <img src="../IMAGENES/youth-day-celebration-black-white.jpg" alt="Imagen 2" class="hidden">
        <img src="../IMAGENES/gym-handsome-man-workout.jpg" alt="Imagen 3" class="hidden">
        <img src="../IMAGENES/fondo1.jpg" alt="img 4" class="hidden">
        <img src="../IMAGENES/fondo.jpg" alt="img 5" class="hidden">
    </div>
    </section>
    
    <!-- / galeria -->

    <!-- planes  -->
    <section class="section__container price__container" id="price">
      <h2 class="section__header"> Nuestros Precios</h2>
      <p class="section__description">
       Nuestro plan de de precios vienen con varios niveles de membresia, cada uno de ellos diseñados para satisfacer las preferencias y aspiraciones de entrenamiento.
      </p>
      <div class="price__grid">
        <div class="price__card">
          <div class="price__content">
            <h4>Plan Básico</h4>
            <img src="../IMAGENES/price-1.png" alt="price" />
            <p>
             Nuestro plan basico es el punto de partida perfecto para personas que buscan iniciar su viaje de entrenamiento fisico o mantener su estilo de vida activo.
            </p>
            <hr />
            <h4>Caracteristicas</h4>
            <p>Plan de entreno Virtual</p>
            <p>Entrenamiento en Casa</p>
          </div>
          <a href="../HTML/unete.php"><button class="btn">Unete ahora</button></a>
        </div>
        <div class="price__card">
          <div class="price__content">
            <h4>Plan Semanal</h4>
            <img src="../IMAGENES/price-2.png" alt="price" />
            <p>
              Con esta membresia flexible, tendra acceso a nuestras instalaciones de gymnasio de ultima
              generacion, entrenadores expertos  y una buena comunidad fitness.
            </p>
            <hr />
            <h4>Caracteristicas</h4>
            <p>Gimnasios PRO</p>
            <p>Plan de entreno Virtual</p>
            <p>Entrenamiento en Casa</p>
          </div>
          <a href="../HTML/unete.php"><button class="btn">Unete ahora</button></a>
        </div>
        <div class="price__card">
          <div class="price__content">
            <h4>Plan Mensual</h4>
            <img src="../IMAGENES/price-3.png" alt="price" />
            <p>
              Con esta membresía flexible, tendrá acceso a nuestras instalaciones de gimnasio de última generación, entrenadores expertos y una vibrante comunidad de fitness.
            </p>
            <hr />
            <h4>Caracteristicas</h4>
            <p>Gimnasios y clases ELITE</p>
            <p>Gimnasios PRO</p>
            <p>Plan de entreno virtual</p>
            <p>Entrenamiento en Casa</p>
            <p>Entrenamiento personal</p>
          </div>
          <a href="../HTML/unete.php"><button class="btn">Unete ahora</button></a>
        </div>
      </div>
    </section>
  <section>
<!-- /planes -->

  <!--¿Qué dice la gente sobre nosotros? -->

  <section class="section__rosa">
      <h1>¿Que dicen de Nosotros?</h1>
      <div class="section__radio">
        <div class="section__samsung">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4 style="color: black; font-family: 12px;">Servicio Excepcional</h4>
          <p style="color: black;">
           Desde el primer dia me senti valorado y entendido, llevo 2 años y la experiencia 
           no ha cambiado es mi zona de confotrt el lugar donde despejo la mente de los problemas sociales
            ¡RECOMENDADO!
          </p>
          <img src="../IMAGENES/colombiano_9.jpg" alt="user" class="techo" style="margin: 0 auto;"/>
          <h5>Andres Valencia</h5>
          <h6 style="color: black;">Marketing Digital</h6>
        </div>
        <div class="section__samsung">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4 style="color: black; font-family: 12px;">Formadores</h4>
          <p style="color: black;">
          la comunicacion con los entrenadores es confiable y efectiva forman rutinas alimenticias y 
          fisicas que me han ayudado tener un fisico increible, y el ambiente es armonico y perfecto en la 
          egecucion de la rutina.
          </p>
          <img src="../IMAGENES/colombiano_6.webp" alt="user" class="techo" style="margin: 0 auto;" />
          <h5>Reynel Toro</h5>
          <h6 style="color: black;">Mecanico</h6>
        </div>
        <div class="section__samsung">
          <span><i class="ri-double-quotes-l"></i></span>
          <h4 style="color: black; font-family: 12px;">Eficiente y confiable</h4>
          <p style="color: black;">
         En este gymnasio no solo mejoras tu cuerpo, tambien te enseñan a creer en ti mismo y a 
         luchar por tus objetivos,  la confianza y seguridad que he ganado son inigualables 
         ¡ es mas que un gymnasio es MI SEGUNDO HOGAR !
          </p>
          <img src="../IMAGENES/colombiano_5.jpg" alt="user" class="techo" style="margin: 0 auto;"/>
          <h5>Leidy Viviana</h5>
          <h6 style="color: black;">Manicurista</h6>
        </div>
      </div>
    </section>

     <!-- // ¿Qué dice la gente sobre nosotros? -->

    <footer class="footer">
      <div class="section__container footer__container">
        <div class="footer__col">
          <div class="footer__logo">
            <a href="#"><img src="../IMAGENES/logo_fitnes life-Photoroom.png" alt="logo" />Fitness Life</a>
          </div>
          <p>
            Dé el primer paso hacia una persona más saludable y fuerte con nuestros inmejorables planes de precios. ¡Sudamos, logremos y conquistemos juntos!
          </p>
          <div class="footer__socials">
            <a href="https://www.facebook.com/share/9hPXt1KZGvaJnHar/"><i class="ri-facebook-fill"></i></a>
            <a href="https://www.instagram.com/fitnesslife354/profilecard/?igsh=MTRhZW90NjZwcXpt"><i class="ri-instagram-line"></i></a>
            <a href="https://x.com/FitnessLif86989?t=9LVLG0vTZAw6SD54sQjjwg&s=08"><i class="ri-x"></i></a>
          </div>
        </div>
        <div class="footer__col">
          <h4>Compañía</h4>
          <div class="footer__links">
            <a href="#">Negocio</a>
            <a href="#">Franquicia</a>
            <a href="#">Asociación</a>
            <a href="#">Red</a>
          </div>
        </div>
        <div class="footer__col">
          <h4></h4>Sobre nosotros
          <div class="footer__links">
            <a href="#">Blogs</a>
            <a href="#">Seguridad</a>
            <a href="#">Carreras</a>
          </div>
        </div>
        <div class="footer__col">
          <h4>Contacto</h4>
          <div class="footer__links">
            <a href="#">Contactanos</a>
            <a href="#">política de privacidad</a>
            <a href="#">Terminos y Condiciones</a>
            <a href="#">Calculadora de IMC</a>
          </div>
        </div>
      </div>
      <div class="footer__bar">
        FITNES LIFE 
        (El futuro)
      </div>
    </footer>
    <a href="#principio"><img src="../IMAGENES/icono.webp" id="botonArriba"></a>

    <script src="../JS/principal.js"></script>

    
    <script src="../JS/app.js"></script> <!--este es el script del carro de productos este se quitara al nuevo tienpo despues-->
    <script src="../JS/fer.js"></script>
    <script src="../JS/ariba.js"></script>
    

  </body>
</html>