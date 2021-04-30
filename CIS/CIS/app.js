(function() {
    'use strict';
    window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {

                if (form.checkValidity() === false) {
                    event.preventDefault();
                    event.stopPropagation();
                    form.classList.add('was-validated');
                    return false;
                }
                
                event.preventDefault();
                event.stopPropagation();

                $("#enviar").prop("disabled", true);
                // Datos del form, cuando pasa validacion
                const nombre = document.querySelector('#nombre').value,
                    apellidoPA = document.querySelector('#apellidoPA').value,
                    apellidoMA = document.querySelector('#apellidoMA').value,
                    celular = document.querySelector('#celular').value,
                    dni = document.querySelector('#dni').value,
                    email = document.querySelector('#email').value,
                    campus = document.querySelector('#campus').value,
                    curso = document.querySelector('#curso').value,
                    consulta = document.querySelector('#consulta').value;

                var infoLead = {
                    nombre,
                    apellidoPA,
                    apellidoMA,
                    celular,
                    dni,
                    email,
                    campus,
                    curso,
                    consulta
                };


                $.post("funciones/insertar.php", infoLead, function(data) {
                    var resp = JSON.parse(data);
                    if (resp) {
                        $("#enviar").prop("disabled", false);
                        $('#modal-form').modal('hide')
                        $('#modal-gracias').modal('show')
                        $("#form-modal").trigger("reset");
                    } else {
                        alert("Ocurrio un error vuelva a intentarlo");
                        $("#enviar").prop("disabled", false);
                    }
                });

            }, false);
        });
    }, false);
})();