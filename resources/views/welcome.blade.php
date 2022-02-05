<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,900;1,900&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-vue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/site.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <script src="{{ asset('js/popper.min.js')}}"></script>
    </head>
    <body>
        <div class="content-index">
            <ul class="nav menu-navigate">
                <li class="nav-item">
                    <a href="#">INICIO</a>
                </li>
                <li class="nav-item">
                    <a href="#about_us">TRAYECTORIA</a>
                </li>
                <li class="nav-item">
                    <a href="#services">PROCEDIMIENTOS</a>
                </li>
                <li class="nav-item">
                    <a href="#contact">CONTACTO</a>
                </li>
            </ul>
            <img src="../img/index1.png" alt="img" class="index-img-1">
            <img src="../img/index2.png" alt="img" class="index-img-2">
            <div class="index-title">
                <img src="../img/vive.png"/>
            </div>
        </div>
        <div class="content-about-us" id="about_us">
            <div class="row" style="height:100%;">
                <div class="col-12 col-lg-8 col-md-7 col-sm-12">
                    <div class="about-info">
                        <span class="text-capital">
                            <img src="../img/about1.png" alt="img"/>
                            <h1 class="text-capital">24</h1>
                            <p class="text-capital" style="display: inline-block">horas</p>
                        </span>
                        <span class="text-capital">URGENCIAS MEDICAS</span>
                        <span class="text-min">Atendiendo de manera inmediatamente cualquier llamado de emergencia</span>
                        <span class="text-min">las 24 horas del día.</span>
                    </div>
                    <div class="about-info">
                        <p class="text-capital">
                            <strong>Enfocado</strong> en encontrar y tratar el origen de tu
                        </p>
                        <p class="text-capital">padecimiento músculo esqueletico hasta</p>
                        <p class="text-capital"><strong>recuperar la movilidad</strong>.</p>
                    </div>
                    <div class="about-info">
                        <ul class="list-enum-details">
                            <li>Médico Cirujano por la Universidad Autónoma de Nayarit.</li>
                            <li>Médico Especialista en Traumatología y Ortopedia por la Universidad Nacional Autónoma de México (UNAM).</li>
                            <li>Alta especialidad en Cirugía Articular.</li>
                            <li>Miembro activo del Colegio Mexicano de Ortopedia y Traumatología de Puerto Vallarta A.C.</li>
                        </ul>
                    </div>
                    <center>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#modalCV" style="background-color: #013995;">VER TRAYECTORIA</button>
                    </center>
                    
                </div>
                <div class="col-12 col-lg-4 col-md-5 col-sm-12">
                    <img src="../img/about2.png" alt="img" class="about-img-1">
                </div>
            </div>
        </div>
        <div class="content content-info-1">
            <div class="info" style="padding: 80px 60px 30px 60px;">
                <h1 class="info-label">SENTIR DOLOR YA <strong>NO ES OPCIÓN,</strong></h1>
                <h1 class="info-label"><strong>RECUPERA LA MOVILIDAD, SÍ.</strong></h1>
            </div>
            <div class="info" style="padding: 30px 60px 80px 60px;">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <span>MÁS DE</span>
                        <h1><i class="fas fa-medal"></i>&nbsp;10</h1>
                        <span>AÑOS DE EXPERIENCÍA</span>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <span>MÁS DE</span>
                        <h1><i class="fas fa-check"></i>&nbsp;3,000</h1>
                        <span>PROCEDIMIENTOS REALIZADOS CON EXITO.</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="content content-info-2">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12" style="height:100%">
                    <div id="img-info2-1"></div>
                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                    <span>CERTIFICADO POR EL CONSEJO MEXICANO</span>
                    <span>DE TRAUMATOLOGÍA Y ORTOPEDIA A.C.</span>
                    <img src="../img/info2_2.png" alt="">
                </div>
            </div>
        </div>
        <div class="content content-services" id="services">
            <div class="div-services">
                <div class="row" style="height:100%">
                    <div class="col-12" style="margin: 25px 0;color: #013995">
                        <h1 style="text-align: center">PRINCIPALES PROCEDIMIENTOS</h1>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <img src="../img/services1.png" alt="" style="width:100%;">
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <ul class="list-services">
                            <li class="li-title">Problemas de rodillas:</li>
                            <li class="li-description">Artrosis.</li>
                            <li class="li-description">Osteaoartrosis (desgaste).</li>
                            <li class="li-description">Esguince de Rodilla.</li>
                            <li class="li-title">Problemas de Cadera:</li>
                            <li class="li-description">Artrosis.</li>
                            <li class="li-description">Osteaoartrosis (desgaste).</li>
                            <li class="li-description">Hernia de disco.</li>
                            <li class="li-description">Contracturas musculares.</li>
                            <li class="li-description">Fracturas.</li>
                            <li class="li-description">Tendinitis.</li>
                            <li class="li-description">Infección de huesos.</li>
                            <li class="li-description">Columna desviada (escoliosis)</li>
                            <li class="li-description">Lesiones de meniscos.</li>
                            <li class="li-description">Rupturas de ligamentos cruzadas.</li>
                            <li class="li-description">Juanetes.</li>
                            <li class="li-description">Artitris.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <ul class="list-services">
                            <li class="li-description">Bursitis.</li>
                            <li class="li-description">Síndrome de tunel cubital.</li>
                            <li class="li-description">Síndrome de tunel carpiano.</li>
                            <li class="li-description">Epicondilitis.</li>
                            <li class="li-description">Fibromalgia.</li>
                            <li class="li-description">Osteoporosis.</li>
                            <li class="li-description">Esguince Cervical.</li>
                            <li class="li-description">Espondiloartrosis.</li>
                            <li class="li-description">Tumor de columna.</li>
                            <li class="li-description">Estenosis de columna.</li>
                            <li class="li-description">Mielopatía.</li>
                            <li class="li-description">Disfunción de la articulación sacroilíaca.</li>
                            <li class="li-description">Enfermedad degenerativa de disco.</li>
                            <li class="li-description">Cifosis.</li>
                            <li class="li-description">Problemas derivados de lesiones deportivas (Medicina deportiva).</li>
                            <li class="li-description">Traumatología pedíatrica y ortopedia pediátrica.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="div-services" style="border-left: #013995 45px solid; margin:0;">
                <div class="row" style="height:100%">
                    <div class="col-12 col-lg-8 col-md-8 col-sm-12" style="padding: 20px 0px;">
                        <ul class="list-services" style="margin-left: 60px;">
                            <li class="li-title">Entre los síntomas que se presentan con más frecuencia se encuentran:</li>
                            <li class="li-description">Dolor de rodilla.</li>
                            <li class="li-description">Dolor de cadera.</li>
                            <li class="li-description">Dolor o entumecimiento de pierna (Ciática).</li>
                            <li class="li-description">Dolor de codo.</li>
                            <li class="li-description">Dolor de pie.</li>
                            <li class="li-description">Dolor de espalda baja (Lumbalgia).</li>
                            <li class="li-description">Dolor de espalda alta.</li>
                            <li class="li-description">Dolor de manos.</li>
                            <li class="li-description">Dolor de cuello (cervicalgia).</li>
                            <li class="li-description">Dolor de hombro.</li>
                            <li class="li-description">Hombro caído.</li>
                            <li class="li-description">Adormecimiento de piernas y brazos.</li>
                            <li class="li-description">Dolor de glúteo.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <img src="../img/services2.png" alt="" style="width:100%;">
                    </div>
                </div>
            </div>
            <div class="div-services">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <img src="../img/services3.png" alt="" style="width:100%;">
                    </div>
                    <div class="col-12 col-lg-8 col-md-8 col-sm-12">
                        <ul class="list-services">
                            <li class="li-title">Cuando la condición es severa, se requerirá de una intervención quirúrguica estoy capacitado y certificado para realizar cirugías como:</li>
                            <li class="li-description">Prótesis de cadera.</li>
                            <li class="li-description">Prótesis de hombro.</li>
                            <li class="li-description">Prótesis de rodilla.</li>
                            <li class="li-description">Artroscopias.</li>
                            <li class="li-description">Reparación de tejido blanco.</li>
                            <li class="li-description">Cirugía de revisión de articulación.</li>
                            <li class="li-description">Reparación de hueso fracturado.</li>
                            <li class="li-description">Fusión de huesos.</li>
                            <li class="li-description">Osteotomía.</li>
                            <li class="li-description">Extirpación.</li>
                            <li class="li-description">Infiltraciones de antinflamatorios esteroides.</li>
                            <li class="li-description">Plasma rico en plaquetas.</li>
                            <li class="li-description">Terapia de células madre.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-contact" id="contact">
            <div class="title-content">
                <h1>RESERVA UNA CONSULTA</h1>
            </div>
            <div style="heigth:80vh">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12" style="background: #013995; color:#fff;">
                        <div class="div-contact-info">
                            <span><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;UBICACIONES</span>
                            <ul class="list-services">
                                <li class="li-description">Manuel M. Dieguez 360, Alta Vista, 48380 Puerto Vallarta, Jal.</li>
                                <li class="li-description">Instituto Politécnico Nacional 1474, Villa Universidad, 48290 Puerto Vallarta, Jal.</li>
                                <li class="li-description">Río Yaki 255, Instituto Politécnico Nacional 1474, 48313 Puerto Vallarta, Jal.</li>
                            </ul>
                        </div>
                        <div class="div-contact-info">
                            <span><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;TELEFONOS</span>
                            <ul class="list-services">
                                <li class="li-description">322 266 7191</li>
                                <li class="li-description">222 118 9153</li>
                            </ul>
                        </div>
                        <div class="div-contact-info">
                            <span><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;CORREO</span>
                            <ul class="list-services">
                                <li class="li-description">contacto reatraumatologo.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12" style="padding: 0;">
                        <iframe
                          width="100%"
                          height="450"
                          style="border:0"
                          allowfullscreen
                          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDM4AbS0fq0BezfG-ja5HmwjARw7vNR1-c
                            &q=Manuel+M.+Dieguez+360,+Alta+Vista,+48380+Puerto+Vallarta,+Jal./">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-form" id="form-vue">
            <div class="row">
                <div class="col-12">
                    <div class="content" style="padding: 100px 50px;">
                        <h1 style="color:#013995;font-weight:bold;">¿TIENES ALGUNA DUDA?</h1>
                        <h2 style="color:#013995;font-weight:bold;">ESCRIBEME.</h2>
                        <validation-observer v-slot="{ invalid, handleSubmit }">
                            <form @submit.prevent="handleSubmit(Contactar)" style="font-family: sans-serif;">
                                <validation-provider rules="required|max:50" v-slot="{ dirty, valid, invalid, errors }">
                                    <input type="text" name="Nombre" id="name" v-model="contacto.Nombre" class="form-control" placeholder="Nombre"/>
                                    <div class="texto-error invalid-feedback d-inline-block" v-show="errors">@{{ errors[0] }}</div>
                                </validation-provider>
                                <validation-provider rules="required|email" v-slot="{ dirty, valid, invalid, errors }">
                                    <input type="text" name="Email" id="email" v-model="contacto.Email" class="form-control" placeholder="Email"/>
                                    <div class="texto-error invalid-feedback d-inline-block" v-show="errors">@{{ errors[0] }}</div>
                                </validation-provider>
                                <validation-provider rules="required|max:10" v-slot="{ dirty, valid, invalid, errors }">
                                    <input type="text" name="Telefono" id="phone" v-model="contacto.Telefono" class="form-control" placeholder="Telefono"/>
                                    <div class="texto-error invalid-feedback d-inline-block" v-show="errors">@{{ errors[0] }}</div>
                                </validation-provider>
                                <validation-provider rules="required|max:100" v-slot="{ dirty, valid, invalid, errors }">
                                    <input type="text" name="Asunto" id="subject" v-model="contacto.Asunto" class="form-control" placeholder="Asunto"/>
                                    <div class="texto-error invalid-feedback d-inline-block" v-show="errors">@{{ errors[0] }}</div>
                                </validation-provider>
                                <validation-provider rules="required|max:300" v-slot="{ dirty, valid, invalid, errors }">
                                    <textarea name="Mensaje" id="message" cols="30" rows="5" v-model="contacto.Info" class="form-control" placeholder="Mensaje"></textarea>
                                    <div class="texto-error invalid-feedback d-inline-block" v-show="errors">@{{ errors[0] }}</div>
                                </validation-provider>
                                <button type="submit" class="btn btn-success">Enviar Mensaje</button>
                                {{ csrf_field() }}
                            </form>
                        </validation-observer>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer" style="position:relative;text-align:center;">
            <div class="content-schedule">
                <h2 class="info-label"><i style="color:#0372ff;" class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;HORARIOS DE ATENCIÓN</h2>
                <div class="info">
                    <h3 class="info-label">LUNES A VIERNES</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3 class="info-label">08:00 AM A 05:00 PM</h3>
                </div>
                <div class="info">
                    <h3 class="info-label">SABADO</h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h3 class="info-label">10:00 AM A 03:00 PM</h3>
                </div>
            </div>
            
            <img src="../img/footer1.png" alt=""/>

            <div class="footer-networks">
                <a href="https://www.facebook.com/Dr.RicardoVazquezRea" target="__blank"><i class="fab fa-facebook-square"></i></a> 
                <a href="https://www.instagram.com/dr.ricardovazquezrea/" target="__blank"><i class="fab fa-instagram-square"></i></a> 
                <a href="https://www.tiktok.com/@dr.ricardovazquezrea" target="__blank"><i class="fab fa-tiktok"></i></a> 
            </div>

            <span style="display: block;padding-top: 100px;">Copyright © 2021 Dr. Ricardo Vázquez Rea Todos los Derechos Reservados.</span>
        </div>
        <div class="modal" id="modalCV" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content" style="height:550px;">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <iframe id="ifrm" src="../Trayectoria.pdf" frameborder="0" style="overflow:hidden;height:100%;width:100%" height="100%" width="100%"></iframe>
                  </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/axios.min.js')}}"></script>
        <script src="{{ asset('js/vue.js')}}"></script>
        <script src="{{ asset('js/jquery-3.5.1.slim.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-vue.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-vue-icons.min.js')}}"></script>
        <script src="{{ asset('js/rules.umd.js')}}"></script>
        <script src="{{ asset('js/vee-validate.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/8f542f1300.js" crossorigin="anonymous"></script>
        <script>
            // Scroll to specific values
            // scrollTo is the same
            window.scroll({
              top: 2500, 
              left: 0, 
              behavior: 'smooth'
            });

            // Scroll certain amounts from current position 
            window.scrollBy({ 
              top: 2500, // could be negative value
              left: 0, 
              behavior: 'smooth' 
            });
            
            document.querySelector('#about_us').scrollIntoView({ 
              behavior: 'smooth' 
            });
            document.querySelector('#services').scrollIntoView({ 
              behavior: 'smooth' 
            });
            document.querySelector('#contact').scrollIntoView({ 
              behavior: 'smooth' 
            });
        </script>
        <script>
            Object.keys(VeeValidateRules).forEach(rule => {
              VeeValidate.extend(rule, VeeValidateRules[rule]);
            }); 
        
            Vue.component('validation-observer', VeeValidate.ValidationObserver);
            Vue.component('validation-provider', VeeValidate.ValidationProvider);

            new Vue({
                el: "#form-vue",
                data: {
                    contacto: {
                        Nombre: null,
                        Asunto: null,
                        Email: null,
                        Telefono: null,
                        Info: null
                    }
                },
                methods: {
                    Contactar: function(){
                        let _token = $('input[name="_token"]').val();
                        let contacto = this.contacto
                        axios.post("{{ route('ContactoEmail') }}", { _token, contacto })
                        .then(respuesta => {
                            let objRespuesta = respuesta.body.mensaje;
                            console.log(objRespuesta);
                            //this.enviarToastRespuesta(objRespuesta.TipoMensaje, objRespuesta.Mensaje)
                        })
                        .catch(error => {
                            //this.enviarToastErrorAjax("Enviar Correo")
                            console.log(error);
                        })
                    }
                }
            })
        </script>
    </body>
</html>