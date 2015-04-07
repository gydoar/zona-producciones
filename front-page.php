<?php
/**
 * Contact
 *
   Template Name:  Contact Page
 *
 * @file           template-contact.php
 * @package        StanleyWP 
 * @author         Brad Williams & Carlos Alvarez 
 * @copyright      2014 Gents Themes
 * @license        license.txt
 * @version        Release: 3.0.3
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */
   ?>

   <?php
   if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = 'Por favor ingrese su nombre.';
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if(trim($_POST['email']) === '')  {
        $emailError = 'Por favor ingrese su email.';
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = 'Dirreción de email invalida.';
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

     if(trim($_POST['telefono']) === '') {
        $telError = 'Por favor ingrese su teléfono.';
        $hasError = true;
    } else {
        $telefono = trim($_POST['telefono']);
    }

    if(trim($_POST['comments']) === '') {
        $commentError = 'Por favor ingresa un mensaje.';
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }

    if(!isset($hasError)) {
        $emailTo = get_option('tz_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = '[Contacto axemos] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléfino: $telefono \n\nComments: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }

} ?>

<?php get_header(); ?>

<!-- Header -->
<section id="sec-1">
	<div class="container">
		<a id="logo" class="three columns offset-by-one" href="#"><img width="218" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
	</div>

	<div class="container">
		<div id="copi" class="six columns offset-by-five">
			<p>"EN EL MUNDO DE <strong>LOS EVENTOS <br>NUESTRA <span>EXPERIENCIA </span></strong>ES <br>SU <strong>MEJOR GARANTIA"</strong></p>
		</div>
	</div>
	
	<div class="container">
		<ul id="menu-header" class="eight columns offset-by-two">
			<li><a href="#eventos">EVENTOS</a></li>
			<li><a href="#catering">CATERING</a></li>
			<li><a href="#btl">BTL / AGENCIA</a></li>
			<li><a href="#contactenos">CONTACTO</a></li>
		</ul>
	</div>
</section>
<!-- /Header -->

<!-- Secction 2 -->
<section id="sec-2" class="container">
	<div id="w350">
		<p>Nuestro objetivo es encargarnos de la realización total o parcial de cualquier tipo de<br> evento a nivel <strong>NACIONAL</strong></p>
		<a href=""><img width="50" src="<?php bloginfo('template_url' ); ?>/library/img/circle.png" alt=""></a>
	</div>
</section>
<!-- /Secction 2 -->
<!-- Section eventos -->
<section id="eventos">
	<div class="container">

		<div class="title" class="twelve columns">
			<h2>EVENTOS</h2>
		</div>
			
			<div id="galeria-1" class="right">
				<div class="four columns">
					<img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/eventos-1.png" alt="">
					<h3>Empresariales</h3>
					<p>- Olimpiadas y torneos internos.</p>
					<p>- Lanzamientos y Activaciones.</p>
					<p>- Actividades de Bienestar.</p>
					<p>- Fiestas de fin de año.</p>
					<br>
					<a class="bottom-serv" href="#">Servicio</a>
				</div>
			</div>

			<div id="galeria-1" class="center">
				<div class="four columns">
					<img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/eventos-2.png" alt="">
					<h3>Recreativos</h3>
					<p>- Vacaciones Recreativas.</p>
					<p>- Programas para adultos.</p>
					<p>- Programas para niños.</p>
					<p>- Show´s Temáticos.</p>
					<br>
					<a class="bottom-serv" href="#">Servicio</a>
				</div>
			</div>

			<div id="galeria-1" class="left">
				<div class="four columns">
					<img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/eventos-3.png" alt="">
					<h3>Montajes</h3>
					<p>- Amplificación de sonido: voz y audio</p>
					<p>- Alquiler de iluminación profesional.</p>
					<p>- Dj con consola de sonido</p>
					<p>- Ambientación temática </p>
					<br>
					<a class="bottom-serv" href="#">Servicio</a>
				</div>
			</div>
	</div>
</section>
<!-- /Section eventos -->
<!-- Section Catering -->
<section id="catering">
	<div class="container">
		<div class="title" class="twelve columns">
			<h2>CATERING</h2>
		</div>
	</div>
	

	<div class="container">
		<div class="four columns">
			<h3>Alimentos y bebidas</h3>
			<p>Hemos participado, de manera particular y profesional, en la satisfacción completa de nuestros clientes, ofreciéndoles todas las soluciones disponibles.</p>
			<a class="bottom-serv" href="#">Servicio</a>
		</div>

		<div class="eight columns">
			<img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/catering.png" alt="">
		</div>
	</div>
	<div class="container">
		<ul id="number">
			<li><img width="37" src="<?php bloginfo('template_url' ); ?>/library/img/uno.png" alt=""> Menaje y Mobiliario.</li>
			<li><img width="37" src="<?php bloginfo('template_url' ); ?>/library/img/dos.png" alt=""> Refrigerios.</li>
			<li><img width="37" src="<?php bloginfo('template_url' ); ?>/library/img/tres.png" alt=""> Desayunos.</li>
			<li><img width="37" src="<?php bloginfo('template_url' ); ?>/library/img/cuatro.png" alt=""> Almuerzos.</li>
			<li><img width="37" src="<?php bloginfo('template_url' ); ?>/library/img/cinco.png" alt=""> Cenas.</li>
		</ul>
	</div>
</section>
<!-- /Section Catering -->
<!-- Section BTL AGENCIA-->
<section id="btl">
	<div class="w400">
		<h2><span>BTL</span> / AGENCIA</h2>
		<p>Publicidad Interior y Exterior</p>
		<p>Producción Gráfica</p>
		<p>Diseño Gráfico</p>
		<p>Merchandising</p>
		<p>Fotografía</p>
		<br>
		<a class="bottom-port" href="#">Portafolio</a>
	</div>
</section>
<!-- /Section BTL AGENCIA-->
<!-- Section Portafolio-->
<section id="portafolio">
	<div class="container">
		<div class="title" class="twelve columns">
			<h2>PROYECTOS REALIZADOS</h2>
		</div>

	</div>
	
	<div class="">
		<div id="owl-demo">
          
		  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/01.jpg" alt="Owl Image"></div>
		  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/02.jpg" alt="Owl Image"></div>
		  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/03.jpg" alt="Owl Image"></div>
		  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/04.jpg" alt="Owl Image"></div>
		  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/05.jpg" alt="Owl Image"></div>
		  <div class="item"><img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/06.jpg" alt="Owl Image"></div>
		 
		</div>	

	</div>

	<div class="w400_2">
		<p>Saber escuchar las ideas de nuestros clientes y adaptarnos a
		sus necesidades y presupuestos son nuestro compromisos.</p>
	</div>
</section>
<!-- /Section Portafolio-->
<!-- Section Clientes-->
<section id="clientes">
	<div id="clientes_title">
		<h3>Nuestros clientes lo certifican:</h3>
	</div>
	<div class="container">
		<ul class="ten columns offset-by-one" id="logos">
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-sgf.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-redes.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-samsung.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-fiber.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-danone.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-policia.jpg" alt=""></a></li>
		</ul>
	</div>
	<div class="container">
		<ul class="ten columns offset-by-one" id="logos">
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-activos.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-siemens.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-flota.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-unify.jpg" alt=""></a></li>
			<li><a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-pfizer.jpg" alt=""></a></li>
		</ul>
	</div>
</section>
<!-- /Section Clientes-->
<!-- Section Contactenos-->
<section id="contactenos">
	<div class="container">
		<div id="caja-cont">
			<h2>CONTACTENOS</h2>
		</div>

		<div id="form">
			<?php if(isset($emailSent) && $emailSent == true) { ?>
             <div class="alert alert-success">
                <p>Gracias, su mensaje ha sido bien recibido.</p>
            </div>
            <?php } else { ?>

            <?php if(isset($hasError) || isset($captchaError)) { ?>
            <div class="alert alert-danger alert-dismissable">
                <a class="close" data-dismiss="alert">×</a>
                <h4 class="alert-heading">Disculpe, existen algunos errores.</h4>
                <p class="error">Por favor inténtalo de nuevo!<p>
            </div>
                <?php } ?>

                <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                    <fieldset>
                    	<div class="six columns">
                    		<div class="form-group">
								<label for="">Nombre
									<input class="form-control" type="text" name="contactName" id="contactName" value="" placeholder="" />
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($nameError)) { ?>
	                            <p><span class="error"><?=$nameError;?></span></p>
	                            <?php } ?>
	                             <br>

	                        </div>

	                        <div class="form-group">
								<label for="">Teléfono
									<input class="form-control" type="text" name="telefono" id="telefono" value="" placeholder="" />
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($telError)) { ?>
	                            <p><span class="error"><?=$telError;?></span></p>
	                            <?php } ?>

	                             <br>
	                        </div>

                    	</div>
                        <div class="six columns left">
                        	 <div class="form-group">
								<label for="">Correo
									<input class="form-control" type="text" name="email" id="email" value="" placeholder="" />
								</label>
	                            
	                            <span class="input-icon fui-check-inverted"></span>
	                            <?php if(isset($emailError)) { ?>
	                            <p><span class="error"><?=$emailError;?></span></p>
	                            <?php } ?>

	                             <br>
	                        </div>
                      
	                        <div class="form-group">
								<label for="">Mensaje
									<textarea class="form-control" name="comments" id="commentsText" rows="100" cols="10" placeholder=""></textarea>
								</label>
	                            
	                            <?php if(isset($commentError)) { ?>
	                            <p><span class="error"><?=$commentError;?></span></p>
	                            <?php } ?>
	                             <br>
	                        </div>
	                        <div class="form-actions">
	                            <button style="margin-left:150px;margin-top:30px;" type="submit" class="btn btn-success button-primary">Enviar</button>
	                        </div>
	                        <input type="hidden" name="submitted" id="submitted" value="true" />
                        </div>
                       
                        
                    </fieldset>
                </form>
                <?php } ?>
		</div>
	</div>
