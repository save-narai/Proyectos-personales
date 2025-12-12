<?php require_once "config/conexion.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kintsugi-Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href="assets/css/estilos.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">

    <link rel="icon" type="image/x-icon" href="assets/img/logo.png" />


    
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<header 
 


<header 


      class="header-container">
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
            </div>
        </nav>
    </div>
</header>

    <!-- slider -->

    <div class="slider">
        <!-- list Items -->
        <div class="list">
            <div class="item active">
                <img src="image/img1.png" alt="Slide 1">
                <div class="content">
                    <p>Siguiente</p>
                    <h2>Anime</h2>
                    <p>
                        Descubre el mundo animado lleno de aventuras y emociones que te transportarán a otros mundos.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg" alt="Slide 2">
                <div class="content">
                    <p>Siguiente</p>
                    <h2>Manga</h2>
                    <p>
                        Sumérgete en historias épicas llenas de acción, misterio y personajes inolvidables.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg" alt="Slide 3">
                <div class="content">
                    <p>Siguiente</p>
                    <h2>Cosplay</h2>
                    <p>
                        Explora el arte de transformarte en tus personajes favoritos y vive la magia del cosplay.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg" alt="Slide 4">
                <div class="content">
                    <p>Siguiente</p>
                    <h2>Moda Otaku</h2>
                    <p>
                        Encuentra las últimas tendencias y estilos inspirados en el mundo otaku y la cultura japonesa.
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg" alt="Slide 5">
                <div class="content">
                    <p>Siguiente</p>
                    <h2>Productos</h2>
                    <p>
                        Descubre una variedad de productos únicos que harán brillar tu colección otaku.
                    </p>
                </div>
            </div>
        </div>
        <!-- button arrows -->
        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- thumbnail -->
        <div class="thumbnail">
            <div class="item active">
                <img src="image/img1.png" alt="Thumbnail 1">
                <div class="content">
                    Anime
                </div>
            </div>
            <div class="item">
                <img src="image/img2.jpg" alt="Thumbnail 2">
                <div class="content">
                    Manga
                </div>
            </div>
            <div class="item">
                <img src="image/img3.jpg" alt="Thumbnail 3">
                <div class="content">
                    Cosplay
                </div>
            </div>
            <div class="item">
                <img src="image/img4.jpg" alt="Thumbnail 4">
                <div class="content">
                    Moda 
                </div>
            </div>
            <div class="item">
                <img src="image/img5.jpg" alt="Thumbnail 5">
                <div class="content">
                    Productos 
                </div>
            </div>
        </div>
    </div>




    <div class="owl-nav">
        <div class="owl-prev" onclick="goToPrevSlide()"><img src="img1/flecha-izquierda.png" alt="Flecha izquierda"></div>
    
        <!-- Título centrado -->
        <h2 class="titulo-neon">Categorías</h2>
    
        <div class="owl-carousel">
            <div class="item"><img src="img1/AnyConv.com__categoria-accesorios-1.png" alt="Slider Image 1"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-billeteras-1.png" alt="Slider Image 2"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-dulces-y-comestibles.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-escolar-y-oficina.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-figura.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-gorros-y-bufandas.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-hogar.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-k-pop-1.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-manga-1.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-moda.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-peluches.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-promociones.png" alt="Slider Image 3"></div>
            <div class="item"><img src="img1/AnyConv.com__categoria-suscripciones.png" alt="Slider Image 3"></div>
        </div>
    
        <div class="owl-next" onclick="goToNextSlide()"><img src="img1/flecha-correcta.png" alt="Flecha derecha"></div>
    </div>




    <div class="center">
        <div class="article-card">
            <div class="content">
         
            </div>
            <img src="image/promoropa1.png" alt="article-cover" />
        </div>
        <div class="article-card">
            <div class="content">
            
            </div>
            <img src="image/promo3.png" alt="article-cover" />
        </div>
        <div class="article-card">
            <div class="content">
               
            </div>
            <img src="image/promo2.png" alt="article-cover" />
        </div>
        <!-- Agrega más tarjetas según sea necesario -->
    </div>


    
    
    <div class="image-container">
        <img src="image/tiendan-1280x341.png" alt="Imagen">
      </div>

  


      <div class="container arcoiris-container">
    <div class="row">
        <div class="col-12">
            <a href="#" class="btn-estructura" id="btnCarrito">Carrito <span class="badge bg-success" id="carrito">0</span></a>
        </div>
    </div>
</div>



<section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            <?php
                $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                        <div class="col mb-5 productos text-white" category="<?php echo $data['categoria']; ?>">
                            <div class="card h-100 text-white">
                                <!-- Sale badge-->
                                <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem"><?php echo ($data['precio_normal'] > $data['precio_rebajado']) ? 'Oferta' : ''; ?></div>
                                <!-- Product image-->
                                <img class="card-img-top" src="assets/img/<?php echo $data['imagen']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4 text-white">
                                    <div class="text-center text-white">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder text-white"><?php echo $data['nombre'] ?></h5>
                                        <p><?php echo $data['descripcion']; ?></p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2 text-white">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="text-muted text-decoration-line-through text-white"><?php echo $data['precio_normal'] ?></span>
                                        <?php echo $data['precio_rebajado'] ?>
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto agregar" data-id="<?php echo $data['id']; ?>" href="#">Agregar</a></div>
                                </div>
                            </div>
                        </div>
                <?php  }
                } ?>

            </div>
        </div>
    </section>














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



    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="app.js"></script>
    <script src="script.js" async></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="script1.js"></script>
</body>
</html>
