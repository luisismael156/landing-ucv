<!DOCTYPE html>
<html lang="en">

<head>
    

    <?php 
    include 'includes/head.php';
    ?>

    <title>UCV .::. Traducción e Interpretación</title>

    <style>
        #banner {
            background-image: url(assets/img/banner-traduccion.png);
            background-size: cover;
            background-position: center;
            background-position-y: inherit;
            height: calc(100vh - 110px);
            position: relative;
        }

        @media (max-width: 575px) {
            #banner {
                background-image: none;
            }

            .bg-banner {
                background-image: url(assets/img/banner-traduccion-mobile.png);
                background-size: cover;
                height: 546px;
                flex-direction: column;
                /* height: 100%; */
                justify-content: space-between;
                display: flex;
                position: relative;
                padding: 0;
            }
        }
    </style>




</head>

<body class="humanidades">
<?php 
    include 'includes/header.php';
    ?>
    <section id="banner">
    <div class="barra-left"></div>
        <div class="barra-bottom"></div>


        <div class="barra-right  one"></div>
        <div class="barra-right  two"></div>
        <div class="barra-right  three"></div>

        <div class="container">
            <div class="row h-container">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-7 bg-banner">
                        <div class="barra-right one"></div>
                    <div class="barra-right two"></div>
                    <div class="barra-right three"></div>
                    <div class="barra-bottom"></div>
                            <div class="box-title-banner wow animate__animated animate__fadeIn">
                                <h1 class="text-white font-roboto title-ba-one pb-2">Traducción e <br>
                                Interpretación <br></h1>
                                <h5 class="title-ba text-white">y conecta culturas mediante la comunicación. 
                                </h5>
                            </div>


                        </div>
                        <div class="col-lg-5 no-p wow animate__animated animate__fadeIn">
                            <img src="assets/img/barra-form-mobile-humanidades.svg" class="img-fluid barra-form" alt="">
                            <div id="form-banner">
                                    <?php
                                    $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                                    $parts = parse_url($url);
                                    parse_str($parts['query'], $query);
                                    $sede = $query['sede'];
                                    $fbclid = $query['fbclid'];
                                    $gclid = $query['gclid'];
                                    $source = $query['source'];
                                    if(empty($source)){
                                        if(empty($fbclid)){
                                            if(empty($gclid)){
                                                $source = "organico";
                                            }else{
                                                $source = "google";
                                            }
                                        }else{
                                            $source = "facebook";
                                        }
                                    }else{
                                        $source=$source;
                                    }
                                    ?>

                                <form id="formu" class="d-block" action="enviar.php" method="post">
                                    <h5 class="text-blue-ucv title-form">Déjanos tus datos y descarga nuestro plan de estudios</h5>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control campo" placeholder="DNI" name="dni" required pattern="[0-9]+"
                                            oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"
                                            maxlength="8" minlength="8">
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control campo" placeholder="Nombres" name="nombres" required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control campo" placeholder="Apellidos" name="apellidos" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control campo" placeholder="Correo electrónico" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control campo" placeholder="Número de celular" name="celular" required pattern=".{0}|.{9,}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="9" minlength="9">
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control campo" id="campus" name="sede" required>
                                            <option value="" selected disabled hidden>Campus</option>
                                            <option value="Los Olivos">Los Olivos</option>
                                            <option value="Piura">Piura</option>
                                            <option value="Trujillo">Trujillo</option>
                                        </select>
                                    </div>
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="condicion" required>
                                        <label class="form-check-label" for="condicion">He leído y acepto las <a
                                                href="https://trilce.ucv.edu.pe/politicas/PoliticaPrivacidad.html"
                                                target="_blank">políticas de
                                                privacidad.</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-form mt-2">Enviar</button>

                                  
                                    <input type="hidden" name="landing" value="Landing-carreras" />
                                    <input type="hidden" name="source" value="<?php echo $source;?>" />
                                    <input type="hidden" name="carrera" value="Traduccion e Interpretacion" />
                                    <input type="hidden" name="url" value="<?php echo $url;?>" />
                                   
                                    
                                </form>




                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </section>
    <section id="descripcion-carrera" class="l-container">
        <div class="container">
        <div class="row justify-content-center">
                <div class="col-md-10">
                    <h5 class="descripcion-carrera wow animate__animated animate__fadeInUp">Conoce las diferentes culturas y costumbres de un mundo globalizado, que siempre está en la búsqueda de profesionales que manejen los idiomas de forma fluida y flexible para darle un mejor valor a la comunicación de las sociedades.</h5>
                </div>

            </div>
        </div>
    </section>
    
    <section id="razones" class="l-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 b-bottom">
                    <div class="box-title wow animate__animated animate__fadeInUp">
                    <h1 class="title-block d-flex   mb-3 ">Razones para<br> estudiar Traducción <br>
                         e Interpretación en la UCV
                           </h1>
                           <img src="assets/img/icon-book-humanidades.svg" class="img-fluid mb-3" alt="">
                    </div>
                
                </div>
                <div class="col-md-5 b-bottom">
                            <div class="block-left">
                                <div class="block-list wow animate__animated animate__fadeInUp">
                                    <ul>
                                        <li>Laboratorio especializado en traducción de inglés, francés y portugués.</li>
                                        <li>Talleres de reforzamiento de inglés y francés.</li>
                                        <li>Interpreta discursos de distintos campos temáticos de una lengua a otra para facilitar la comunicación entre distintas culturas.</li>
                                    </ul>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>


    </section>
    <section id="convenios-internacionales" class="l-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                     <div class="box-title wow animate__animated animate__fadeInUp">
                         <div class="mb-3">
                         <h1 class="title-block d-flex">Convenios<br> Internacionales
                            </h1>
                            <h6>Vive una experiencia académica internacional.
                            </h6>
                         </div>
                             
                            <img src="assets/img/icon-mundo-humanidades.svg" class="img-fluid mb-3" alt="">

                     </div>
                </div>
                <div class="col-md-5">
                            <div class="block-left">
                                <div class="block-list wow animate__animated animate__fadeInUp">
                                    <ul>
                                        <li>Brasil: Universidade Estadual de Campinas</li>
                                        <li>Italia: Università Degli Studi Di Siena </li>
                                        <li>España: Universidad de Granada</li>
                                        <li>México: Universidad Anahuác-Cancún</li>
                                        <li>Argentina: Universidad Nacional de La Plata</li>
                                        <li>México: Universidad de Sonora</li>

                                        <li>México: Universidad Nacional de Chiapas</li>
                                        <li>Colombia: Universidad Católica de Oriente</li>
                                        <li>Chile: Universidad Metropolitana de Ciencias de la Educación</li>
                                        <li>Argentina: Universidad Nacional de Litoral</li>
                                        <li><b>Y más convenios para conocer tu carrera en otras culturas.</b></li>

                                    </ul>
                        </div>
                    </div>

                </div>
            </div>
            
        </div>


    </section>
  <section id="acreditaciones" class="l-container">
        <div class="container">
         <div class="row justify-content-center" id="counter">
                    <div class="col-md-11">
                    <div class="row justify-content-between row-responsive">
                        <div class="col-md-3 col-8 mb-md-0 mb-4">
                        
                                <span class="count percent" data-count="14">
                                0
                                </span>
                            
                                <p>Nuevas acreditaciones a nuestros programas académicos.</p>
                                <h5 class="fuente">Sineace </h5>
                        </div>
                        <div class="col-md-3 col-8 mb-md-0 mb-4">
                            <div>
                            <img src="assets/img/icon-flecha-arriba.svg" class="img-fluid flecha-arriba"alt="">
                            <span class="count percent" data-count="4">
                                 
                                0
                                
                                </span>
                            </div>
                       
                                <p>Subimos cuatro posiciones en el ranking de las mejores universidades del Perú 2020.</p>
                                <h5 class="fuente">Revista América Economía </h5>

                        </div>
                        <div class="col-md-3 col-8 mb-md-0 mb-4">
                        <span class="count percent" data-count="70">
                                0
                                </span>
                                <p>Docentes investigadores registrados.</p>
                                <h5 class="fuente">Renacyt </h5>
                        </div>
                        <div class="col-md-3 col-8 mb-md-0 mb-4 ">
                        <span class="count percent" data-count="5">
                                0
                                </span>
                                <span class="count">.°</span>
                                
                                <p>Lugar en Sostenibilidad Ambiental en Universidades Peruanas</p>
                                <h5 class="fuente">Red Ambiental Interuniversitaria </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>  
                                     <?php 
                                    include 'includes/footer.php';
                                    ?>
   
</body>

</html>