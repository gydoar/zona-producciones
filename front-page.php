
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
            $emailTo = 'info@zonaproducciones.com';
        }
        $subject = '[Contacto Zona producciones] From '.$name;
        $body = "Nombre: $name \n\nEmail: $email \n\nTeléf0no: $telefono \n\nMensaje: $comments";
        $headers = 'From: '.$name.' <'.$emailTo.'>' . "\r\n" . 'Reply-To: ' . $email;

        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
        
        echo "<a name='contactenos'></a>";
        include "codigo-conversion.php";
    }

} 
	
?>


<?php get_header(); ?>

<!-- Header -->
<section id="sec-1">
	<div class="container">
		<a id="logo" class="three columns offset-by-one" href="<?php echo home_url('/' ); ?>"><img width="218" src="<?php bloginfo('template_url' ); ?>/library/img/logo.png" alt=""></a>
	</div>

	<div class="container">
		<div id="copi" class="six columns offset-by-five">
			<p><?php echo of_get_option('text_banner'); ?></p>
		</div>
	</div>
	
	<div id="menu-contenedor" class="container">
		<ul id="menu-header">
			<li><a href="#eventos">EVENTOS</a></li>
			<li><a href="#catering">CATERING</a></li>
			<li><a href="#btl">BTL / AGENCIA</a></li>
			<li><a href="#portafolio">PROYECTOS</a></li>
			<li><a href="#contactenos">CONTACTO</a></li>
		</ul>
	</div>
</section>
<!-- /Header -->

<!-- Secction 2 -->
<section id="sec-2" class="container">
	<div id="w350">
		<p><?php echo of_get_option('text_desc'); ?></p>
		<a href="#eventos"><img width="50" src="<?php bloginfo('template_url' ); ?>/library/img/circle.png" alt=""></a>
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
					<a class="bottom-serv" href="<?php echo home_url('/eventos') ?>">Ver más</a>
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
					<a class="bottom-serv" href="<?php echo home_url('/eventos-sociales-y-recreativos') ?>">Ver más</a>
				</div>
			</div>

			<div id="galeria-1" class="left">
				<div class="four columns">
					<img class="twelve columns" src="<?php bloginfo('template_url' ); ?>/library/img/eventos-3.png" alt="">
					<h3>Sonido e Iluminación</h3>
					<p>- Amplificación de sonido: voz y audio.</p>
					<p>- Alquiler de iluminación profesional.</p>
					<p>- Dj con consola de sonido.</p>
					<p>- Ambientación temática.</p>
					<br>
					<a class="bottom-serv" href="<?php echo home_url('/alquiler-de-equipos') ?>">Ver más</a>
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
			<p>Nuestro servicio empresarial ofrece las mejores alternativas en <strong>gastronomía y bebidas.</strong> Contamos con una brigada de servicio compuesta por capitanes de servicios, barman (show de Barman), baristas especializados y meseros con experiencia certificada en el manejo de alimentos, junto a un despliegue completo de servicios asociados a la medida de sus necesidades.</p>
			<a class="bottom-serv" href="<?php echo home_url('/catering') ?>">Ver más</a>
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
		<a class="bottom-port" href="<?php echo home_url('/btl-agencia') ?>">Portafolio</a>
	</div>
</section>
<!-- /Section BTL AGENCIA-->
<!-- Section Portafolio-->
<section id="portafolio">
	<div class="container">
		<div class="title1" class="twelve columns">
			<h2>PROYECTOS REALIZADOS</h2>
		</div>

	</div>
	
	<div class="row">
	
		 <!-- Least Gallery -->
        <section id="least">
            
            <!-- Least Gallery: Fullscreen Preview -->
            <div class="least-preview"></div>
            
            <!-- Least Gallery: Thumbnails -->
            <ul class="least-gallery">
                <!-- 1 || Element with data-caption ||-->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/01-big.png" title="1" data-subtitle="Ver imagen" data-caption="<strong>Bold text</strong> normal caption text">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/01.png" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 2 || Element with data-caption as href-attribute ||-->-->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/02-big.png" title="2" data-subtitle="Ver imagen" data-caption="Now it's possibe to add an URL-Link into caption text - <a href='http://www.google.com' target='_blank'>GOOGLE</a>">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/02.png" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 3 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/03-big.png" title="3" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/03.png" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 4 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/04-big.png" title="4" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/04.png" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 5 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/05-big.png" title="5" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/05.png" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 6 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/06-big.png" title="6" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/06.png" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 7 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/07-big.png" title="7" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/07.png" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 8 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/08-big.png" title="8" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/08.png" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 9 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/09-big.png" title="9" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/09.png" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 10 -->
                <li>
                    <a href="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/10-big.png" title="10" data-subtitle="Ver imagen">
                        <img src="<?php bloginfo('template_url' ); ?>/library/img/portafolio/inicio/10.png" alt="Alt Image Text" />
                    </a>
                </li>
            </ul>

        </section>
        <!-- Least Gallery end -->
	</div>

	<div class="container center btg">
		<a class="bottom-serv" href="<?php echo home_url('/proyectos') ?>">Galeria</a>
	</div>

</section>
<!-- /Section Portafolio-->
<!-- Section Clientes-->
<section id="clientes">
	<div id="clientes_title">
		<h3>Nuestros clientes lo certifican:</h3>
	</div>
	<div class="w400_2">
		<p>Nuestro compromiso es saber escuchar a nuestros clientes y adaptarnos a sus necesidades y presupuestos.</p>
		<p>Durante 13 años de trayectoria, se ha cumplido con más de 650 eventos exitosos, que demuestran el compromiso con nuestros importantes clientes. Participamos en actividades como desayunos de trabajo para 5 a 10 personas, hasta eventos masivos en los cuales es requerido un acompañamiento profesional.</p>
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
	<div class="container">
		<p>OPERACIÓN NACIONAL: Bucaramanga - Cali - Medellín - Pereira - Cartagena - Colombia</p>
	</div>
</section>
<!-- /Section Clientes-->
<!-- Section Contactenos-->
<section id="contactenos">
	<div class="container">
		<div id="caja-cont">
			<h2>CONTÁCTENOS</h2>
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

<?php get_footer(); ?>