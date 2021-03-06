<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="../img/favicon.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>UCV - Administración en Turismo y Hotelería</title>
    <style>
        @font-face {
            font-family: "Prelo Book";
            src: url(fonts/Prelo-Book.otf);
        }

        @font-face {
            font-family: "Prelo Exbd";
            src: url(fonts/Prelo-Exbd.otf);
        }

        @font-face {
            font-family: "PreloSlab Bold";
            src: url(fonts/PreloSlab-Bold.otf);
        }

        @font-face {
            font-family: "PreloSlab Book";
            src: url(fonts/PreloSlab-Book.otf);
        }

        @font-face {
            font-family: "PreloSlab Medium";
            src: url(fonts/PreloSlab-Medium.otf);
        }

        @font-face {
            font-family: 'MessinaSans Book';
            src: url('fonts/MessinaSans-Book.otf');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'MessinaSans Regular';
            src: url('fonts/MessinaSans-Regular.otf');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'MessinaSans Semibold';
            src: url('fonts/MessinaSans-SemiBold.otf');
            font-weight: bold;
            font-style: normal;
        }

        @font-face {
            font-family: 'MessinaSans Light';
            src: url('fonts/MessinaSerif-Light.otf');
            font-weight: normal;
            font-style: normal;
        }


        body {
            font-family: 'Roboto Slab', serif;

        }

        .font-roboto {
            font-family: 'Roboto Slab', serif;
            font-weight: 400;

        }

        .title-ba {
            font-weight: 500;
            font-size: 18px;
            font-family: 'MessinaSans Book';
        }

        .text-blue-ucv {
            color: #233559;
        }
        

        #banner {
            background-image: url(img/fondo-banner.png);

            background-size: cover;
            background-position: center;
            background-position-y: inherit;
            height: calc(100vh - 110px);
            position: relative;
        }
        #banner.banner-mobile{
            height:800px;
}
        .l-container {
            padding: 60px 0;
        }

        .text-one {
            font-family: "PreloSlab Medium";
            font-size: 50px;
            line-height: 50px;
        }

        .content-box {
            height: 110px;
            width: 85%;
        }

        .form-control {
            border-radius: 0;
            border: 1px solid #233559;
            height: calc(1.6em + .75rem + 2px)!important;
            color: #233559;
            background-color: #FCFAF2;
            font-family: 'MessinaSans Regular';
        }

        .form-control:focus {
            border-radius: 0;
            border: 1px solid #233559;
            height: calc(2em + .75rem + 2px);
            color: #233559;
            background-color: #FCFAF2;
        }

        .title-banner {
            font-family: "PreloSlab Bold";
            color: #e10e17;
            font-size: 70px;
            line-height: 65px;
        }

        .border-bt {
            border-bottom: 4px solid #e10e17;
        }

        .title-form {
            font-weight: 700;
            font-family: 'MessinaSans Semibold';
            border-left: 5px solid #233559;
            padding-left: 15px;
            margin-bottom: 0;
            font-size: 18px;
            line-height: 23px;
        }

        .form-group {
            margin-bottom: .5rem;
        }

        #form-banner {
            background: #FCFAF2;
            margin-top: 35px;
            opacity: 0.9;
        }

        .label-poli {
            font-size: 12px;
            vertical-align: text-top;
        }

        .btn-ucv {
            background: #e10e17;
            border-radius: 13.4609px;
            border: #e10e17;
        }

        .btn-ucv:hover {
            background: #e10e17;
            border-radius: 13.4609px;
            border: #e10e17;
        }

        .btn-ucv:active {
            background: #e10e17 !important;
            border-radius: 13.4609px;
            border: #e10e17 !important;
        }

        .text-red-ucv {
            color: #e10e17;
        }

        ::placeholder {
            /* Chrome, Firefox, Opera, Safari 10.1+ */
            color: #233559 !important;
            font-family: 'MessinaSans Regular';
        }

        :-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #233559 !important;
            font-family: 'MessinaSans Regular';
        }

        ::-ms-input-placeholder {
            /* Microsoft Edge */
            color: #233559 !important;
            font-family: 'MessinaSans Regular';
        }

        .btn-vocacional {
            font-family: 'MessinaSans Semibold';
            background-color: #03C0F2;
            border-radius: 0px;
            border: 2px solid black;
            padding: 14px 18px;
        }

        .btn-vocacional:active,
        .btn-vocacional:focus,
        .btn-vocacional:hover {
            background-color: #E30613;
        }

        .img-box {
            width: 20%;
        }

        .title-section {
            font-family: "PreloSlab Bold";
        }

        header {
            border-bottom: 2px solid #233559;
            background-color: #FCFAF2;
            height: 110px;
        }


        #beneficios {
            color: #243559;
        }

        .book {
            font-family: "PreloSlab Book";
        }

        #form-banner .mb-4 {
            margin-bottom: 1.2rem !important;
        }

        .campo {
            background-color: #FCFAF2;
        }

        .f-18 {
            font-size: 18px;
        }

        .title-ba-one {
            font-family: 'MessinaSans Light';
            font-size: 65px;
            line-height: 65px;
        }

        .box-title-banner {
            position: relative;
           
        }

        .box-title-banner::before {
            content: "Estudia";
            background-color: #E30613;
            color: white;
            position: absolute;
            top: 50%;
            transform: rotate(270deg);
            left: -80px;
            font-size: 18px;
            font-family: 'MessinaSans Semibold';
            padding: 2px 15px;
        }

        .logo {
            display: flex;
            align-items: baseline;
            justify-content: flex-end;
        }

        .form-check-label {
            margin-bottom: 0;
            font-size: 14px;
            font-family: 'MessinaSans Book';
            font-weight: 800;
            color: #243559;
        }





        footer {
            padding: 30px 0;
            color: #243559;
        }

        .text-blue-ucv {
            color: #243559;
        }

        .desc-box {
            font-weight: 400;
        }

        #formu {
         padding-bottom: 5px;
    padding-top: 25px;


        }

        .btn-form {
            font-family: 'MessinaSans Semibold';

            border-color: #233559 !important;
            background: transparent !important;
                padding: 0.5rem 2.5rem;
            color: #243559;
            border-radius: 0;
            border-width: 1px;
        }

        .btn-form:active,
        .btn-form:hover {
            border-color: #233559 !important;
            background: #233559 !important;
            color: white;
        }

        .img-mobile {
            display: none;
        }

        .img-mobile-t {
            display: none;
        }

        .container-flex {
            display: flex;
            justify-content: center;
        }

        .btn-box {
            float: right;
        }

        #banner .container {
            height: 100%;
        }

        .bg-banner {

            display: flex;
            align-items: flex-end;
        }

        .mallas {
            position: absolute;
            left: 30px;
            top: 0;

        }

        .barra-left {
            position: absolute;
            height: 100%;
            width: 20px;
            background-color: #233559;
            left: 0px;
            border-bottom: 20px solid #03C0F2;
            z-index: 99;
        }

        .barra-bottom {
            position: absolute;
            width: 97%;
            background-color: #E30613;
            height: 20px;
            bottom: 0px;
            z-index: 0;
        }

        .barra-right {
            position: absolute;
            height: 100%;

            background-color: #F6F4EC;

            border-bottom: 20px solid #03C0F2;
            z-index: 99;
        }

        .bg-banner>.barra-left,
        .bg-banner>.barra-bottom,
        .bg-banner>.barra-right {
            display: none;
        }

        .barra-right.one {
            right: 2.2%;
            width: 1%;
        }

        .barra-right.two {
            right: 1%;
            width: 0.5%;
        }

        .barra-right.three {
            right: 0;
            width: 0.5%;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: transparent;
            border-bottom: 5px solid #E30613 !important;
            border-radius: 0;
            color: #E30613 !important;
        }

        .nav-pills .nav-link {
            color: #9C9C9C;
            line-height: 20px;
            font-size: 17px;
            border-radius: 0;
            padding: .5rem 0;
        }

        a {
            color: #243559;
            text-decoration: underline;
        }

        .content-form {
            padding: 30px;
            padding-top: 0px;
        }

        .list-tabs {
            display: flex;
        }


        .list-tabs .nav-item {
            width: 50%;
            font-family: 'MessinaSans Semibold';
            text-align: center;
        }

        .nav-pills .nav-link:hover {
            color: #1D71B8;
            border-bottom: 5px solid #1D71B8;

        }

        /* a */
        .malla-mobile {
            display: none;
        }


    
        @media (min-width: 1200px) {
            #banner .container {
                max-width: 1000px;
            }
            .box-title-banner {
            position: relative;
         
        }

        }
        @media (min-width: 2000px) {
            .box-title-banner {
    position: relative;
    top: 115px;
}

        }

        @media (max-width: 1100px) {
            .box-title-banner {
                margin-left: 50px;
                left: 0;
            }
        }

        @media (max-width: 991px) {
            #form-banner {

                margin-bottom: 40px;
            }

            #banner {
                height: auto!important;
            }

            .mallas {
                display: none;
            }

            .title-ba-one {
                padding-top: 15%;
            }

            .title-ba {
                margin-bottom: 34px;
            }
        }

        @media (max-width: 767px) {
            .title-ba-one {
                font-size: 55px;
                line-height: 55px;
            }

            #formu {}

            .img-desk {
                display: none;
            }

            .img-mobile-t {
                display: block;
            }

            .img-mobile {
                display: block;


            }

            .logo-educa {
                padding-bottom: 20px;
                margin-bottom: 20px;
                border-bottom: 1px solid white;
            }

        }

        @media (max-width: 575px) {
            .title-ba {
                max-width: 320px;
            }

            .malla-mobile {
                display: block;
                position: absolute;
                left: 0;
            }

            .bg-banner .barra-right.one {

                right: 3.5%;
                width: 1.8%;

            }

            .bg-banner .barra-right.two {

                right: 1.6%;
                width: 1.1%;

            }

            .bg-banner .barra-right.three {

                width: 1%;

            }

            #form-banner {

                margin-bottom: 0px;
                opacity: 1;
            }

            #form-banner {
                margin-top: 0;
            }

            #formu {

                margin-top: 0px;
            }

            header {
                height: auto;
            }

            .box-title-banner {
                position: absolute;
                bottom: 11%;
            }

            .btn-vocacional {
                font-size: 14px;
            }

            .title-ba-one {
                font-size: 45px;
                line-height: 45px;
            }

            .bg-banner>.barra-left,
            .bg-banner>.barra-bottom,
            .bg-banner>.barra-right {
                width: 2%;
            }

            .bg-banner>.barra-left,
            .bg-banner>.barra-bottom,
            .bg-banner>.barra-right {
                display: block;
            }

            .bg-banner .barra-right {

                height: 100.4%;
                top: -2px;
            }

            .bg-banner .barra-bottom {
                width: 100%;
                left: 0%;
                background-color: #233559;
            }

            #banner>.barra-left,
            #banner>.barra-bottom,
            #banner>.barra-right {
                display: none;
            }

            .img-desk-t {
                display: none;
            }



            .bg-banner {
                background-image: url(img/banner-mobile.png);
                background-size: cover;
                height: 546px;
                flex-direction: column;
                /* height: 100%; */
                justify-content: space-between;
                display: flex;
                background-position-x: 19%;
                position: relative;

            }



            .btn-form {
                margin: 0 auto;
                display: block;
            }

            .l-container {
                padding: 30px 0;
            }

            .no-p {
                padding-left: 0;
                padding-right: 0;
            }

            #formu {
                padding-bottom: 0px;
            }

            #banner {
                border-bottom: 0px solid #e10e17;

            }

            .title-section {
                font-family: "PreloSlab Bold";
                font-size: 35px;
            }
        }

        @media (max-width: 400px) {
            .title-ba-one {
                font-size: 40px;
                line-height: 40px;
            }
        }

        @media (max-width: 350px) {
            .title-ba-one {
                font-size: 35px;
                line-height: 35px;
            }
        }
    </style>

