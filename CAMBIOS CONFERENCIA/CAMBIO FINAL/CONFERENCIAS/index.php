<?php
include "conn.php";
$db =  connect();
$query=$db->query("select * from ubdepartamento");
$countries = array();
while($r=$query->fetch_object()){ $countries[]=$r; }

?>
<!doctype html>
<html lang="en">

<head>
   
   <!-- Open Graph meta tags -->
    <meta property="og:type" content="university"/>
    <meta property="og:url" content="www.somosucv.edu.pe"/>
    <meta property="og:title" content="SOMOS UCV"/>
    <meta property="og:description" content="Universidad Cesar Vallejo - ¡Preinscríbete Aquí!"/>
    <meta property="og:image" content="http://www.somosucv.edu.pe/img/og/og-examenadmision.jpg"/>
    <meta property="og:image:alt" content="http://www.somosucv.edu.pe/img/og/og-examenadmision.jpg"/>
    <meta property="og:image:width" content="500"/>
    <meta property="og:image:height" content="260"/>
    <meta property="fb:app_id" content="215067222662577"/>
    <meta name="robots" content="index,follow"/>
    <meta property="article:section" content="Educación"/>
    <meta property="article:tag" content="Universidad Cesar Vallejo"/>
    <meta property="article:tag" content="UCV"/>

    <!-- Schema.org for Google -->
    <meta name="googlebot" content="index, follow"/>
    <meta itemprop="name" content="Somos UCV | Universidad César Vallejo">
    <meta itemprop="description" content="Estudia en la Universidad César Vallejo carreras universitarias que el mercado laboral requiere. ¡Preinscríbete Aquí!">
    <meta itemprop="image" content="http://www.somosucv.edu.pe/img/og/og-examenadmision.jpg">

    <!-- Search Engine -->
    <meta name="description" content="Admisión UCV - Universidad Cesar Vallejo - ¡Preinscríbete Aquí!">
    <meta name="image" content="http://www.somosucv.edu.pe/img/og/og-examenadmision.jpg">

    <!-- Favicon -->
    <link rel="icon" href="../img/favicon.png" type="image/png">
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>UNIVERSIDAD CÉSAR VALLEJO - SOMOS UCV</title>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PGQ6BCP');</script>
    <!-- End Google Tag Manager -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;700;900&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,600;0,700;0,800;1,500&display=swap');

        body {
            font-family: 'Roboto Slab', serif;
        }
        a, a:visited, a:hover, a:active {
            color: inherit;
            text-decoration: underline;
        }

        .logo-educacion {
            float: right;
        }

        .l-container {
            padding: 80px 0;
        }

        .bg-blue-ucv {
            background: #233559;
        }

        .bg-gris-ucv {
            background: #EFEDE8;
        }

        .bg-red-ucv {
            background: #E20613;
        }

        .desc-banner h4 {
            line-height: 28px;
            font-size: 22px;
        }

        .title-banner h1 {
            font-family: sans-serif;
            font-weight: 700;
            color: #E00613;
            display: inline-block;
            padding: 1px 20px;
            background: white;
            font-size: 36px;

        }

        .title-banner {
            margin-top: 3rem;
        }

        .desc-banner {
            margin-top: 3rem;

        }

        .fecha-banner h1 {
            color: #E00613;
            margin-top: 4rem;
            font-size: 51px;
            font-weight: bold;
        }

        .banner-1 {
            width: 80%;
            float: right;
        }

        .title-form {
            color: #29AAE1;
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
        }

        .form-control::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: white;
            /* Firefox */
        }

        .small-text {
            font-size: 11px;
            color: white;
            margin-top: 10px;
        }

        .form-control:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: white;
        }

        .form-control::-ms-input-placeholder {
            /* Microsoft Edge */
            color: white;
        }

        select option {
            color: black;
        }

        .form-group {
            margin-bottom: .8rem;
        }

        .form-control:focus {
            background-color: transparent;
            color: white;
        }

        .form-control {

            color: white;
            background-color: transparent;
            border: 1px solid #ced4da;
            border-radius: 16px;
        }

        input::placeholder {
            color: red;
            font-size: 16px;
            font-family: 'Montserrat', sans-serif;
        }

        .btn-ucv {
            font-family: 'Montserrat', sans-serif;
            background: #E20613;
            border-radius: 15px;
            padding: 10px 40px;
            font-weight: 700;
            font-size: 16px;
            color: white;
            margin-top: 1.5rem;
        }

        .float-r {
            float: right;
        }

        .invitado {
            border-radius: 73%;

            padding: 4px;


        }

        .title-section {

            font-size: 45px;
            line-height: 45px;
        }

        .title-section.confe {
            line-height: 52px;
        }

        .text-red-ucv {
            color: #E20613;
        }

        .text-celeste-ucv {
            color: #29AAE1;
        }

        .text-azul-ucv {
            color: #233559;
        }

        .invitado.one {
            border: 1px solid #E20613;
        }

        .invitado.two {
            border: 1px solid #29AAE1;
        }

        .nombre-invitado {
            font-weight: bold;
            text-align: center;
            margin-top: 2rem;
            color: #E20613;
        }

        .desc-invitado {
            color: #29AAE1;
            font-size: 20px;
            margin-top: 2.5rem;
        }

        .desc-confe {
            color: white;
            font-size: 20px;
            margin-top: 1.5rem;
        }

        .bg-celeste-ucv {
            background: #29AAE1;
        }

        .title-box {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 22px;
            color: #233559;
        }

        .item-box {
            border: 2px solid white;
            padding: 30px 30px;
            border-radius: 10px;
            min-height: 445px;
        }

        .btn-ucv.btn-blue {
            background: #233559;
        }

        .btn-ucv.btn-celeste {
            background: #29AAE1;
        }



        .list-pasos {
            list-style: none;
            padding-left: 0;
            margin-top: 3rem;
        }

        .border-b {
            border-bottom: 2px solid #29AAE1;
            margin-bottom: 10px;
            min-height: 50px;
        }

        .title-fecha {
            font-weight: bold;
            font-size: 35px;
            color: #E20613;
            margin-top: 20px;
        }

        .list-pasos li {
            color: white;
            font-family: 'Montserrat', sans-serif;
            font-size: 20px;
            font-weight: 700;

            margin-top: 15px;

        }

        .carrera-text {
            font-family: 'Montserrat', sans-serif;
            font-weight: 800;
            font-size: 16px;
            color: #233559;

        }

        .carrera-fecha {
            text-align: right;
            font-family: 'Montserrat', sans-serif;
            font-size: 16px;
            font-weight: 500;
            padding-right: 1.5rem;

        }

        .not-padding-l {
            padding-left: 0;
            display: flex;
            align-items: center;
        }

        .flex-end {
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

        .fecha-invitado {
            display: flex;
            justify-content: space-between;
            flex-direction: column;
            height: 100%;
        }

        .barrita {
            border-bottom: 3px solid red;
            width: 80px;
            margin-bottom: 8px;
        }

        .text-invi {
            display: block;
            color: #E20613;
            font-size: 16px;
            font-weight: bold;
        }

        .margin-row {
            margin-bottom: 6rem;
        }

        footer {
            padding: 40px 0;
        }
        .result{
            position: absolute;
            background-color: white;
            width: 100%;
            z-index: 999;
            overflow: auto;
        }
        .search-box{
            position: relative;
        }
        
        .result p{
            padding-left: 2px;
            margin-bottom: 0;
            padding-bottom: 2px;
            padding-left: 15px;
        }
        
        .result p:hover{
            background-color: #1c93f8;
            border: 2px solid black;
        }
        .search-box input.form-control:focus + .result {
            overflow: auto;
            height: 201px;
        }

        @media (min-width: 1200px) {

            .container,
            .container-lg,
            .container-md,
            .container-sm,
            .container-xl {
                max-width: 960px;
            }

            #banner .container {
                max-width: 1140px;
            }
        }

        @media (min-width: 992px) {}

        @media (min-width: 768px) {
            #conferencia .col-md-4 {

                padding-left: 5px;
                padding-right: 5px;

            }


        }

        @media (max-width: 1200px) {

            .title-form {
                margin-top: 30px !important;
            }
        }

        @media (max-width: 992px) {

            .banner-1 {
                width: initial;
                float: none;
            }
        }

        @media (max-width: 768px) {
.item-box {
    
    width: 320px;
    margin: 0 auto;
    margin-bottom: 20px;
}
            .desc-banner br {
                display: none;
            }

            .banner-1 {
                margin: 0 auto;
                display: block;
            }
        }
        @media (max-width: 600px) {

            .title-section{
                text-align: center;
            }
            .btn-ucv{
                float: none!important;
                margin: 30px auto;
                display: block;
            }
}
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            
            $("#idDepa").change(function(){
                $.get("departamento.php","idDepa="+$("#idDepa").val(), function(data){
                    $("#idProv").html(data);
                    console.log(data);
                });
            });
            
            $("#idProv").change(function(){
                $.get("distritos.php","idProv="+$("#idProv").val(), function(data){
                    $("#ciudad_id").html(data);
                    console.log(data);
                });
            });
    
            
            $('.search-box input[type="text"]').on("keyup input", function(){
                /* Get input value on change */
                var depart = $("#idDepa").val();
                var provin = $("#idProv").val();
                var distri = $("#ciudad_id").val();
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(".result");
                if(inputVal.length){
                    $.get("backend-search.php", {depa: depart, prov: provin, dist: distri, term: inputVal}).done(function(data){
                        // Display the returned data in browser
                        resultDropdown.html(data);
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            
            // Set search input value on click of result item
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
                $(this).parent(".result").empty();
            });
        });
</script>
</head>

<body>

    <header class="bg-header" id="head">
        <div class="container">
            <div class="row justify-content-between py-3 align-items-center">
                <div class="col-6">
                    <picture>
                        <img src="img/logo-header-ucv.svg" class="img-fluid" alt="">
                    </picture>
                </div>
                <div class="col-4">
                    <picture>
                        <img src="img/logo-educacion.svg" class="img-fluid logo-educacion" alt="">
                    </picture>
                </div>
            </div>
        </div>
    </header>
    <section id="banner" class="l-container bg-red-ucv">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="box-img-banner">
                        <img src="img/banner-blue.png" alt="" class="img-fluid banner-1">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="title-banner">
                        <h1>CONFERENCIAS</h1>
                        <h1>VOCACIONALES</h1>
                        <h1>UCV</h1>

                    </div>
                    <div class="desc-banner">
                        <h4 class="text-white">Regístrate, participa<br> y nosotros te<br> ayudaremos a elejir tu<br>
                            carrera ideal.</h4>

                    </div>
                    <div class="fecha-banner">
                        <h1>Del 3-7 AGO</h1>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8 col-md-8">
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
                    <form class="mt-3" id="form-register" action="enviar_.php" method="POST" onsubmit="return checkSubmit();">
                        <div class="form-group">
                            <input type="text" placeholder="Nombres y apellidos" class="form-control" name="nombres" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Ingresa tu numero de DNI" class="form-control" name="dni" pattern=".{0}|.{8,}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="8" minlength="8" required>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Ingresa tu numero de celular" class="form-control" name="celular" pattern=".{0}|.{8,}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" maxlength="9" minlength="6" required>
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Ingresa tu correo " class="form-control" name="correo" required>
                        </div>
                        <div class="form-group">
                            <select id="idDepa" class="form-control departamento" name="idDepa" required>
                            <option value="">Seleccione Departamento</option>
                            <?php foreach($countries as $c):?>
                            <option value="<?php echo $c->id; ?>"><?php echo $c->name; ?></option>
                            <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="idProv" class="form-control provincia" name="idProv" required>
                            <option value="">Seleccione Provincia</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="ciudad_id" class="form-control distrito" name="ciudad_id" required>
                            <option value="">Seleccione Distrito</option>
                            </select>
                        </div>
                        <div class="search-box form-group">
                            <input class="form-control" type="text" autocomplete="off" placeholder="Buscar colegio..." name="institucion" required>
                            <div class="result"></div>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="grado" required>
                                <option disabled="" selected="" value="">Actual año de estudio</option>
                                <option value="5to de secundaria">Estoy en 5to de secundaria</option>
                                <option value="3ro y 4to de secundaria">Estoy en 3ro o 4to de secundaria</option>
                                <option value="Ya terminé la secundaria">Ya terminé la secundaria</option>
                                <option value="Estoy estudiando en un instituto">Estoy estudiando en un instituto</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="carrera" required>
                                <option disabled="" selected="" value="">Elige una Carrera</option>
                                <option value="Arte y Diseño Gráfico Empresarial">Arte y Diseño Gráfico Empresarial</option>
                                <option value="Administración">Administración</option>
                                <option value="Administración en Hotelería y Turismo">Administración en Hotelería y Turismo</option>
                                <option value="Arquitectura">Arquitectura</option>
                                <option value="Ciencias de la Comunicación">Ciencias de la Comunicación</option>
                                <option value="Ciencias del Deporte">Ciencias del Deporte</option>
                                <option value="Contabilidad">Contabilidad</option>
                                <option value="Derecho">Derecho</option>
                                <option value="Economía">Economía</option>
                                <option value="Educación Inicial">Educación Inicial</option>
                                <option value="Educación Primaria">Educación Primaria</option>
                                <option value="Enfermería">Enfermería</option>
                                <option value="Estomatología">Estomatología</option>
                                <option value="Ingeniería Agroindustrial">Ingeniería Agroindustrial</option>
                                <option value="Ingeniería Ambiental">Ingeniería Ambiental</option>
                                <option value="Ingeniería Civil">Ingeniería Civil</option>
                                <option value="Ingeniería de Minas">Ingeniería de Minas</option>
                                <option value="Ingeniería de Sistemas">Ingeniería de Sistemas</option>
                                <option value="Ingeniería Eléctrica">Ingeniería Eléctrica</option>
                                <option value="Ingeniería Empresarial">Ingeniería Empresarial</option>
                                <option value="Ingeniería Industrial">Ingeniería Industrial</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Medicina">Medicina</option>
                                <option value="Negocios Internacionales">Negocios Internacionales</option>
                                <option value="Nutrición">Nutrición</option>
                                <option value="Psicología">Psicología</option>
                                <option value="Traducción e Interpretación">Traducción e Interpretación</option>
                            </select>
                        </div>
                        <input type="hidden" name="landing" value="Conferencias Vocacionales" />                                
                        <input type="hidden" name="source" value="<?php echo $source;?>" />
                        <input type="hidden" name="sede" value="<?php echo $sede;?>" />
                        <p class="small-text">Al enviar autorizo el uso de mis datos personales para ﬁnes convenientes de la Universidad César Vallejo.</p>
                        <button type="submit" class="btn btn-ucv btn-celeste float-r">Registrarme</button>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <section id="invitados" class="l-container">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h1 class="title-section text-red-ucv">Invitados especiales</h1>
                    <p class="desc-invitado">Los presentadores más divertidos de la televisión te acompañarán a
                        descubrir tu profesión. Ellos
                        serán tu voz ante las dudas de tu futura carrera.</p>
                </div>
                <div class="col-md-4">
                    <img src="img/invitado-bruno-pinasco.png" class="invitado d-block mx-auto one" alt="">
                    <h4 class="nombre-invitado">Bruno Pinasco </h4>
                </div>
                <div class="col-md-4">
                    <img src="img/invitado-Jesus-Alzamora.png" class="invitado d-block mx-auto two" alt="">
                    <h4 class="nombre-invitado">Jesús Alzamora </h4>
                </div>
            </div>
        </div>
    </section>
    <section id="conferencia" class="bg-celeste-ucv l-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="title-section text-azul-ucv confe">¿Qué son las <br>Conferencias Vocacionales? </h1>
                    <p class="desc-confe">Son webinars dirigidos a jóvenes interesados en su futuro profesional. Sabrás
                        todo sobre la carrera que prefieras y si aún no te decides, este es el momento.</p>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="item-box">
                        <div class="box">
                            <div class="box-img">
                                <img src="img/icon-1.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="title-box mt-3">Reencuentra tu vocación </h3>
                            <p class="desc-box text-white mt-3">Antes de elegir una carrera, debes conocer cuál es tu
                                vocación,
                                qué es lo que te apasiona y sobre todo cuáles son tus metas.</p>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="item-box">
                        <div class="box">
                            <div class="box-img">
                                <img src="img/icon-2.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="title-box mt-3">Explora <br> tu carrera </h3>
                            <p class="desc-box text-white mt-3">Una vez obtengas el resultado de tu test vocacional,
                                podrás elegir tu carrera, una que se adapte a tu personalidad y a tus objetivos
                                profesionales.</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item-box">
                        <div class="box">
                            <div class="box-img">
                                <img src="img/icon-3.svg" alt="">
                            </div>
                        </div>
                        <div class="box-content">
                            <h3 class="title-box mt-3">Descubre <br> tu profesión </h3>
                            <p class="desc-box text-white mt-3">Tenemos un cronograma donde le dedicamos una hora a cada una de las 27 profesiones que tiene para ti la UCV. Busca esa carrera que elegiste y entérate todo sobre ella.</p>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-ucv float-r btn-blue" onclick="location.href='#head';">Registrarme</button>
                </div>
            </div>
        </div>

    </section>
    <section id="decide" class="bg-red-ucv l-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title-section text-white confe">Decide qué<br> carrera estudiar</h1>
                    <ul class="list-pasos ">
                        <li class="mt-4"><img src="img/number-one.png" class="pr-2 " alt=""> Completa el test vocacional</li>
                        <li><img src="img/number-two.png" class="pr-2" alt=""> Te llegará un informe sobre tu perfil vocacional</li>
                        <li><img src="img/number-three.png" class="pr-2" alt=""> Conoce las carreras que funcionarían mejor con tu perfil
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-ucv btn-celeste" onclick="location.href='https://trilce.ucv.edu.pe/TestVocacional';">Empezar el Test</button>
                </div>
                <div class="col-md-6">
                    <img src="img/banner-new.png" class="img-fluid" alt="">

                </div>
            </div>
        </div>
    </section>
    <section id="carrera-ideal" class="bg-gris-ucv l-container">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <h1 class="title-section text-celeste-ucv confe mb-5">¿Cuál es tu carrera ideal? </h1>
                </div>
            </div>
            <div class="row margin-row">
                <div class="col-md-4">
                    <div class="fecha-invitado">
                        <h3 class="title-fecha">Lunes 3<br> de Agosto</h3>
                        <div class="text-invitado">
                            <div class="barrita"></div>
                            <span class="text-invi">Invitado:</span>
                            <span class="text-invi">Bruno Pinasco</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-1">
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Administración</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a 10:00 a. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Negocios<br> Internacionales</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a 10:00 a. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Turismo y Hotelería </span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a 10:00 a. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Marketing y Dirección de Empresas</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a 10:00 a. m.</span>
                        </div>
                    </div>
                    <div class="row border-b mb-0">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Contabilidad/<br> Economía</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a 10:00 a. m.</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row margin-row">
                <div class="col-md-4">
                    <div class="fecha-invitado">
                        <h3 class="title-fecha">Martes 4<br> de Agosto</h3>
                        <div class="text-invitado">
                            <div class="barrita"></div>
                            <span class="text-invi">Invitado:</span>
                            <span class="text-invi">Jesús Alzamora</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-1">
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ciencias del Deporte</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a. m. a 10:00 a. m..</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Traducción e<br> Interpretación</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">11:00 a. m. a 12:00 m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Educación inicial<br> y Primaria</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">3:00 p. m. a 4:00 p. m.</span>
                        </div>
                    </div>
                    <div class="row border-b mb-0">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Derecho</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">5:00 p. m. a 6:00 p. m.</span>
                        </div>
                    </div>


                </div>
            </div>


            <div class="row margin-row">
                <div class="col-md-4">
                    <div class="fecha-invitado">
                        <h3 class="title-fecha">Miércoles 5<br> de Agosto</h3>
                        <div class="text-invitado">
                            <div class="barrita"></div>
                            <span class="text-invi">Invitado:</span>
                            <span class="text-invi">Jesús Alzamora</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-1">
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. Industrial</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a. m. a 10:00 a. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. Mecánica<br> Eléctrica</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">11:00 a. m. a 12:00 m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. Agroindustrial </span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">3:00 p. m. a 4:00 p. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. de Minas</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">5:00 p. m. a 6:00 p. m.</span>
                        </div>
                    </div>
                    <div class="row border-b mb-0">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. Ambiental</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">7:00 p. m. a 8:00 p. m.</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row margin-row">
                <div class="col-md-4">
                    <div class="fecha-invitado">
                        <h3 class="title-fecha">Jueves 6<br> de Agosto</h3>
                        <div class="text-invitado">
                            <div class="barrita"></div>
                            <span class="text-invi">Invitado:</span>
                            <span class="text-invi">Bruno Pinasco</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-1">
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. Empresarial</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a. m. a 10:00 a. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. Civil<br> Eléctrica</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">11:00 a. m. a 12:00 m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ing. de Sistemas</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">3:00 p. m. a 4:00 p. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Arquitectura</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">5:00 p. m. a 6:00 p. m.</span>
                        </div>
                    </div>
                    <div class="row border-b mb-0">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Arte y Diseño Gráfico <br>Empresarial </span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">7:00 p. m. a 8:00 p. m.</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row margin-row">
                <div class="col-md-4">
                    <div class="fecha-invitado">
                        <h3 class="title-fecha">Viernes 7<br> de Agosto</h3>
                        <div class="text-invitado">
                            <div class="barrita"></div>
                            <span class="text-invi">Invitado:</span>
                            <span class="text-invi">Bruno Pinasco</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 offset-1">
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Psicología</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">9:00 a. m. a 10:00 a. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Medicina y <br>Estomatología</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">11:00 a. m. a 12:00 m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Enfermería y<br> Nutrición</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">3:00 p. m. a 4:00 p. m.</span>
                        </div>
                    </div>
                    <div class="row border-b">
                        <div class="col-6 not-padding-l">
                            <span class="carrera-text">Ciencias de la <br>Comunicación</span>
                        </div>
                        <div class="col-6 flex-end">
                            <span class="carrera-fecha d-block">5:00 p. m. a 6:00 p. m.</span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <footer class="bg-blue-ucv">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/logo-footer.png" class="mx-auto d-block" alt="">
                    <p class="text-center text-white mt-5">© 2020 UNIVERSIDAD CÉSAR VALLEJO | TODOS LOS DERECHOS
                        RESERVADOS. <br><a href="https://trilce.ucv.edu.pe/politicas/PoliticaPrivacidad.html" target="_blank">POLÍTICAS DE PRIVACIDAD</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
            var statSend = false;
            function checkSubmit() {
                if (!statSend) {
                    statSend = true;
                    return true;
                } else {
                    alert("El formulario ya se esta enviando...");
                    return false;
                }
            }
        </script>
</body>

</html>