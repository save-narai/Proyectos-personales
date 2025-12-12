<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kintsugi-Store</title>
    <link rel="stylesheet" href="contacto.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />


</head>
<body>

    <header class="header-container">
        <div class="logo"><img src="img/logo.png" alt="Logo"></div>
        <ul class="menu-area">
            <li><a href="index.php">Inicio</a></li>
            <li><a href="Nosotros.php">Nosotros</a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
         


        <div class="menu-icons">
            <a href="#"><img src="image/buscar.png" alt="Buscar"></a>
            <a href="#"><img src="image/corazon.png" alt="Favoritos"></a>
        </div>
    </header>

    <!-- Primera seccion Banner -->
    <section>
        <div class="dj-banner">
            <div class="dj-bg">
                <img src="img/contacto.png" alt="Principal Image" class="dj-img"/>
                <div class="dj-text">
                    <h1><b>Contactanos</b></h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Mapa interactivo -->
    <section class="mainEncuentranos">
        <div class="encuentranos">
            <div class="textoMapa">
                <h2>DANGO-SHOT EN TU CIUDAD</h2>
                <p> Usa nuestro mapa interactivo para encontrar las tiendas Dango-Shot más cercanas.</p>
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.8610826703334!2d-74.13984192976167!3d4.618860932123584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9ebaca191fa3%3A0x28079add05f37b00!2sCentro%20Comercial%20Plaza%20de%20las%20Am%C3%A9ricas!5e0!3m2!1ses-419!2sco!4v1719003166976!5m2!1ses-419!2sco" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <div class="container">
        <form id="survey-form" action="https://formspree.io/f/xoqgyzpr" method="POST">
            <h1 id="title" class="text-center">Contáctanos</h1>
            <div class="form-group">
                <label id="name-label" for="name">Nombre</label>
                <input class="form-control" name="name" id="name" type="text" required placeholder="Ingrese su nombre">
            </div>
            <div class="form-group">
                <label id="email-label" for="email">Email</label>
                <input class="form-control" name="email" id="email" type="email" required placeholder="Ingrese su Email">
            </div>
            <div class="form-group">
                <label id="number-label" for="number">Edad<span class="clue">(Opcional)</span></label>
                <input class="form-control" name="number" id="number" type="number" placeholder="Edad" min="10" max="100">
            </div>
            <div class="form-group">
                <label for="comments">Déjanos un comentario</label>
                <textarea id="comments" class="input-textarea" name="comment" placeholder="Escribe tu comentario aquí..."></textarea>
            </div>
            <div class="form-group">
                <button type="submit" id="submit" class="submit-button">Enviar</button>
            </div>
        </form>
    </div>


    
    
 <!-- Tu contenido principal aquí -->
    
 <footer class="footer">
    <div class="container-footer">
        <div class="menu-footer">
            <div class="contact-info">
                <p class="title-footer">Información de Contacto</p>
                <ul>
                    <li>Dirección: 71 Pennington Lane Vernon Rockville, CT 06066</li>
                    <li>Teléfono: 123-456-7890</li>
                    <li>Fax: 55555300</li>
                    <li>Email: Kintsugi-Store@gmail.com</li>
                </ul>
                <div class="social-icons">
                    <a href="#" class="facebook">
                        <img src="img/facebook.png" alt="Facebook">
                    </a>
                    <a href="#" class="twitter">
                        <img src="img/x.png" alt="Twitter">
                    </a>
                    <a href="#" class="youtube">
                        <img src="img/youtube.png" alt="YouTube">
                    </a>
                    <a href="#" class="pinterest">
                        <img src="img/pinterest.png" alt="Pinterest">
                    </a>
                    <a href="#" class="instagram">
                        <img src="img/instagram.png" alt="Instagram">
                    </a>
                </div>
            </div>

            <div class="information">
                <p class="title-footer">Información</p>
                <ul>
                    <li><a href="#">Acerca de Nosotros</a></li>
                    <li><a href="#">Información Delivery</a></li>
                    <li><a href="#">Políticas de Privacidad</a></li>
                    <li><a href="#">Términos y Condiciones</a></li>
                    <li><a href="#">Contáctanos</a></li>
                </ul>
            </div>

            <div class="my-account">
                <p class="title-footer">Mi cuenta</p>
                <ul>
                    <li><a href="#">Mi cuenta</a></li>
                    <li><a href="#">Historial de órdenes</a></li>
                    <li><a href="#">Lista de deseos</a></li>
                    <li><a href="#">Boletín</a></li>
                    <li><a href="#">Reembolsos</a></li>
                </ul>
            </div>

            <div class="newsletter">
                <p class="title-footer">Boletín Informativo</p>
                <div class="content">
                    <p>Suscríbete a nuestros boletines ahora y mantente al día con nuevas colecciones y ofertas exclusivas.</p>
                    <input type="email" placeholder="Ingresa tu correo aquí...">
                    <button>Suscríbete</button>
                </div>
            </div>
        </div>

        <div class="copyright">
            <p>Desarrollado por Programación para el mundo &copy; 2024</p>
        </div>
    </div>
</footer>


    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script  src="https://code.jquery.com/jquery-3.4.1.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script  src="app.js"></script>    
        <script  src="js/compra.js"></script>
        <script  src="contacto.js"></script>
        <script  src="scipt1.js"></script>
        <script  src="script.js"></script>
    




</body>
</html>