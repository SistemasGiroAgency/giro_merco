<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/index.css">

    <title></title>
</head>

<style>
    /* MAIN SLIDER */
    .carousel-control-prev-icon{
        border-radius: 100%;
        background: white url("images/flecha-pequena-izquierda.svg") center center/contain no-repeat;
    }

    .carousel-control-prev-icon:hover{
        background: #e9552d url("images/flecha-pequena-izquierda-blanco.svg") center center/contain no-repeat;
    }

    .carousel-control-next-icon{
        border-radius: 100%;
        background: white url("images/flecha-pequena-derecha.svg") center center/contain no-repeat;
    }

    .carousel-control-next-icon:hover{
        background: #e9552d url("images/flecha-pequena-derecha-blanco.svg") center center/contain no-repeat;
    }

    /* BODY */
    .hojita{
        background: url('images/hojademerco.png') center center/contain no-repeat;
        display: inline-block;
        width: 2rem;
        height: 2rem;
        margin-left: 1vw;
        margin-right: 1vw;
    }

    #body-fondo{
        background: url('images/Patron.png') center center/cover no-repeat;
        width: 100%;
        height: max-content;
    }
</style>

<body>
    <!-- NAV -->
    <section>
        <nav class="navweb">
            <div class="container-fluid">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <img src="images/Logo.png" alt="" style="width: 70%">
                    </div>
                    <div class="col-6">
                        <ul class="lista d-flex align-items-center m-0">
                            <li><a href="">Inicio</a></li>
                            <li><a href="">Garantias</a></li>
                            <li><a href="">Ofertas</a></li>
                            <li><a href="">Conócenos</a></li>
                            <li><a href="">Blog</a></li>
                            <li><a href="">Contacto</a></li>
                        </ul>
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <a href="" class="w-100" style="text-decoration: none">
                            <div class="row tienda">
                                <div class="col-3">
                                    <img class="nav-icons" src="images/carrito-de-compras.svg" alt="">
                                </div>
                                <div class="col-6 d-flex align-items-center justify-content-center">
                                    <p class="m-0 p-0" style="color: white; font-size: 1.6434892541087232vh;"><b>Tienda en Línea</b></p>
                                </div>
                                <div class="col-3">
                                    <div class="circulo">
                                        <img class="nav-icons" src="images/flecha-pequena-derecha-naranja.svg" alt="">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    
        <div class="desplegable" id="desplegable">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-end">
                    <div class="col-2">
                        <img class="cruz" id="cruz" src="images/cruz.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    
        <nav class="navresponsive">
            <div class="container">
                <div class="row" style="height: 10vh">
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <div class="box-carrito">
                            <img class="nav-icons" src="images/carrito-de-compras.svg" alt="">
                        </div>
                    </div>
                    <div class="col-8 d-flex align-items-center justify-content-center">
                        <img src="images/Logo.png" alt="" style="width: 50%">
                    </div>
                    <div class="col-2 d-flex align-items-center justify-content-center">
                        <img class="nav-icons" id="menu" src="images/menu-hamburguesa.svg" alt="">
                    </div>
                </div>
            </div>
        </nav>
    </section>

    <!-- SLIDER -->
    <section>
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="container">
                <div class="row posicion-ofertas">
                    <div class="col-8 col-lg-2">
                        <div class="row">
                            <a href="" class="w-100" style="text-decoration: none;">
                                <div class="row btn-ofertas">
                                    <div class="col-9 p-0 d-flex align-items-center justify-content-end">
                                        <p class="m-0 p-0" style="font-size: 2.02275600505689vh"><b>Aprovecha las ofertas</b></p>
                                    </div>
                                    <div class="col-3">
                                        <div class="circulo">
                                            <img class="nav-icons" src="images/flecha-pequena-derecha-naranja.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-indicators">
                <div class="container">
                    <div class="row">
                        <div class="col-4 col-lg-2 d-flex align-items-center justify-content-center">
                            <div class="containe-social m-0">
                                <ul class="social-media m-0">
                                    <li>
                                        <a href="">
                                            <img width="24" height="24" src="images/facebook.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img width="24" height="24" src="images/instagram.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img width="24" height="24" src="images/youtube.svg" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <img width="24" height="24" src="images/tik-tok.svg" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-4 col-lg-8 d-flex align-items-end justify-content-center">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="col-4 col-lg-2 d-flex align-items-center justify-content-center">
                            <div style="text-align: end">
                                <a href="">
                                    <img class="btn-wha nav-icons" src="images/whatsapp.svg" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100 vh-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100 vh-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100 vh-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <div class="carousel-control-prev-icon" aria-hidden="true"></div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <!-- BODY -->
    <section id="body-fondo">
        <!-- OFERTAS -->
        <section>
            <h1 class="tittle">Ofertas<span class="hojita"></span></h1>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-12">
                        <div id="carousel-temporada" class="carousel slide">
                            <div class="carousel-indicators">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-2">
                                        </div>
                                        <div class="col-8 d-flex align-items-end justify-content-center">
                                            <button type="button" data-bs-target="#carousel-temporada" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                            <button type="button" data-bs-target="#carousel-temporada" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                            <button type="button" data-bs-target="#carousel-temporada" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                        </div>
                                        <div class="col-2 d-flex align-items-center justify-content-center">
                                            <div class="bye-responsive">
                                                <div class="row" style="right: 5vw; position: relative;">
                                                    <a href="" class="w-100" style="text-decoration: none;">
                                                        <div class="row btn-ofertas">
                                                            <div class="col-8 p-0 d-flex align-items-center justify-content-end">
                                                                <p class="m-0 p-0" style="font-size: 2.5284450063211126vh"><b>Ir a Ofertas</b></p>
                                                            </div>
                                                            <div class="col-4">
                                                                <div class="circulo">
                                                                    <img class="nav-icons" src="images/flecha-pequena-derecha-naranja.svg" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-inner ofertas-img-slider">
                              <div class="carousel-item active">
                                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- Responsive -->
                    <div class="col-8 bye-web" style="margin: 2vh">
                        <div class="row">
                            <a href="" class="w-100" style="text-decoration: none;">
                                <div class="row btn-ofertas">
                                    <div class="col-9 p-0 d-flex align-items-center justify-content-end">
                                        <p class="m-0 p-0" style="font-size: 23px"><b>Aprovecha las ofertas</b></p>
                                    </div>
                                    <div class="col-3">
                                        <div class="circulo">
                                            <img class="nav-icons" src="images/flecha-pequena-derecha-naranja.svg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 bye-web" style="margin-bottom: 2vh">
                        <div id="carouselOfertas-responsive" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselOfertas-responsive" data-bs-slide-to="0" class="active Ofertas-slide" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselOfertas-responsive" data-bs-slide-to="1" class="Ofertas-slide" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselOfertas-responsive" data-bs-slide-to="2" class="Ofertas-slide" aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner ofertas-img">
                              <div class="carousel-item active">
                                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="...">
                              </div>
                              <div class="carousel-item">
                                <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="...">
                              </div>
                            </div>
                        </div>
                    </div>

                    <!-- Web -->
                    <div class="col-4 ofertas-img bye-responsive">
                        <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="">
                    </div>
                    <div class="col-4 ofertas-img bye-responsive">
                        <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="">
                    </div>
                    <div class="col-4 ofertas-img bye-responsive">
                        <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="">
                    </div>
                    <div class="col-4 ofertas-img bye-responsive">
                        <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="">
                    </div>
                    <div class="col-4 ofertas-img bye-responsive">
                        <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="">
                    </div>
                    <div class="col-4 ofertas-img bye-responsive">
                        <img src="images/Objeto inteligente vectorial.png" class="d-block w-100" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!-- GARANTÍAS -->
        <section>
            <h1 class="tittle">Garantías<span class="hojita"></span></h1>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12" style="text-align: center">
                                <img class="garantias-img" src="images/caducidad.png" alt="">
                            </div>
                            <div class="col-12">
                                <a href="" style="text-decoration: none">
                                    <div class="garantias-container azul">
                                        <div>
                                            <div><h2 style="color: #62a6da">Caducidad</h2></div>
                                            <div>
                                                <p>Merco ofrece un servicio de 
                                                    reemplazo gratuito para 
                                                    productos vencidos, siempre y cuando se presenten en su 
                                                    empaque original y cerrado. 
                                                    </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12" style="text-align: center">
                                <img class="garantias-img" src="images/frescura.png" alt="">
                            </div>
                            <div class="col-12">
                                <a href="" style="text-decoration: none">
                                    <div class="garantias-container verde">
                                        <div>
                                            <h2 style="color:#398943">Frescura</h2>
                                            <p>La frescura del producto 
                                                implica que ha sido recién
                                                 elaborado, procesado,
                                                cosechado, o horneado, 
                                                asegurando su consumo seguro.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12" style="text-align: center">
                                <img class="garantias-img" src="images/satisfaccion.png" alt="">
                            </div>
                            <div class="col-12">
                                <a href="" style="text-decoration: none">
                                    <div class="garantias-container naranja">
                                        <div>
                                            <h2 style="color: #ecad35">Satisfacción</h2>
                                            <p>Te damos 30 días para 
                                                regresar el artículo que no haya sido de tu total 
                                                satisfacción y te devolvemos el efectivo inmediatamente.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="row">
                            <div class="col-12" style="text-align: center">
                                <img class="garantias-img" src="images/precio.png" alt="">
                            </div>
                            <div class="col-12">
                                <a href="" style="text-decoration: none">
                                    <div class="garantias-container rojo">
                                        <div>
                                            <h2 style="color: #d34529">Precio Bajo</h2>
                                            <p>Merco ofrece el precio más bajo, igualando ofertas de la competencia y reembolsando diferencias dentro de 10 días de compra para compras al menudeo.</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SUCURSALES -->
        <section>
            <h1 class="tittle">Sucursales<span class="hojita"></span></h1>
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-10 container-sucursales">
                        <div class="row d-flex align-items-center justify-content-center">
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <select name="" id="">
                                    <option value="">Selecciona tu estado</option>
                                    <option value="">Cual puto?</option>
                                </select>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <select name="" id="">
                                    <option value="">Selecciona tu municipio</option>
                                    <option value="">Cual puto?</option>
                                </select>
                            </div>
                            <div class="col-3 d-flex align-items-center justify-content-center">
                                <select name="" id="">
                                    <option value="">Selecciona tu tienda</option>
                                    <option value="">Cual puto?</option>
                                </select>
                            </div>
                            <div class="col-2 d-flex align-items-center justify-content-center">
                                <input type="submit" value="Ver Ofertas">
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57533.58404836838!2d-100.3932793513672!3d25.676299700000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x866295886ca025ad%3A0x1aba4daf970d22e5!2sMerco%20Aramberri!5e0!3m2!1ses-419!2smx!4v1713197357373!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <!-- FOOTER-->
    <!-- MERCO QUREMOS ESCUCHARTE -->
    
    <section></section>
</body>
</html>

<script>
    const menu = document.getElementById("menu");
    const desplegable = document.getElementById("desplegable");
    const cruz = document.getElementById("cruz");

    menu.addEventListener("click", function(){
        desplegable.classList.add("desplegable-on");
        cruz.classList.remove("cruz-rotate-off");
        cruz.classList.add("cruz-rotate-on");

        cruz.addEventListener('animationend', () => {
            cruz.classList.remove("cruz-rotate-on", "cruz-rotate-off");
        }, { once: true });
    });

    cruz.addEventListener("click", function(){
        desplegable.classList.remove("desplegable-on")
        cruz.classList.add("cruz-rotate-off");
    })
</script>