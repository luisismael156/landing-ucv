<form id="form-modal" class="needs-validation" novalidate>
                            <div class="row mb-3">
                                <div class="col-lg-12">
                                    <h4 class="text-center title-form-modal">SOLICITA INFORMACIÓN</h4>
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group col-lg-6 no-bp-row">
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-user form-control-icon"></span>
                                            <input id="nombre" name="nombre" type="text" class="form-control" placeholder="Nombres" required>
                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-user form-control-icon"></span>
                                            <input id="apellidoPA" name="apellidoPA" type="text" class="form-control" placeholder="Apellido paterno" required>

                                        </div>

                                    </div>
                                    <div class="form-row">

                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-user form-control-icon"></span>
                                            <input type="text" id="apellidoMA" name="apellidoMA" class="form-control" placeholder="Apellido materno" required>

                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-phone form-control-icon"></span>
                                            <input type="text" id="celular" name="celular" class="form-control" placeholder="Celular" required pattern="^((9)[0-9]{8})|((9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|((9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|([1-9]{1}([0-9]{1}|[0-9]{2})(9)[0-9]{8})|([1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{8})|([1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|([1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|([1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{8})|([+][1-9]{1}([0-9]{1}|[0-9]{2})(9)[0-9]{8})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{8})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|([+][1-9]{1}([0-9]{1}|[0-9]{2})[-](9)[0-9]{8})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)(9)[0-9]{8})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)([ ]|[-])(9)[0-9]{8})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|\(([1-9]{1}([0-9]{1}|[0-9]{2})\)[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)(9)[0-9]{8})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)([ ]|[-])(9)[0-9]{8})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)[ ](9)[0-9]{2}[ ][0-9]{3}[ ][0-9]{3})|\([+]([1-9]{1}([0-9]{1}|[0-9]{2})\)[-](9)[0-9]{2}[-][0-9]{3}[-][0-9]{3})|((9)[0-9]{2}([ ]|[-])[0-9]{6})" onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="9" maxlength="9">
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group col-lg-6 ">
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-credit-card form-control-icon"></span>
                                            <input type="text" id="dni" name="dni" class="form-control" placeholder="DNI" required onkeypress="return event.charCode >= 48 && event.charCode <= 57" minlength="8" maxlength="8">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-envelope form-control-icon"></span>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Correo Electronico" required>

                                        </div>
                                    </div>

                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-map-marker form-control-icon"></span>
                                            <select id="campus" class="form-control" required>
                                                <option disabled selected value="">Campus</option>
                                                <option value="Ate">Ate</option>
                                                <option value="Callao">Callao</option>
                                                <option value="Chepén">Chepén</option>
                                                <option value="Chiclayo">Chiclayo</option>
                                                <option value="Chimbote">Chimbote</option>
                                                <option value="Huaraz">Huaraz</option>
                                                <option value="Los Olivos">Los Olivos</option>
                                                <option value="Moyobamba">Moyobamba</option>
                                                <option value="Piura">Piura</option>
                                                <option value="San Juan de Lurigrancho">San Juan de Lurigrancho</option>
                                                <option value="Tarapoto">Tarapoto</option>
                                                <option value="Trujillo">Trujillo</option>

                                            </select>

                                        </div>

                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <span class="fa fa-laptop form-control-icon"></span>
                                            <select id="curso" class="form-control" required>
                                                <option disabled selected value="">Curso</option>
                                                <option value="Computación l">Computación l</option>
                                                <option value="Computación ll">Computación ll</option>
                                                <option value="Computación lll">Computación lll</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-lg-12">
                                    <textarea id="consulta" name="consulta" class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Consulta" required></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group form-check col-lg-12 text-center text-white">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Acepto la <a href="" class="politica-check">política de privacidad y protección de datos
                                            personales</a></label>
                                </div>
                            </div>
                            <input id="enviar" type="submit" class="btn nav-item active-cta" value="ENVIAR">
                        </form>