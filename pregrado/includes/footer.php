<footer class="bg-blue-ucv">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-8 pt-1">
                    <p class="text-center ">© <span id="año"></span> UNIVERSIDAD CÉSAR VALLEJO | TODOS LOS DERECHOS
                        RESERVADOS.<br>
                        <a href="https://trilce.ucv.edu.pe/politicas/PoliticaPrivacidad.html" target="_blank">POLÍTICAS
                            DE PRIVACIDAD</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
  var counted = 0;
$(window).scroll(function() {

  var oTop = $('#counter').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 2000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            //alert('finished');
          }

        });
    });
    counted = 1;
  }

});
    </script>
    <script>


        $('#idCurrentYear').append(year);
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

        //Insertar Año
        var d = new Date();
        var year = d.getFullYear();
        document.getElementById('año').textContent = year;


    </script>