</section>
<!-- /Section Contactenos-->
<section id="text-contact">
	<div class="container">
		<div class="four columns offset-by-two">
			<p><img width="44" src="<?php bloginfo('template_url' ); ?>/library/img/icon-map.png" alt="">&nbsp;&nbsp;Cra. 73 No. 53A - 29 Bogotá </p>

			<p><img width="45" src="<?php bloginfo('template_url' ); ?>/library/img/icon-mail.png" alt="">&nbsp;&nbsp;<a href="mailto:info@zonaproducciones.com">info@zonaproducciones.com</a></p>
		</div>
		<div class="five columns offset-by-one">
			<p><img width="26" src="<?php bloginfo('template_url' ); ?>/library/img/icon-movil.png" alt="">&nbsp;&nbsp;312 5375665 - 540 0920</p>
			<ul id="icon-social">
				<li><a target="_blank" href="#"><img width="122" src="<?php bloginfo('template_url' ); ?>/library/img/icon-youtube.png" alt="youtube"></a></li>
				<li><a target="_blank" href="#"><img width="122" src="<?php bloginfo('template_url' ); ?>/library/img/icon-facebook.png" alt="facebook"></a></li>
				<li><a target="_blank" href="#"><img width="122" src="<?php bloginfo('template_url' ); ?>/library/img/icon-twitter.png" alt="twitter"></a></li>
			</ul>
		</div>
	</div>
</section>

<?php get_footer(); ?>