<!-- /Section Contactenos-->
<section id="text-contact">
	<div class="container">
		<div class="four columns offset-by-two">
			<p><img width="44" src="<?php bloginfo('template_url' ); ?>/library/img/icon-map.png" alt="">&nbsp;&nbsp;<?php echo of_get_option('direccion'); ?></p>

			<p><img width="45" src="<?php bloginfo('template_url' ); ?>/library/img/icon-mail.png" alt="">&nbsp;&nbsp;<a href="mailto:<?php echo of_get_option('email'); ?>"><?php echo of_get_option('email'); ?></a></p>
		</div>
		<div class="five columns offset-by-one">
			<p><img width="26" src="<?php bloginfo('template_url' ); ?>/library/img/icon-movil.png" alt="">&nbsp;&nbsp;<?php echo of_get_option('telefono'); ?></p>
			<ul id="icon-social">
				<li><a target="_blank" href="<?php echo of_get_option('link_youtube'); ?>"><img width="122" src="<?php bloginfo('template_url' ); ?>/library/img/icon-youtube.png" alt="youtube"></a></li>

				<li><a target="_blank" href="<?php echo of_get_option('link_facebook'); ?>"><img width="122" src="<?php bloginfo('template_url' ); ?>/library/img/icon-facebook.png" alt="facebook"></a></li>

				<li><a target="_blank" href="<?php echo of_get_option('link_twitter'); ?>"><img width="122" src="<?php bloginfo('template_url' ); ?>/library/img/icon-twitter.png" alt="twitter"></a></li>
			</ul>
		</div>
	</div>
</section>

<footer>
	<p>&copy; ZONA PRODUCCIONES</p>
	<p>HECHO CON&nbsp;<img width="11" src="<?php bloginfo('template_url' ); ?>/library/img/corazon.png" alt="">&nbsp;POR <a target="_blank" href="http://suwwweb.com">SUWWWEB</a></p>
</footer>




<!-- script -->

<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/least.min.js"></script>

<!--/ script -->

<!-- Scripts Adiconales -->

<script>
	// Hay que recordar la importancia de comenzar
// a ejecutar javascript cuando termine de cargar
// la página para evitar inconscistencias.
$(document).ready(function() {
  var menu = $('#menu-header');
  var contenedor = $('#menu-contenedor');
  var menu_offset = menu.offset();
  // Cada vez que se haga scroll en la página
  // haremos un chequeo del estado del menú
  // y lo vamos a alternar entre 'fixed' y 'static'.
  $(window).on('scroll', function() {
    if($(window).scrollTop() > menu_offset.top) {
      menu.addClass('menu-fijo');
    } else {
      menu.removeClass('menu-fijo');
    }
  });
});
</script>

<!-- Efecto gallery -->
<script>
 $(document).ready(function(){
                $('.least-gallery').least();
            });
</script>
<!-- /Efecto gallery -->

<!-- Efectos scroll menu -->
<script>
	$(document).on("ready", main);

	function main(){
		$("#menu-header a").on("click", irA);
	}

	function irA(){
		var seccion = $(this).attr("href");
		$("body, html").animate({
			scrollTop: $(seccion).offset().top
		},800);

		return false;
	}
	</script>


<!-- Menu responsive -->

 <script>
        $(function() {
     
        var btn_movil = $('#nav-mobile'),
        menu = $('#menu').find('ul');
     
        // Al dar click agregar/quitar clases que permiten el despliegue del menú
        btn_movil.on('click', function (e) {
            e.preventDefault();
     
            var el = $(this);
     
            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        });
    });
  </script>

<!--/ Menu responsive -->

<script src="<?php bloginfo('template_url' ); ?>/library/js/owl-carousel.js"></script>

<script>
	$(document).ready(function() {
 
	  $("#owl-demo").owlCarousel({
	 
	      autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
	      items : 4,
	      itemsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3],
	      //navigation: true,
	      pagination: false,
	      navigationText: ["Anterior","Siguiente"]
	 
	  });

	  $("#owl-demo1").owlCarousel({
	 
	      autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
	      items : 4,
	      itemsDesktop : [1199,3],
	      itemsDesktopSmall : [979,3],
	      //navigation: true,
	      pagination: false,
	      navigationText: ["Anterior","Siguiente"]
	 
	  });
	 
	});

</script>


<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>