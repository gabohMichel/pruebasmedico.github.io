<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Dr. Ricardo Vazquez</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,900;1,900&display=swap" rel="stylesheet"> 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap-vue.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/site.css?v=3') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <script src="{{ asset('js/popper.min.js')}}"></script>
    </head>
    <body>
        <div class="content-index">
        <header>
	    	<div class="menu_bar">
	    		<a href="#" class="bt-menu"><i class="fa fa-bars"></i></a>
	    	</div>
	    	<nav>
	    		<ul>
	    			<li><a href="#"><span class="fa fa-home"></span>INICIO</a></li>
	    			<li><a href="#about_us"><span class="fa fa-ambulance"></span>TRAYECTORIA</a></li>
	    			<li><a href="#services"><span class="fa fa-stethoscope"></span>PROCEDIMIENTOS</a></li>
	    			<li><a href="#contact"><span class="fa fa-address-book"></span>CONTACTO</a></li>
	    		</ul>
	    	</nav>
	    </header>
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
                        <span class="text-min">las 24 horas del d??a.</span>
                    </div>
                    <div class="about-info">
                        <p class="text-capital">
                            <strong>Enfocado</strong> en encontrar y tratar el origen de tu
                        </p>
                        <p class="text-capital">padecimiento m??sculo esqueletico hasta</p>
                        <p class="text-capital"><strong>recuperar la movilidad</strong>.</p>
                    </div>
                    <div class="about-info">
                        <ul class="list-enum-details">
                            <li>M??dico Cirujano por la Universidad Aut??noma de Nayarit.</li>
                            <li>M??dico Especialista en Traumatolog??a y Ortopedia por la Universidad Nacional Aut??noma de M??xico (UNAM).</li>
                            <li>Alta especialidad en Cirug??a Articular.</li>
                            <li>Miembro activo del Colegio Mexicano de Ortopedia y Traumatolog??a de Puerto Vallarta A.C.</li>
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
                <h1 class="info-label">SENTIR DOLOR YA <strong>NO ES OPCI??N,</strong></h1>
                <h1 class="info-label"><strong>RECUPERA LA MOVILIDAD, S??.</strong></h1>
            </div>
            <div class="info" style="padding: 30px 60px 80px 60px;">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <span>M??S DE</span>
                        <h1><i class="fas fa-medal"></i>&nbsp;10</h1>
                        <span>A??OS DE EXPERIENC??A</span>
                    </div>
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12">
                        <span>M??S DE</span>
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
                    <span>ORTOPEDIA Y TRAUMATOLOG??A, A.C.</span>
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
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                        <img src="../img/services1.png" alt="" style="width:100%;height: 100%;">
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 col-sm-12">
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
                            <li class="li-description">Infecci??n de huesos.</li>
                            <li class="li-description">Columna desviada (escoliosis)</li>
                            <li class="li-description">Lesiones de meniscos.</li>
                            <li class="li-description">Rupturas de ligamentos cruzadas.</li>
                            <li class="li-description">Juanetes.</li>
                            <li class="li-description">Artritis.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 col-sm-12">
                        <ul class="list-services">
                            <li class="li-description">Bursitis.</li>
                            <li class="li-description">S??ndrome de tunel cubital.</li>
                            <li class="li-description">S??ndrome de tunel carpiano.</li>
                            <li class="li-description">Epicondilitis.</li>
                            <li class="li-description">Fibromalgia.</li>
                            <li class="li-description">Osteoporosis.</li>
                            <li class="li-description">Esguince Cervical.</li>
                            <li class="li-description">Espondiloartrosis.</li>
                            <li class="li-description">Tumor de columna.</li>
                            <li class="li-description">Estenosis de columna.</li>
                            <li class="li-description">Mielopat??a.</li>
                            <li class="li-description">Disfunci??n de la articulaci??n sacroil??aca.</li>
                            <li class="li-description">Enfermedad degenerativa de disco.</li>
                            <li class="li-description">Cifosis.</li>
                            <li class="li-description">Problemas derivados de lesiones deportivas (Medicina deportiva).</li>
                            <li class="li-description">Traumatolog??a ped??atrica y ortopedia pedi??trica.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="div-services" style="border-left: #013995 45px solid; margin:0;">
                <div class="row" style="height:100%">
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                        <img src="../img/services2.png" alt="" style="width:100%;">
                    </div>
                    <div class="col-12 col-lg-8 col-md-12 col-sm-12" style="padding: 20px 0px;">
                        <ul class="list-services" style="margin-left: 60px;">
                            <li class="li-title">Entre los s??ntomas que se presentan con m??s frecuencia se encuentran:</li>
                            <li class="li-description">Dolor de rodilla.</li>
                            <li class="li-description">Dolor de cadera.</li>
                            <li class="li-description">Dolor o entumecimiento de pierna (Ci??tica).</li>
                            <li class="li-description">Dolor de codo.</li>
                            <li class="li-description">Dolor de pie.</li>
                            <li class="li-description">Dolor de espalda baja (Lumbalgia).</li>
                            <li class="li-description">Dolor de espalda alta.</li>
                            <li class="li-description">Dolor de manos.</li>
                            <li class="li-description">Dolor de cuello (cervicalgia).</li>
                            <li class="li-description">Dolor de hombro.</li>
                            <li class="li-description">Hombro ca??do.</li>
                            <li class="li-description">Adormecimiento de piernas y brazos.</li>
                            <li class="li-description">Dolor de gl??teo.</li>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4 col-sm-12">
                        <img src="../img/services2.png" alt="" style="width:100%;">
                    </div>
                </div>
            </div>
            <div class="div-services">
                <div class="row">
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                        <img src="../img/services3.png" alt="" style="width:100%;">
                    </div>
                    <div class="col-12 col-lg-8 col-md-8 col-sm-12">
                        <ul class="list-services">
                            <li class="li-title">Cuando la condici??n es severa, se requerir?? de una intervenci??n quir??rgica estoy capacitado y certificado para realizar cirug??as como:</li>
                            <li class="li-description">Pr??tesis de cadera.</li>
                            <li class="li-description">Pr??tesis de hombro.</li>
                            <li class="li-description">Pr??tesis de rodilla.</li>
                            <li class="li-description">Artroscopias.</li>
                            <li class="li-description">Reparaci??n de tejido blando.</li>
                            <li class="li-description">Cirug??a de revisi??n de articulaci??n.</li>
                            <li class="li-description">Reparaci??n de hueso fracturado.</li>
                            <li class="li-description">Fusi??n de huesos.</li>
                            <li class="li-description">Osteotom??a.</li>
                            <li class="li-description">Extirpaci??n.</li>
                            <li class="li-description">Infiltraciones de antinflamatorios esteroides.</li>
                            <li class="li-description">Plasma rico en plaquetas.</li>
                            <li class="li-description">Terapia de c??lulas madre.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-contact" id="contact">
            <div class="title-content">
                <h1>RESERVA UNA CONSULTA</h1>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12 hide-contact" 
                        style="background: #013995; color:#fff;">
                        <div class="div-contact-info align-middle">
                            <span><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;&nbsp;UBICACIONES</span>
                            <ul class="list-services">
                                <li class="li-description">
                                    <a class="link-not-decorate btnUbicacion" 
                                    data-location="Dr.+Ricardo+V??zquez+Rea+-+Traumat??logo,+Ortopedista+y+Cirug??a+Articular+UNAM+Consultorio+VMC">Av, Los Tules 136, Col. D??az Ordaz, Torre M??dica VMC. Consultorio 103, 48210 Puerto Vallarta, Jal.</a>
                                </li>
                                <li class="li-description">
                                    <a class="link-not-decorate btnUbicacion" 
                                    data-location="Paseo+de+los+cocoteros+55,+N??cleo+m??dico+Joya,+consultorio+7,+Fracc+N??utico,+63732+Nuevo+Vallarta,+Nay.">Paseo de los cocoteros 55, N??cleo m??dico Joya, consultorio 7, Fracc N??utico, 63732 Nuevo Vallarta, Nay.</a>
                                </li>
                                <li class="li-description">
                                    <a class="link-not-decorate btnUbicacion" 
                                    data-location="Instituto+Polit??cnico+Nacional+1474,+Villas+Universidad,+48290+Puerto+Vallarta,+Jal.">Instituto Polit??cnico Nacional 1474, Villas Universidad, 48290 Puerto Vallarta, Jal.</a>
                                </li>
                                <li class="li-description">
                                    <a class="link-not-decorate btnUbicacion" 
                                    data-location="Dr.+Ricardo+V??zquez+Rea+-+Traumat??logo,+Ortopedista+y+Cirug??a+Articular+-+Consultorio+Rio+Yaki">Rio yaki 225, Instituto Polit??cnico Nacional 1474, 48313 Puerto Vallarta, Jal.</a>
                                </li>
                            </ul>
                        </div>
                        <div class="div-contact-info align-middle">
                            <span><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;TELEFONOS</span>
                            <ul class="list-services">
                                <a class="link-not-decorate" href="tel:322 225 9510">
                                    <li class="li-description">322 225 9510</li>
                                </a>
                                <a class="link-not-decorate" href="tel:322 228 9857">
                                    <li class="li-description">322 228 9857</li>
                                </a>
                            </ul>
                        </div>
                        <div class="div-contact-info align-middle">
                            <span><i class="fas fa-phone-alt"></i>&nbsp;&nbsp;&nbsp;S??LO EMERGENCIAS</span>
                            <ul class="list-services">
                                <a class="link-not-decorate" href="tel:322 266 7198">
                                    <li class="li-description">322 266 7198</li>
                                </a>
                            </ul>
                        </div>
                        <div class="div-contact-info align-middle">
                            <span><i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;CORREO</span>
                            <ul class="list-services">
                                <a class="link-not-decorate" href="mailto:contacto@drricardovazquezrea.com">
                                    <li class="li-description">contacto@drricardovazquezrea.com</li>
                                </a>
                            </ul>
                        </div>
                        <div id="swipeContact">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-md-12 col-sm-12" style="padding: 0;">
                        <iframe
                          width="100%"
                          style="border:0"
                          id="map"
                          allowfullscreen
                          src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDM4AbS0fq0BezfG-ja5HmwjARw7vNR1-c&q=Dr.+Ricardo+V??zquez+Rea+-+Traumat??logo,+Ortopedista+y+Cirug??a+Articular+UNAM+Consultorio+VMC">
                        </iframe>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <center>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#modalComments" style="background-color: #013995;margin-top: 20px;">VER COMENTARIOS</button>
                </center>
            </div>
        </div>
        <div class="content-form" id="form-vue">
            <b-overlay :show="overlayForm" rounded="sm">
                <div class="row">
                    <div class="col-12">
                        <div class="content" style="padding: 100px 50px;">
                            <h1 style="color:#013995;font-weight:bold;">??TIENES ALGUNA DUDA?</h1>
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
            </b-overlay>
        </div>
        <div class="footer" style="position:relative;text-align:center;">
            <div class="content-schedule">
                <h2 class="info-label"><i style="color:#0372ff;" class="far fa-clock"></i>&nbsp;&nbsp;&nbsp;HORARIOS DE ATENCI??N</h2>
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
                <a href="https://www.instagram.com/dr.ricardovazquezrea/" target="__blank"><i class="instagram-icon fab fa-instagram-square"></i></a> 
                <a href="https://www.tiktok.com/@dr.ricardovazquezrea" target="__blank"><i class="fab fa-tiktok" style="color: #000;"></i></a> 
                <a href="https://www.youtube.com/channel/UClG_eO80JtWb4IYIiy111_g/about" target="__blank"><i class="fab fa-youtube" style="color: #FF0000"></i></a>
            </div>

            <span id="aviso-privacidad">
                <a data-toggle="modal" data-target="#modalAvisoPrivacidad">Aviso de privacidad</a>
            </span>
            <span id="derechos">Copyright ?? 2021 Dr. Ricardo V??zquez Rea Todos los Derechos Reservados.</span>
            
            <a href="https://wa.me/+523222289857?text=Hola%estoy%interesado%en%tus%servicio%de" 
                target="__blank"
                class="link-whatsapp">
                <i class="fab fa-whatsapp"></i>
            </a>
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
        <div class="modal" id="modalComments" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" role="document">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div id="wpac-google-review"></div>
                  </div>
                </div>
            </div>
        </div>
        <div class="modal aviso-privacidad" id="modalAvisoPrivacidad" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content" role="document">
                  <div class="modal-header">
                    <h1>AVISO DE PRIVACIDAD.</h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    
                    <p>
                        El presente aviso de privacidad, se expide de conformidad con el art??culo 16 Ley Federal de
                        Protecci??n de Datos Personales en Posesi??n de los Particulares.
                    </p>
                    <p>
                        I.- Las finalidades del tratamiento de datos.- Lo constituye la prestaci??n de servicios de
                        salud realizadas en beneficio del titular de la informaci??n, dirigidas a proteger, promover y
                        restaurar su salud, garantizar un tratamiento correcto, determinar si requiere ser tratado
                        como paciente vulnerable y de alto riesgo, hospitalizaci??n, cirug??a, estudios diagn??sticos y
                        dem??s fines relacionados con servicios de salud. Creaci??n, estudio, an??lisis, actualizaci??n,
                        y conservaci??n del expediente cl??nico. Facturaci??n y cobranza por servicios m??dicos.
                        Estudios, registros, estad??sticas y an??lisis de informaci??n de salud. prestaci??n de servicios
                        de salud en el futuro y en general para dar seguimiento a cualquier relaci??n de prestaci??n
                        de servicios. Investigaci??n y Estad??stica Cl??nica. Remitir sus datos a sus m??dicos
                        interconsultantes, transferir sus datos, en su caso, a la aseguradora con quien tenga
                        contratada una p??liza de seguro de gastos m??dicos, para encuestas de satisfacci??n de
                        servicios para el cumplimiento de los derechos y obligaciones adquiridos por la firma del
                        Contrato de la Prestaci??n de Servicios M??dicos.
                    </p>
                    <p>
                        II.- Las opciones y medios que el responsable ofrezca a los titulares para limitar el uso o
                        divulgaci??n de los datos.- Para limitar el uso de sus datos personales, favor de enviar un
                        correo electr??nico a la direcci??n electr??nica y/o por escrito a la direcci??n abajo anotada,
                        dirigida al responsable de la informaci??n de Datos Personales en el que se se??ale la
                        limitaci??n al uso de sus datos deseada.
                    </p>
                    <p>
                        III.- Los medios para ejercer los derechos de acceso, rectificaci??n, cancelaci??n u oposici??n
                        de los derechos previstos en la Ley.- Para el ejercicio de sus derechos ARCO y/o
                        modificaci??n y/o la revocaci??n de su consentimiento para el tratamiento de sus datos
                        personales, en caso de que estos sean inexactos o incompletos u oponerse a su
                        tratamiento para ciertos fines, favor de presentar una solicitud por escrito (solicitud de
                        ejercicio de derechos ARCO) dirigida al responsable de Datos Personales a la direcci??n
                        electr??nica o f??sica abajo anotada, y que deber?? contener la siguiente informaci??n: a)
                        Nombre del titular. b) Domicilio de titular o direcci??n de correo electr??nico para comunicar
                        respuesta a solicitud. c) Documentos que acrediten identidad o autorizaci??n para
                        representarlo en la solicitud. d) Descripci??n de datos personales sobre los que se pretende
                        ejercer alg??n derecho ARCO. e) Cualquier otro elemento que permita la localizaci??n de los
                        datos personales y atenci??n a la solicitud.
                    </p>
                    <p>
                        IV.- En su caso, las transferencias de datos que se efect??en.- Para la prestaci??n de
                        servicios. El responsable puede transferir dentro y fuera del pa??s, los datos personales en su
                        posesi??n a terceros subcontratados para fines relacionados con los se??alados en este aviso
                        de privacidad. Dentro de los terceros a los que se transferir??n dichos datos se incluyen sin
                        limitar laboratorios, cl??nicas, hospitales, otros profesionales de la salud (psic??logos,
                        nutri??logos, etc), centros de investigaci??n, aseguradoras, as?? como a cualquiera otro
                        necesario para la prestaci??n del servicio m??dico y los correspondientes al cumplimiento de
                        las obligaciones del contrato de prestaci??n de servicios profesionales.
                    </p>
                    <p>
                        V.- El procedimiento y medio por el cual el responsable comunicar?? a los titulares de
                        cambios al aviso de privacidad, de conformidad con lo previsto en esta Ley.- El
                        Responsable, se reserva el derecho de efectuar en cualquier momento modificaciones al
                        presente Aviso de Privacidad para cumplir con actualizaciones legislativas,
                        jurisprudenciales, pol??ticas internas, nuevos requisitos para la presentaci??n de servicios
                        m??dicos, en el entendido de que toda modificaci??n al mismo se le dar?? a conocer por medio
                        de la publicaci??n de un aviso que estar?? disponible en nuestras instalaciones abajo
                        anotadas.
                    </p>
                    <p>
                        VI.- En el caso de datos personales sensibles, el aviso de privacidad deber?? se??alar
                        expresamente que se trata de este tipo de datos.- El Responsable recabar?? y tratar?? datos
                        sensibles, relacionados con el estado de salud, historial cl??nico que describe, antecedentes
                        patol??gicos, no patol??gicos y otros datos necesarios o convenientes para los fines arriba
                        se??alados. Los datos personales sensibles ser??n mantenidos y tratados con estricta
                        seguridad y confidencialidad para fines relacionados con la prestaci??n de servicios de salud
                        y conforme a este aviso de privacidad y la legislaci??n, reglamentos y normativa aplicable.
                    </p>
                    <p>
                        La identidad y domicilio del responsable que los recaba.
                    </p>
                    <p>
                        Responsable: Dr. Jos?? Ricardo Vazquez Rea
                        Domicilio: Av. Los tules. Col. D??az Ordaz. Oficina 103 Torre M??dica VMC. Puerto Vallarta,
                        Jalisco. Cp 48210
                        Tel??fono:322 350 2932.
                        Direcci??n Electr??nica: webricardovazquezrea@gmail.com
                    </p>
                    <p>
                        "Derechos de autor propiedad de Salomon & Warner, S.C., registrados bajo No.
                        03-2005-121914345800-01 con el Titulo: CARTAS DE CONSENTIMEINTO INFORMADO,
                        en el rubro de TITULO DE OBRA, ante el INDAUTOR. El licenciamiento es para uso
                        EXCLUSIVO del licenciatario aqu?? anotado, motivo por el cual NO PODRA, no deber??, ni
                        permitir a terceras partes, asignar, licenciar a terceros, vender, rentar, alquilar, ni traspasar
                        ni de ninguna otra forma utilizar, transferir, copiar, traducir, ceder, convertir a otro idioma,
                        alterar, modificar, descompilar ni desensamblar las CARTAS DE CONSENTIMIENTO ni el
                        SOFTWARE, completa ni parcialmente, a menos que se indique o garantice en ??ste
                        contrato. Solo podr?? adicionar riesgos personalizados y otras alternativas. No deber??
                        eliminar, borrar, ni cancelar ning??n aviso sobre derechos de autor que aparezca en las
                        CARTAS DE CONSENTIMIENTO y/o en el SOFTWARE que las contiene en cualquier
                        medio; quedando prohibido y sujeto a procedimiento PENAL y CIVIL de REPARACI??N DEL
                        DA??O CAUSADO, cualquier tipo de reproducci??n sin autorizaci??n por escrito."
                    </p>
                  </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/axios.min.js')}}"></script>
        <script src="{{ asset('js/vue.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-vue.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-vue-icons.min.js')}}"></script>
        <script src="{{ asset('js/rules.umd.js')}}"></script>
        <script src="{{ asset('js/vee-validate.min.js')}}"></script>
        <script src="https://kit.fontawesome.com/8f542f1300.js" crossorigin="anonymous"></script>
        <script src="https://cdn.emailjs.com/dist/email.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            wpac_init = window.wpac_init || [];
            wpac_init.push({widget: 'GoogleReview', id: 33925, place_id: 'ChIJm-19aHNFIYQRsFUNwf3hlbE', view_mode: 'list'});

            const deviceType = () => {
                const ua = navigator.userAgent;
                if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
                    return "tablet";
                }
                else if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
                    return "mobile";
                }
                return "desktop";
            };

            (function() {
                $(document).ready(main);
                
                var contador = 1;

                if ('WIDGETPACK_LOADED' in window) return;
                WIDGETPACK_LOADED = true;
                var mc = document.createElement('script');
                mc.type = 'text/javascript';
                mc.async = true;
                mc.src = "{{ asset('js/widget.js')}}";
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(mc, s.nextSibling);
                var base = "https://www.google.com/";
                var endPoint = "maps/embed/v1/";
                var queryString = "place?key=AIzaSyDM4AbS0fq0BezfG-ja5HmwjARw7vNR1-c&q=";

                $(".btnUbicacion").click(function(){
                    let location = $(this).data("location");
                    let url = base + endPoint + queryString + location;
                    
                    $("#map").attr("src",url);

                    let device = deviceType();

                    if(device == 'tablet' || device == 'mobile')
                        swipeContact();
                });

                $("#swipeContact").on("touchstart", function(){
                    swipeContact();
                });

                var swipeContact = function() {
                    $("#swipeContact").find("i").remove();
                    if($(".hide-contact")[0]) {
                        $(".hide-contact").addClass("show-contact");
                        $(".show-contact").removeClass("hide-contact");
                        $("#swipeContact").append("<i class='fa fa-chevron-left' aria-hidden='true'></i>");
                    }
                    else {
                        $(".show-contact").addClass("hide-contact");
                        $(".hide-contact").removeClass("show-contact");
                        $("#swipeContact").append("<i class='fa fa-chevron-right' aria-hidden='true'></i>");
                    }
                }

                function main(){
                    emailjs.init("WR6swttnQ1FpFeKgw");

                	$('.menu_bar').click(function(){
                		// $('nav').toggle(); 
                    
                		if(contador == 1){
                			$('nav').animate({
                				left: '0'
                			});
                			contador = 0;
                		} else {
                			contador = 1;
                			$('nav').animate({
                				left: '-100%'
                			});
                		}
                    
                	});
                
                };
            })();
        </script>
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

            var body = document.body, html = document.documentElement;
            document.getElementById('map').style.height = '100%';
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
                    },
                    overlayForm: false
                },
                methods: {
                    Contactar: function(){
                        this.overlayForm = true;
                        let _token = $('input[name="_token"]').val();
                        let data = this.contacto;
                        var vue = this;
                        emailjs.send("service_34fpk3p","template_o504zpe", data)
                        .then(function(response) {
                            if(response.text === 'OK'){
                                vue.overlayForm = false;
                                console.log(response);
                                vue.enviarToastRespuesta("success", "El correo se ha enviado de forma exitosa");
                            }
                           console.log("SUCCESS. status=%d, text=%s", response.status, response.text);
                        }, function(err) {
                            vue.enviarToastRespuesta("error", "Ocurri?? un problema al enviar el correo");
                           console.log("FAILED. error=", err);
                        });
                    },
                    enviarToastRespuesta: function(tipo, mensaje) {
                        this.$bvToast.toast(mensaje, {
                          title: 'Mensaje',
                          autoHideDelay: 3000,
                          variant: tipo,
                          solid: false,
                          toaster: 'b-toaster-bottom-right',
                          appendToast: true
                        })
                    },
                    enviarToastErrorAjax: function (mensaje){
                        this.enviarToastRespuesta('danger', mensaje);
                    }
                }
            })
        </script>
    </body>
</html>
