<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

    <title>Centro de informática y sistemas</title>
</head>
<style>
    /* fuentes */
    @font-face {
        font-family: 'Decima Bold';
        src: url(fonts/decima-bold.otf);
    }

    @font-face {
        font-family: 'Decima Regular';
        src: url(fonts/decima-regular.otf);
    }

    @font-face {
        font-family: 'Decima Heavy';
        src: url(fonts/decima-heavy.otf);
    }

    @font-face {
        font-family: 'Decima Light';
        src: url(fonts/decima-light.otf);
    }

    body {
        font-family: 'Decima Regular';
    }

    body {
        scroll-behavior: smooth;
    }

    .nav-ucv {
        position: absolute;
        z-index: 999;
        width: 100%;
        top: 20px;
    }

    .navbar-light .navbar-toggler {

        border-color: white;
    }

    .navbar-light .navbar-toggler-icon {

        filter: brightness(0) invert(1);
    }

    .navbar-light .navbar-nav .nav-link {
        font-size: 14px;
    }


    .nav-link {
        color: white !important;
        font-weight: bold;
        margin: 0 10px;
    }

    .nav-link.nav:hover {
        border-bottom: 1px solid white;
    }

    #navbarNavDropdown {
        justify-content: center;
    }



    .nav-item.active-cta {
        background: white;
        border-radius: 100px;
        font-family: 'Decima Heavy';
        border: 1px solid #04BEFB;
        transition: all ease .3s;
        margin-left: 30px;
    }

    .nav-item.active-cta:hover {
        background: #04BEFB;

        border: 1px solid white;
        transition: all ease .3s;
    }

    .nav-item.active-cta a {
        color: #04BEFB !important;
        transition: all ease .3s;
    }

    .nav-item.active-cta a:hover {
        color: white !important;
        transition: all ease .3s;
    }

    .nav-contacto {
        background-color: #04BEFB;
    }

    .text-primary {
        color: #04BEFB;
    }

    .bg-primary {
        background-color: #04BEFB !important;
    }

    .l-container {
        padding: 80px 0;
    }

    .title-section {
        margin-bottom: 30px;
    }

    .margin-row {
        margin-top: 70px;
    }



    footer {
        background: #081738;
        padding: 35px 0;
    }

    .mapa-footer a {
        color: white;

    }

    .mapa-footer ul {
        list-style: none;
    }

    .mapa-footer ul li {
        font-size: 14px;
    }

    .demopadding {
        float: right;
        margin-top: 30px;
    }

    .icon {
        position: relative;
        text-align: center;
        width: 0px;
        height: 0px;
        padding: 20px;
        border-top-right-radius: 20px;
        border-top-left-radius: 20px;
        border-bottom-right-radius: 20px;
        border-bottom-left-radius: 20px;
        -moz-border-radius: 20px 20px 20px 20px;
        -webkit-border-radius: 20px 20px 20px 20px;
        -khtml-border-radius: 20px 20px 20px 20px;
        color: #FFFFFF;
    }

    .icon i {
        font-size: 20px;
        position: absolute;
        left: 9px;
        top: 10px;
    }

    .icon.social {
        float: left;
        margin: 0 10px 0 0;
        cursor: pointer;
        background: white;
        color: #081738;
        transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
    }

    .icon.social:hover {
        background: #081738;
        color: white;
        transition: 0.5s;
        -moz-transition: 0.5s;
        -webkit-transition: 0.5s;
        -o-transition: 0.5s;
        -webkit-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, .8));
        -moz-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, .8));
        -ms-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, .8));
        -o-filter: drop-shadow(0 1px 10px rgba(0, 0, 0, .8));
        filter: drop-shadow(0 1px 10px rgba(0, 0, 0, .8));
    }

    .icon.social.fb i {
        left: 13px;
        top: 10px;
    }

    .icon.social.tw i {
        left: 11px;
    }

    .icon.social.in i {
        left: 11px;
    }

    .copyright {
        float: right;
    }

    .content-program h3 {
        font-family: 'Decima Heavy';
    }

    .copyright span {
        text-align: right;
        display: block;
        margin-top: 20px;
        font-size: 14px;
    }

    .text-reseña {
        padding: 9px 15px;
        color: white;
        border: 1px solid white;
        border-radius: 12px;
        display: inline-block;
        font-size: 16px;
    }


    /* Button Whatsapp */
    .mypage-alo-ph-circle,
    .mypage-alo-ph-circle-fill {
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        z-index: 999;
    }

    .mypage-alo-phone {
        bottom: 180px
    }

    .animated.infinite {
        -webkit-animation-iteration-count: infinite;
        animation-iteration-count: infinite
    }

    .mypage-alo-ph-circle {
        width: 90px;
        height: 90px;
        top: 12px;
        left: 12px;
        position: absolute;
        background-color: transparent;
        border-radius: 100%;
        border: 2px solid rgba(30, 30, 30, .4);
        opacity: .1;
        opacity: .5
    }

    .zoomIn {
        -webkit-animation-name: zoomIn;
        animation-name: zoomIn
    }

    .animated {
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both
    }

    .mypage-alo-ph-circle-fill {
        width: 60px;
        height: 60px;
        top: 28px;
        left: 28px;
        position: absolute;
        -ms-transition: all .2s ease-in-out;
        border-radius: 100%;
        border: 2px solid transparent;
        -webkit-transition: all .5s;
        -moz-transition: all .5s;
        -o-transition: all .5s;
        transition: all .5s;
        opacity: .4 !important
    }

    .mypage-alo-ph-circle,
    .mypage-alo-phone:hover .mypage-alo-ph-circle {
        border-color: #43b91e
    }

    .mypage-alo-ph-img-circle {
        z-index: 999;
        width: 30px;
        height: 30px;
        top: 43px;
        left: 44px;
        position: absolute;
        -webkit-border-radius: 100%;
        -moz-border-radius: 100%;
        opacity: 1;
        -webkit-transition: all .2s ease-in-out;
        -moz-transition: all .2s ease-in-out;
        -ms-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
        -webkit-transform-origin: 50% 50%;
        -moz-transform-origin: 50% 50%;
        -ms-transform-origin: 50% 50%;
        -o-transform-origin: 50% 50%;
        transform-origin: 50% 50%;
        background-size: 100%
    }

    .cquery,
    .cquery .bg {
        width: 100%;
        top: 0;
        left: 0
    }

    .mypage-alo-ph-circle-fill,
    .mypage-alo-ph-img-circle,
    .mypage-alo-phone:hover .mypage-alo-ph-circle-fill,
    .mypage-alo-phone:hover .mypage-alo-ph-img-circle {
        background-color: #43b91e
    }

    .tada {
        -webkit-animation-name: tada;
        animation-name: tada
    }

    @keyframes pulse {
        from {
            transform: scale(1.1);
        }

        50% {
            transform: scale(0.95);
        }

        to {
            transform: scale(1.1);
        }
    }

    .fe-pulse-w-pause {
        animation-name: pulse;
        animation-duration: 1.5s;
        animation-iteration-count: infinite;
    }

    .fe-pulse-w-pause:hover,
    .fe-pulse-w-pause:focus {
        animation-name: unset;
    }

    @-webkit-keyframes tada {

        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
        }
    }

    @keyframes tada {

        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        10%,
        20% {
            -webkit-transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(.9, .9, .9) rotate3d(0, 0, 1, -3deg)
        }

        30%,
        50%,
        70%,
        90% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
        }

        40%,
        60%,
        80% {
            -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
            transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
        }
    }

    @keyframes pulse {

        from,
        to {
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1)
        }

        50% {
            -webkit-transform: scale3d(1.05, 1.05, 1.05);
            transform: scale3d(1.05, 1.05, 1.05)
        }
    }

    @-webkit-keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        50% {
            opacity: 1
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            -webkit-transform: scale3d(.3, .3, .3);
            transform: scale3d(.3, .3, .3)
        }

        50% {
            opacity: 1
        }
    }

    .mypage-alo-phone {
        position: fixed;
        bottom: 110px;
        left: 0
    }

    .btn-whatsapp {
        z-index: 999;
        position: fixed;
        right: 130px;
        bottom: 130px;
    }

    #modal-whatsapp-desk .modal-header, #modal-whatsapp-mobile .modal-header {
        background-color: #25D366;
        border-radius: 22px 22px 0px 0px;
    }

    #modal-whatsapp-desk .modal-content, #modal-whatsapp-mobile .modal-content {
        border-radius: 22px 22px 22px 22px;
    }

    .link-whatsapp {
        background: #E5E5E5;
        padding: 5px;
        text-align: center;
        border-radius: 7px;
        margin: 5px 0;
        display: block;
        color: black;

    }

    .link-whatsapp:hover {
        background: #aca9a9;
        text-decoration: none;
        color: black;

    }

    .title-modal {
        text-align: center;
        font-family: 'Decima Heavy';
        color: #25D366;
    }

    .title-ciudad {
        font-family: 'Decima Heavy';
        color: #04BEFB;
    }

    .icon-contacto {
        vertical-align: initial;
    }

    .box {
        width: 80%;
        margin: 0 auto;
    }

    .btn-whatsapp.mobile {
        display: none;
    }
    /* Media querys */

    @media (max-width: 1120px) {
        .title-banner {
            font-size: 50px;
            line-height: 55px;
        }
    }

    @media (max-width: 992px) {
        .no-bp-row{
            margin-bottom: 0;
        }
        .nav-item.active-cta {

            margin-left: 0px;
            animation: none;
        }

        .logo-cv {
            display: none;
        }

        #navbarNavDropdown {
            margin-top: 15px;
        }
    }

    @media (max-width: 768px) {
        .margin-row {
            margin-top: 45px;
        }

        .title-banner {
            font-size: 40px;
            line-height: 45px;
        }

        .img-program {
            text-align: center;
        }

        .content-program h3 {
            text-align: center;
        }

        .img-footer {
            text-align: center;
        }

        .mapa-footer ul {
            text-align: center;
            margin-top: 30px;
            padding-left: 0;
        }

        .demopadding {
            float: nonE;
            height: 50px;
            text-align: center;
            display: block;
            margin: 0 auto;
            display: flex;
            justify-content: center;
        }

        .copyright span {
            text-align: center;
            display: block;
            margin-top: 20px;
            font-size: 14px;
        }
    }

    @media (max-width: 600px) {
        .btn-whatsapp.mobile {
            display: block;
        }

        .btn-whatsapp.desk {
            display: none;
        }
        .box {
            text-align: center;
        }

        .title-banner {
            font-size: 30px;
            line-height: 35px;
        }

        .title-banner {
            font-size: 40px;
            line-height: 45px;
        }

        .l-container {
            padding: 60px 0;
        }

        header .container {
            padding-right: 0;
            padding-left: 0;

        }

        .text-primary {
            font-size: 30px;

        }
    }

    #modal-form .form-group .form-control,
    #modal-gracias .form-group .form-control {
        padding-left: 2.375rem;
        border-radius: 7px;
    }

    #modal-form .form-group textarea.form-control,
    #modal-gracias .form-group textarea.form-control {
        padding: .375rem .75rem;
        background-color: #F0F0F0;
    }

    .form-group .form-control-icon {
        position: absolute;
        z-index: 2;
        display: block;
        width: 2.375rem;
        height: 2.375rem;
        line-height: 2.375rem;
        text-align: center;
        pointer-events: none;
        color: #aaa;
    }

    .btn.nav-item.active-cta {
        background: #081738;
        border-radius: 100px;
        font-family: 'Decima Heavy';
        transition: all ease .3s;
        border: 1px solid transparent;
        margin-left: 30px;
        padding: 8px 35px;
        margin: 0 auto;
        text-align: center;
        display: block;
        color: white;
        margin-bottom: 5px;
    }

    #modal-form .modal-content,
    #modal-gracias .modal-content {
        background-color: #04BEFB;
        border-radius: 22px;
    }

    #modal-form .modal-header,
    #modal-gracias .modal-header {
        border-bottom: 1px solid #04BEFB;
    }

    .title-form-modal {
        font-family: 'Decima Heavy';
        color: white;
    }

    #modal-form .close,
    #modal-gracias .close {
        opacity: 1;
        color: white;
    }

    .politica-check {
        font-family: 'Decima Bold';
        color: white;
    }