</head>

<body>
    <header class="py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-7">

                    <img src="img/logo-licenciada.svg" alt="" class="img-fluid">

                </div>
                <div class="col-md-6 col-5">
                    <div class="btn-box">
                        <img src="img/logo-ucv.svg" alt="" class="img-fluid img-desk">
                        <img src="img/icon-ucv.svg" alt="" class="img-fluid img-mobile">
                    </div>


                </div>

            </div>

        </div>
    </header>
    <section id="banner">
        <img src="img/mallas.png" class="img-fluid mallas" alt="">

        <div class="barra-left"></div>
        <div class="barra-bottom"></div>


        <div class="barra-right one"></div>
        <div class="barra-right two"></div>
        <div class="barra-right three"></div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-7 bg-banner">
                    <img src="img/malla-mobile.svg" class="img-fluid malla-mobile" alt="">
                    <div class="barra-right one"></div>
                    <div class="barra-right two"></div>
                    <div class="barra-right three"></div>
                    <div class="barra-bottom"></div>
                    <div class="box-title-banner">
                        <h1 class="text-white font-roboto title-ba-one pb-2">Administración<br> en Turismo <br> y Hotelería</h1>
                        <h5 class="title-ba text-white">y desarrolla planes de turismo vivencial sostenibles</h5>
                    </div>


                </div>
                <div class="col-lg-5 no-p">
                    <div id="form-banner">
                        <ul class="nav nav-pills mb-2 list-tabs" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Quiero descargar<br> info
                                    de mi carrera</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Quiero hacer un<br>
                                    test vocacional
                                </a>
                            </li>

                        </ul>
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
                        <div class="tab-content content-form" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <form id="formu" class="d-block" action="enviar.php" method="post">
                                    <h5 class="text-blue-ucv title-form">Déjanos tus datos e inicia descarga</h5>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control campo" placeholder="DNI" name="dni"
                                            required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control campo" placeholder="Nombres" name="nombres" required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control campo" placeholder="Apellidos" name="apellidos" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control campo" placeholder="Ingresa tu correo" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control campo" placeholder="Número de celular" name="celular" required>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control campo" id="campus" name="campus" required>
                                            <option value="" selected disabled hidden>Selecciona tu campus</option>
                                            <option value="Ate">Ate</option>
                                            <option value="Callao">Callao</option>
                                            <option value="Chepén">Chepén</option>
                                            <option value="Chiclayo">Chiclayo</option>
                                            <option value="Chimbote">Chimbote</option>
                                            <option value="Huaraz">Huaraz</option>
                                            <option value="Los Olivos">Los Olivos</option>
                                            <option value="Moyobamba">Moyobamba</option>
                                            <option value="Piura">Piura</option>
                                            <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                                            <option value="Tarapoto">Tarapoto</option>
                                            <option value="Trujillo">Trujillo</option>
                                        </select>
                                    </div>


                                    <input type="hidden" name="landing" value="Administración Turismo y Hotelería - Descarga">
                                    <input type="hidden" name="source" value="<?php echo $source;?>" />
                                    <input type="hidden" name="url" value="<?php echo $url;?>" />
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="condicion" required>
                                        <label class="form-check-label" for="exampleCheck1">He leído y acepto las <a
                                                href="https://trilce.ucv.edu.pe/politicas/PoliticaPrivacidad.html"
                                                target="_blank">políticas de
                                                privacidad.</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-form mt-2">Iniciar
                                        Descarga</button>
                                </form>
                            </div>

                            <div class="tab-pane fade show" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <form id="formu" class="d-block" action="enviar.php" method="post">
                                    <h5 class="text-blue-ucv title-form">Déjanos tus datos e inicia el test</h5>
                                    <div class="form-group mt-4">
                                        <input type="text" class="form-control campo" placeholder="DNI" name="dni" required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control campo" placeholder="Nombres" name="nombres" required>
                                    </div>
                                    <div class="form-group ">
                                        <input type="text" class="form-control campo" placeholder="Apellidos" name="apellidos" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control campo" placeholder="Ingresa tu correo" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control campo" placeholder="Número de celular" name="celular" required>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control campo" id="campus" name="campus" required>
                                            <option value="" selected disabled hidden>Selecciona tu campus</option>
                                            <option value="Ate">Ate</option>
                                            <option value="Callao">Callao</option>
                                            <option value="Chepén">Chepén</option>
                                            <option value="Chiclayo">Chiclayo</option>
                                            <option value="Chimbote">Chimbote</option>
                                            <option value="Huaraz">Huaraz</option>
                                            <option value="Los Olivos">Los Olivos</option>
                                            <option value="Moyobamba">Moyobamba</option>
                                            <option value="Piura">Piura</option>
                                            <option value="San Juan de Lurigancho">San Juan de Lurigancho</option>
                                            <option value="Tarapoto">Tarapoto</option>
                                            <option value="Trujillo">Trujillo</option>
                                        </select>
                                    </div>


                                    <input type="hidden" name="landing" value="Administración Turismo y Hotelería - Test">
                                    <input type="hidden" name="source" value="<?php echo $source;?>" />
                                    <input type="hidden" name="url" value="<?php echo $url;?>" />
                                    <div class="form-group form-check">
                                        <input type="checkbox" class="form-check-input" id="condicion" required>
                                        <label class="form-check-label" for="exampleCheck1">He leído y acepto las <a
                                                href="https://trilce.ucv.edu.pe/politicas/PoliticaPrivacidad.html"
                                                target="_blank">políticas de
                                                privacidad.</a>
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-form mt-2">Iniciar Test</button>
                                </form>
                            </div>


                        </div>


                        </form>
                    </div>
                </div>

            </div>

        </div>
        </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script>

        var banner = document.getElementById('banner');
        window.addEventListener('resize', reportWindowSize);
        document.addEventListener("DOMContentLoaded", reportWindowSize);


        function reportWindowSize() {
            let alto = window.innerHeight;

            if (alto < 725) {
                banner.classList.add("banner-mobile")
            } else {
                banner.classList.remove("banner-mobile")
            }
        }
    </script>
</body>

</html>