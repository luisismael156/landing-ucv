<!DOCTYPE html>
<html lang="en">

<head>
    

    <?php 
    include 'includes/head.php';
    ?>

    <title>UCV .::. Administración</title>

    <style>
        #banner {
            background-image: url(assets/img/banner-administracion.png?v=4);
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
                background-image: url(assets/img/banner-administracion-mobile.png?v=4);
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

<body class="empresariales">
    
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
                                <h1 class="text-white font-roboto title-ba-one one-line pb-2">Administración</h1>
                                <h5 class="title-ba text-white">y asesora mypes para transformarlas en empresas innovadoras.
                                </h5>
                            </div>


                        </div>
                        <div class="col-lg-5 no-p wow animate__animated animate__fadeIn">
                            <img src="assets/img/barra-form-mobile-empresariales.svg?v=2" class="img-fluid barra-form" alt="">
                            <div id="form-banner">
                                    <?php 
                                    include 'includes/form.php';
                                    ?>
                                  
                                    <input type="hidden" name="landing" value="Landing-carreras" />
                                    <input type="hidden" name="source" value="<?php echo $source;?>" />
                                    <input type="hidden" name="carrera" value="Administración" />
                                    <input type="hidden" name="url" value="<?php echo $url;?>" />
                                    <input type="hidden" name="redirect" value="ok" />
                                   
                                    
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
                    <h5 class="descripcion-carrera wow animate__animated animate__fadeInUp">Prepárate para brindar soluciones innovadoras y efectivas, gestionando tu empresa dentro de un entorno competitivo. Aprende a liderar grupos de trabajo multidisciplinarios y resuelve los problemas con una visión más estratégica que permita desenvolverte en el mundo.
</h5>
                </div>

            </div>
        </div>
    </section>
    
    <section id="razones" class="l-container">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 b-bottom">
                    <div class="box-title wow animate__animated animate__fadeInUp">
                    <h1 class="title-block d-flex   mb-3 ">Razones para<br> estudiar <br>Administración
                        en la UCV
                           </h1>
                           <img src="assets/img/icon-book-empresariales.svg" class="img-fluid mb-3" alt="">
                    </div>
                
                </div>
                <div class="col-md-5 b-bottom">
                            <div class="block-left">
                                <div class="block-list wow animate__animated animate__fadeInUp">
                                    <ul>
                                        <li>Si tienes una idea en mente, podrás postular a la incubadora de negocios CORELAB, donde harás crecer tu emprendimiento.</li>
                                        <li>Los simuladores LABSAG: Simulación en línea a través de la toma de decisiones sobre temas de finanzas, marketing, logística y otros rubros.</li>
                                        <li>Taller de desarrollo de competencias laborales: Aprenderás la realidad del mercado laboral y hasta cómo elaborar un CV que impacte.</li>
                                        <li>Aprende a gestionar el proceso de marketing para satisfacer al cliente de manera rentable, demostrando creatividad e innovación.</li>
                                        <li>Gestiona los recursos económicos y financieros con el propósito de asignarlos a las unidades organizacionales, con transparencia y orientación a resultados.</li>
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
                             
                            <img src="assets/img/icon-mundo-empresariales.svg" class="img-fluid mb-3" alt="">

                     </div>
                </div>
                <div class="col-md-5">
                            <div class="block-left">
                                <div class="block-list wow animate__animated animate__fadeInUp">
                                    <ul>
                                        <li>Argentina: Universidad de Buenos Aires - Facultad de Ciencias Económicas</li>
                                        <li>España: Universidad Santiago de Campostela</li>
                                        <li>Brasil: Universidade Estadual de Campinas</li>
                                        <li>Colombia: Universidad Nacional de Colombia</li>
                                        <li>España: Universidad Politécnica de Madrid</li>
                                        <li>Argentina: Universidad Nacional de La Plata</li>
                                        <li>Brasil: Universidade Federal de Minas Gerais</li>
                                        <li>Chile: Universidad de Concepción</li>
                                        <li>España: Universidad de Sevilla</li>
                                        <li>España: Universidad de Granada</li>
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