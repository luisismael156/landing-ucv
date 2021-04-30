<?php
include "conexion.php";
$db =  connect();
$query=$db->query("select * from ubdepartamento");
$countries = array();
while($r=$query->fetch_object()){ $countries[]=$r; }

?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" lang="es" content="Somos UCV, carreras universitarias, donde estudiar,  que estudiar, pregrado, universidad, UCV, Universidad César Vallejo" />

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        
        <script type="text/javascript" src="js/jquery.min.js"></script>

        <!-- Favicon -->
		<link rel="icon" href="../../img/favicon.png" type="image/png">
        
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

        <title>SOMOS UCV - EDU EXPERIENCE</title>
        <style>
            @font-face {
                font-family: 'Roboto';
                src:url(fonts/RobotoSlab-Regular.ttf);
            }
            @font-face {
                font-family: 'Source';
                src:url(fonts/SourceSansPro-Regular.ttf);
            }
            @font-face {
                font-family: 'SourceB';
                src:url(fonts/SourceSansPro-Bold.ttf);
            }
            @font-face {
                font-family: 'Prelo';
                src:url(fonts/PreloSlab-Book.otf);
            }
            @font-face {
                font-family: 'PreloM';
                src:url(fonts/PreloSlab-Medium.otf);
            }
            .container-fluid{
                padding: 0;
            }
            .container{
                max-width: 888px;
            }
            body{
                font-family: 'Source';
                color: #000;
            }
            .arriba{
                border:1px solid #FFFFFF;
                box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            }
            .form-control{
                border-radius: 0.9rem;
                margin-top:10px;
            }
            .glbrojo{
                float: right;
                text-align: center;
                background-image:url(img/globo-rojo.png);
                background-size: cover;
                background-repeat: no-repeat;
                min-height: 40px;
                width: 320px;
                line-height: 30px;
                font-size: 14px;
                color: #FF373B;
            }
            .enviar{
                background: black;
                color: #fff;
                border-radius: 16px;
                min-width: 120px;
                font-weight: bold;
            }
            .titulo{
                font-size: 44px;
                font-family: 'Source';
                max-width: 636px;
                line-height: 20px;
                font-weight: bold;
                color:#FF373B;
            }
            .subtitulo{
                color: #006dff;
                font-size: 44px;
                font-family: 'Prelo';
                max-width: 636px;
                line-height: 44px;
            }
            .rect{
                background: #F1F1F3;
                height: 88px;

            }
            .sec5{
                background: #828282;
                text-align: center;
                padding-top: 30px;
                padding-bottom: 20px;
                color: white;
                font-size: 14px;
            }
            a{
                color: white !important;
            }
            a:hover{
                text-decoration: none;
            }
            .nombre{
                font-family: 'SourceB';
                color:#006dff;
                font-size: 32px;
            }
            .nombre2{
                font-family: 'Prelo';
                color:#006dff;
                font-size: 28px;
            }
            .margen{
                margin: 70px 0 70px 0;
            }
            .sec4{
                background: #F1F1F3;
            }
            .program{
                font-family: 'PreloM';
                font-size: 40px;
                line-height: 40px;
                margin-top: 100px;
                margin-bottom: 0px;
                color: #006dff;
            }
            .hdtbl{
                font-family: 'Prelo';
                font-size: 24px;
                color: #006dff;
                border-bottom: 3px solid #006dff;
            }
            .tbl{
                font-family: 'Roboto';
                font-size: 16px;
                color: #000;
                border-bottom: 1px solid #000;
                margin-top:15px;
                padding-bottom: 5px;
            }
            .mrgn{
                     margin-top: 60px;
                 }
            .input-group{
                font-size: 12px;
                line-height: 12px;
            }
            .form-control{
                font-size: 14px;
                line-height: 12px;
            }
             @media only screen and (max-width: 768px){
                .rect{
                    height: 150px;
                 }
                 .titulo{
                     font-size: 30px;
                     text-align: center;
                     line-height: 0px;
                 }
                 .subtitulo{
                     font-size: 30px;
                     text-align: left;
                     line-height: 30px;
                 }
                 .sec5{
                     background: #828282;
                     text-align: center;
                     padding-top: 30px;
                     padding-bottom: 20px;
                     color: white;
                     font-size: 12px;
                 }
                 .hdtbl{
                     font-size: 16px;
                     padding-left: 10px;
                 }
                 .tbl{
                     font-size: 14px;
                     padding-left: 10px;
                 }
                 .spc{
                     margin-top: 50px;
                 }
                 .mrgn{
                     margin-top: 20px;
                 }
            }
        </style>
    </head>
    <body>
        <!-- NAV -->
        <div class="d-none d-md-block">
            <div class="container-fluid arriba d-flex align-items-center" style="height: 120px;">
                <div class="container d-flex justify-content-between align-items-center">
                    <div><img src="img/ucv.svg" class="img-fluid"></div>
                    <div><img src="img/frase.svg" class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="d-md-none">
            <div class="container-fluid arriba d-flex align-items-center" style="height: 120px;">
                <div class="container d-flex justify-content-between align-items-center">
                    <div><img src="img/iso.svg" class="img-fluid"></div>
                    <div><img src="img/frase.svg" class="img-fluid"></div>
                </div>
            </div>
        </div>
        
        <!-- Parte inicial -->
        <div class="container-fluid">
            <div class="container">
                <div class="row" style="margin-top:50px;">
                    <div class="col-sm-12 col-md-6 mrgn">
                        <img src="img/encuentro.svg">
                        <img src="img/figuramaestros.svg" class="img-fluid mrgn">
                    </div>
                    <div class="col-sm-12 col-md-6 spc" style="background-color:#006dff;padding:15px;border-radius:16px;color:white;">
                       
                        <form action="enviar_.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nombre de la I.E." name="colegio" required>
                            </div>
                            <div class="input-group">
                                <select id="idDepa" class="form-control" name="idDepa" required>
                                    <option value="">Seleccione Departamento</option>
                                    <?php foreach($countries as $c):?>
                                    <option value="<?php echo $c->name; ?>"><?php echo $c->name; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="input-group">
                                <select id="idProv" class="form-control" name="idProv" required>
                                    <option value="">Seleccione Provincia</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <select id="ciudad_id" class="form-control" name="ciudad_id" required>
                                    <option value="">Seleccione Distrito</option>
                                </select>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Nombres" name="nombres" required>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Apellidos" name="apellidos" required>
                            </div>
                            <div class="input-group">
                               <select class="form-control" id="cargo" name="cargo" required>
                                   <option value="">Cargo</option>
                                   <option value="Director">Director</option>
                                   <option value="Subdirector">Subdirector</option>
                                   <option value="Profesor">Profesor</option>
                                   <option value="Tutor">Tutor</option>
                                   <option value="Otro">Otro</option>
                               </select>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="DNI" name="dni" maxlength="8" minlength="8" pattern=".{0}|.{8,}" required>
                            </div>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Teléfono" name="telefono" required maxlength="15" minlength="6" pattern=".{0}|.{8,}">
                            </div>
                            <div class="input-group">
                                <input type="email" class="form-control" placeholder="Correo electrónico" name="correo" required>
                            </div>
                            <div class="input-group">
                               <select class="form-control" id="sede" name="sede" required>
                                   <option value="">Seleccione Sede</option>
                                   <option value="Ate">Ate</option>
                                   <option value="Callao">Callao</option>
                                   <option value="Chepén">Chepén</option>
                                   <option value="Chiclayo">Chiclayo</option>
                                   <option value="Chimbote">Chimbote</option>
                                   <option value="Huaraz">Huaraz</option>
                                   <option value="Lima Este">Lima Este</option>
                                   <option value="Lima Norte">Lima Norte</option>
                                   <option value="Moyobamba">Moyobamba</option>
                                   <option value="Piura">Piura</option>
                                   <option value="Tarapoto">Tarapoto</option>
                                   <option value="Trujillo">Trujillo</option>
                               </select>
                            </div>
                            <div class="input-group">
                                <p style="font-size: 12px;"><br>Una vez completa la información marque la casilla de autorización y haga clic en enviar.</p>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check" required>
                                <label class="form-check-label" for="check">Autorizo el uso de mis datos personales para ﬁnes convenientes de la Universidad César Vallejo.</label>
                            </div>
                            <input type="hidden" name="evento" value="Encuentro-Maestros" />
                            <div class="input-group d-flex justify-content-center" style="text-align:center;margin-top:20px;">
                                <button type="submit" class="btn-cerrar-inv btn enviar" data-dismiss="modal" style="margin-bottom:-30px;"><b>ENVIAR</b></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 100px;">
            <div class="container">
                <p class="subtitulo"><b>Herramientas para</b> la Educación Virtual Pos-COVID-19</p><br>
                <p style="font-weight:bold; font-size:50px;line-height:1px;margin-top:-20px;">...</p>
            </div>
            <div class="container" style="margin-top: 50px;">
                <p class="parrafo">El Encuentro de Maestros es un espacio que reunirá a todos aquellos educadores que quieran conocer y analizar las tendencias y herramientas que el escenario actual exige. Esta iniciativa va acompañada del reconocimiento que la Universidad César Vallejo quiere brindarles a todos aquellos maestros que, a pesar de las circunstancias, hacen todo lo que esté a su alcance para formar a las personas del mañana.</p>
            </div>
        </div>
        
        <!-- FRANJA GRIS -->
        <div class="container-fluid d-none d-md-block" style="margin-top:70px;">
            <div class="container">
                <div class="rect d-flex justify-content-around align-items-center">
                    <div class="row d-flex align-items-center">
                        <div class="row" style="padding-left: 10px;">&nbsp;<span style="color:#006dff;font-size:40px;font-weight:bold;">10 JUL</span><span style="font-size:30px;margin-top:6px;"> &nbsp;|&nbsp; </span><span style="font-size:28px;margin-top:9px;"><b>5:00 P. M.</b></span></div>
                    </div>
                    <div class="row d-flex align-items-center">
                        <div style="padding-left: 10px;">Transmisión vía:&nbsp;</div>
                        <div><img src="img/zoom.svg" class="img-fluid" width="150"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid d-md-none" style="background: #F1F1F3;padding-top: 10px;margin-top:70px;">
            <div class="container">
                <div class="rect">
                    <div class="row d-flex justify-content-center">
                        <div class="row">&nbsp;<span style="color:#006dff;font-size:40px;font-weight:bold;">10 JUL</span><span style="font-size:30px;margin-top:6px;"> &nbsp;|&nbsp; </span><span style="font-size:28px;margin-top:9px;"><b>5:00 P. M.</b></span></div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center"  style="margin-top:20px;">
                        <div>Transmisión vía:&nbsp;</div>
                        <div><img src="img/zoom.svg" class="img-fluid" width="150"></div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <!-- EXPOSITORES -->
        <div class="container-fluid d-none d-md-block" style="margin-top: 100px;">
            <div class="container text-left d-none d-md-block">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8" style="border-bottom: 3px solid #000;"><p class="titulo"><span style="color: #002855;font-family:'Prelo';color:#006dff;"><b>PONENTES</b></span></p></div>
                </div>
            </div>
            <div class="container" style="margin-top:100px;">
                <div class="row margen d-flex align-items-center">
                    <div class="col-4"><img src="img/expos/guillermo.png" class="img-fluid"></div>
                    <div class="col-8">
                        <p class="nombre">GUILLERMO WHPEI&nbsp; <img src="img/expos/argentina.png" style="margin-top: -5px;"></p>
                        <p style="margin-top: -20px;">Presidente de la Fundación para la Democracia Internacional<br><b>Tema: Análisis global del impacto del COVID-19 en la educación </b></p>
                        <p>Empresario social argentino, pionero en su país en la lucha contra la esclavitud contemporánea y la promoción de la cultura de paz. Desde el 2014 es el Presidente de la Fundación para la Democracia. El 2019 fue nombrado Doctor Honoris Causa de la Universidad César Vallejo, por su defensa de los derechos humanos hacia la construcción de un mundo equitativo en inclusión social, paz y democracia. </p>
                    </div>
                </div>
                <div class="row margen d-flex align-items-center">
                    <div class="col-4"><img src="img/expos/adriana.png" class="img-fluid"></div>
                    <div class="col-8">
                        <p class="nombre">ADRIANA CABALLERO&nbsp; <img src="img/expos/mexico.png" style="margin-top: -5px;"></p>
                        <p style="margin-top: -20px;">CEO & Cofounder en Yeira E-learning<br><b>Tema: E-learning luego del covid-19: Más que tecnología, estrategia</b></p>
                        <p>Directora General y cofundadora de Yeira E-learning, la primera plataforma de e-learning mexicana. Cuenta con 10 años de experiencia en el campo del diseño de experiencias de usuario y de interfaces aplicado a la educación en línea (e-learning). Dirigió la Vicepresidencia de Educación en la Asociación de Internet MX por 3 años en donde creó e impulsó iniciativas para fomentar la educación en línea en México.</p>
                    </div>
                </div>
                <div class="row margen d-flex align-items-center">
                    <div class="col-4"><img src="img/expos/rodrigo.png" class="img-fluid"></div>
                    <div class="col-8">
                        <p class="nombre">RODRIGO FAUNES&nbsp; <img src="img/expos/chile.png" style="margin-top: -5px;"></p>
                        <p style="margin-top: -20px;">Presidente de la Asociación de Colegios Virtuales & Online de Chile<br><b>Caso práctico: Colegio 100% online, Senda Nueva de Chile</b></p>
                        <p>Especialista en educación digital y elaboración de proyectos de formación educativa e-learning a distintos niveles. Desde el 2010 es CEO y Director de desarrollo instruccional y productos multimediales para e-learning en el colegio 100% online Senda Nueva. Actual Presidente de la Asociación de Colegios Virtuales y Online de Chile. </p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="container-fluid d-md-none" style="margin-top: 100px;">
            <div class="container text-left d-none d-md-block">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-8" style="border-bottom: 3px solid #000;"><p class="titulo"><span style="color: #002855;font-family:'Prelo';color:#006dff;"><b>PONENTES</b></span></p></div>
                </div>
            </div>
            <div class="container" style="margin-top:100px;">
                <div class="row margen d-flex align-items-center">
                    <div class="col-4"><img src="img/expos/guillermo.png" class="img-fluid"></div>
                    <div class="col-8">
                        <p class="nombre">GUILLERMO WHPEI&nbsp; <img src="img/expos/argentina.png" style="margin-top: -5px;"></p>
                        <p style="margin-top: -20px;">Presidente de la Fundación para la Democracia Internacional<br><b>Tema: Análisis global del impacto del COVID-19 en la educación </b></p>
                    </div>
                    <div class="col-12"><p style="text-align:justify;">Empresario social argentino, pionero en su país en la lucha contra la esclavitud contemporánea y la promoción de la cultura de paz. Desde el 2014 es el Presidente de la Fundación para la Democracia. El 2019 fue nombrado Doctor Honoris Causa de la Universidad César Vallejo, por su defensa de los derechos humanos hacia la construcción de un mundo equitativo en inclusión social, paz y democracia. </p></div>
                </div>
                <div class="row margen d-flex align-items-center">
                    <div class="col-4"><img src="img/expos/adriana.png" class="img-fluid"></div>
                    <div class="col-8">
                        <p class="nombre">ADRIANA CABALLERO&nbsp; <img src="img/expos/mexico.png" style="margin-top: -5px;"></p>
                        <p style="margin-top: -20px;">CEO & Cofounder en Yeira E-learning<br><b>Tema: E-learning luego del covid-19: Más que tecnología, estrategia</b></p>
                    </div>
                    <div class="col-12"><p style="text-align:justify;">Directora General y cofundadora de Yeira E-learning, la primera plataforma de e-learning mexicana. Cuenta con 10 años de experiencia en el campo del diseño de experiencias de usuario y de interfaces aplicado a la educación en línea (e-learning). Dirigió la Vicepresidencia de Educación en la Asociación de Internet MX por 3 años en donde creó e impulsó iniciativas para fomentar la educación en línea en México.</p></div>
                </div>
                <div class="row margen d-flex align-items-center">
                    <div class="col-4"><img src="img/expos/rodrigo.png" class="img-fluid"></div>
                    <div class="col-8">
                        <p class="nombre">RODRIGO FAUNES&nbsp; <img src="img/expos/chile.png" style="margin-top: -5px;"></p>
                        <p style="margin-top: -20px;">Presidente de la Asociación de Colegios Virtuales & Online de Chile<br><b>Caso práctico: Colegio 100% online, Senda Nueva de Chile</b></p>
                    </div>
                    <div class="col-12"><p style="text-align:justify;">Especialista en educación digital y elaboración de proyectos de formación educativa e-learning a distintos niveles. Desde el 2010 es CEO y Director de desarrollo instruccional y productos multimediales para e-learning en el colegio 100% online Senda Nueva. Actual Presidente de la Asociación de Colegios Virtuales y Online de Chile. </p></div>
                </div>
            </div>
        </div>
        
        
        <!-- PROGRAMA -->
        <div class="container-fluid">
            <div class="container">
                <p class="program">PROGRAMA DEL EVENTO</p>
            </div>
        </div>
        <div class="container-fluid sec4" style="padding-bottom: 90px;">
            <div class="container d-none d-md-block">
                <div class="text-right">
                    <div class="row d-flex align-items-center" style="padding-top: 50px;">
                        <div class="col-10 text-right">
                            <p class="nombre2">JUAN PAREDES CASTRO</p>
                            <p style="margin-top: -20px;font-size:14px;">Presentador</p>
                        </div>
                        <div class="col-2"><img src="img/expos/juan.png" class="img-fluid"></div>
                    </div>
                </div>
            </div>
            <div class="container d-md-none">
                <div class="text-right">
                    <div class="row d-flex align-items-center" style="padding-top: 50px;">
                        <div class="col-9 text-right">
                            <p class="nombre2">JUAN PAREDES CASTRO</p>
                            <p style="margin-top: -20px;font-size:14px;">Presentador</p>
                        </div>
                        <div class="col-3"><img src="img/expos/juan.png" class="img-fluid"></div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row hdtbl">
                    <div class="col-2" style="padding: 0 !important;">HORA</div>
                    <div class="col-10">DESGLOSE</div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">5:00 p.m.</div>
                    <div class="col-10">El presentador da la bienvenida a los panelistas e invitados.</div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">5:05 p.m.</div>
                    <div class="col-10">Palabras de bienvenida a cargo del <b>Dr. Humberto Llempén Coronel,</b> Rector de la Universidad César Vallejo.</div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">5:10 p.m.</div>
                    <div class="col-10">Intervención de <b>Guillermo Whpei.</b></div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">5:25 p.m.</div>
                    <div class="col-10">Intervención de <b>Adriana Caballero.</b></div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">5:40 p.m.</div>
                    <div class="col-10">Caso práctico con <b>Rodrigo Faunes.</b></div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">5:50 p.m.</div>
                    <div class="col-10"><b>Ronda de preguntas para el caso práctico.</b></div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">6:05 p.m.</div>
                    <div class="col-10">Palabras de cierre a cargo del Fundador, el <b>Dr. César Acuña Peralta.</b></div>
                </div>
                <div class="row tbl">
                    <div class="col-2" style="padding: 0 !important;">6:15 p.m.</div>
                    <div class="col-10">Despedida</div>
                </div>
            </div>
        </div>
        
        
        <!-- FOOTER -->
        <div class="container-fluid sec5 d-none d-md-block footer-dsk" style="padding-top:20px;padding-bottom:20px;">
            <div class="container">
                <div class="row">
                    <div class="col-1"></div>
                    <div class="col-10 text-center">
                        <img src="img/ucv-w.svg"><br><br>
                        <p class="legal">© 2020 UNIVERSIDAD CÉSAR VALLEJO | TODOS LOS DERECHOS RESERVADOS.<br> <a href="https://trilce.ucv.edu.pe/politicas/PoliticaPrivacidad.html" target="_blank">POLÍTICAS DE PRIVACIDAD</a></p>
                    </div>

                    <div class="col-1"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid sec5 d-md-none">
            <div class="container">
                <img src="img/ucv-w.svg" class="img-fluid">
                <p class="legal">© 2020 UNIVERSIDAD CÉSAR VALLEJO<br>TODOS LOS DERECHOS RESERVADOS.<br> <a href="https://trilce.ucv.edu.pe/politicas/PoliticaPrivacidad.html" target="_blank">POLÍTICAS DE PRIVACIDAD</a></p>
            </div>
        </div>
        

        <!-- Optional JavaScript -->
        <script type="text/javascript">
	$(document).ready(function(){
		$("#idDepa").change(function(){
			$.get("departamento2.php","idDepa="+$("#idDepa").text(), function(data){
				$("#idProv").html(data);
				console.log(data);
			});
		});

		$("#idProv").change(function(){
			$.get("distritos2.php","idProv="+$("#idProv").text(), function(data){
				$("#ciudad_id").html(data);
				console.log(data);
			});
		});
	});
</script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->



    </body>
</html>