</style>

<body>
    <div class="modal fade" id="modal-whatsapp-desk" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h3 class="title-modal">Elige tu campus</h3>
                    <div class="row">
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51968758429&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>
                                    Ate</spam>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51951430985&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Olivos</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp">
                                <span
                                    href="https://web.whatsapp.com/send?phone=51951430985&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">Callao</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51956568345&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Moyobamba</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51947864766&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Chepén</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51982490733&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Piura</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51961970953&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Chiclayo</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51958853351&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>San
                                    Juan de Lurigancho</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51959074276&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Chimbote</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51952844571&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Tarapoto</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51955673596&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Huaraz</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://web.whatsapp.com/send?phone=51989986681&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Trujillo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="modal-whatsapp-mobile" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h3 class="title-modal">Elige tu campus</h3>
                    <div class="row">
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51968758429&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>
                                    Ate</spam>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51951430985&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Olivos</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp">
                                <span
                                    href="https://api.whatsapp.com/send?phone=51951430985&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">Callao</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51956568345&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Moyobamba</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51947864766&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Chepén</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51982490733&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Piura</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51961970953&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Chiclayo</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51958853351&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>San
                                    Juan de Lurigancho</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51959074276&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Chimbote</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51952844571&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Tarapoto</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51955673596&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Huaraz</span>
                            </a>
                        </div>
                        <div class="col-6">
                            <a class="link-whatsapp"
                                href="https://api.whatsapp.com/send?phone=51989986681&amp;text=Hola,%20necesito%20más%20información%20del%20PROGRAMA%20DE%20ACREDITACIÓN%20EN%20COMPUTACIÓN%20">
                                <span>Trujillo</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                    <?php include 'form.php' ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal gracias fade" id="modal-gracias" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row" id="box-gracias">
                            <div class="col-md-12">
                                <div class="box" style="padding: 100px 0;">
                                    <h4 class="text-center title-form-modal">GRACIAS <br> POR ENVIARNOS TUS DATOS</h4>
                                    <span class="text-center d-block text-white">En breve nos estaremos comunicando contigo</span>
                                    <button type="button" class="btn nav-item active-cta" data-dismiss="modal" aria-label="Close" style="margin-top: 2.5rem;">
                                        <span aria-hidden="true">OK</span>
                                    </button>
                                </div>

                                <div class="horario">
                                    <h5 class="text-center title-form-modal">HORARIO DE ATENCIÓN:</h5>
                                    <span class="text-center d-block text-white mb-4">Lunes a Viernes 8:00 - 13:00 y 14:00 - 18:00 <br> Sábado 8:00 - 13:00</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="btn-whatsapp desk">
        <a href="" data-toggle="modal" data-target="#modal-whatsapp-desk">
            <div class="animated infinite zoomIn mypage-alo-ph-circle">
            </div>
            <div class="animated infinite pulse mypage-alo-ph-circle-fill">
            </div>
            <div class="animated infinite tada mypage-alo-ph-img-circle">
                <img class="icon-whatsapp" src="https://image.flaticon.com/icons/svg/134/134937.svg">
            </div>
        </a>

    </div>

    <div class="btn-whatsapp mobile">
        <a href="" data-toggle="modal" data-target="#modal-whatsapp-mobile">
            <div class="animated infinite zoomIn mypage-alo-ph-circle">
            </div>
            <div class="animated infinite pulse mypage-alo-ph-circle-fill">
            </div>
            <div class="animated infinite tada mypage-alo-ph-img-circle">
                <img class="icon-whatsapp" src="https://image.flaticon.com/icons/svg/134/134937.svg">
            </div>
        </a>

    </div>
    <header>

        <nav class="navbar nav-header nav-contacto navbar-expand-lg navbar-light">
            <div class="container">
                <div class="header-logo">
                    <a href="index.html">
                        <img src="logo-CIS.svg" alt="" class="img-fluid">
                    </a> </div>
                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link nav scrollTo" href="index.html#programa-computacion">PROGRAMA DE COMPUTACIÓN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav scrollTo" href="index.html#cursos-programa">CURSOS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav scrollTo" href="index.html#certificaciones">CERTFICACIONES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav" href="index.php">CONTACTOS</a>
                        </li>
                        <li class="nav-item active-cta fe-pulse-w-pause ">

                            <a class="nav-link scrollTo" data-toggle="modal" data-target="#modal-form"
                                href="#">ESCRÍBENOS</a>
                        </li>

                    </ul>
                </div>
                <div class="logo-cv">
                    <img src="icon-ucv.svg" alt="" class="img-fluid">
                </div>
            </div>
        </nav>

    </header>
    <!--Carousel Wrapper-->
    <main>
        <section id="contacto" class="l-container">
            <div class="container">
                <div class="title-section text-center">
                    <h1 class="text-primary">CONTACTOS</h1>

                </div>
                <div class="row margin-row">
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Ate</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>968 785 429</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis_ate@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Chimbote</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>959 074 276</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cischimbote@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Piura</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>982 490 733</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cispiura@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Callao</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>951 430 985 - 998 056 578</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis.callao@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Huaraz</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>955 673 596</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cishuaraz@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">SJL</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>958 853 351</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis_limaeste@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Chepén</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>947 864 766</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis.chepen@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Los Olivos</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>951 430 985 - 998 056 578</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis_lima@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Tarapoto</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>952 844 571</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis_tarapoto@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Chiclayo</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>961 970 953</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis.chiclayo@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Moyobamba</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>956 568 345</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis.moyobamba@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6 mb-5">
                        <div class="box">
                            <h4 class="title-ciudad">Trujillo</h4>
                            <div class="informacion-number">
                                <img src="icon-whatsapp.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>989 986 681 - 999 147 591</a> </span>

                            </div>
                            <div class="informacion-email">
                                <img src="icon-email.png" class="icon-contacto" alt=""><span
                                    class="number pl-2"><a>cis@ucv.edu.pe</a> </span>

                            </div>

                        </div>

                    </div>



                </div>
                <div class="row mt-5">
                    <div class="col-md-12">
                        <div class="text-center">
                            <h4 class="title-ciudad text-center">HORARIO DE ATENCIÓN:</h4>
                            <span class="d-block">Lunes a Viernes 8:00 - 13:00 y 14:00 - 18:00</span>
                            <span class="d-block">Sábado 8:00 - 13:00</span>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </main>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="img-footer">
                        <img src="logo-footer.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="mapa-footer">
                        <ul class="text-white">
                            <li><b>Ir a</b></li>
                            <li><a href="index.html#programa-computacion" class="scrollTo">PROGRAMA DE COMPUTACION</a>
                            </li>
                            <li><a href="index.html#cursos-programa" class="scrollTo">CURSOS</a></li>
                            <li><a href="index.html#certificaciones" class="scrollTo">CERTFICACIONES</a></li>
                            <li><a href="" class="">CONTACTOS</a></li>

                        </ul>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class='demopadding'>
                        <div class='icon social fb'><i class='fa fa-facebook'></i></div>
                        <div class='icon social tw'><i class='fa fa-twitter'></i></div>
                        <div class='icon social in'><i class='fa fa-instagram'></i></div>
                        <div class='icon social in'><i class='fa fa-youtube'></i></div>

                    </div>
                    <div class="copyright">
                        <span class="text-white">© 2020 UNIVERSIDAD CÉSAR VALLEJO | TODOS LOS DERECHOS RESERVADOS
                        </span>
                    </div>
                </div>


            </div>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="app.js"></script>
</body>

</html>