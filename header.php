<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>
		<?php
 			global $page, $paged; 
 			wp_title( '|', true, 'right' ); 
 			bloginfo( 'name' ); 
 			$site_description = get_bloginfo( 'description', 'display' ); 
 				if ( $site_description && ( is_home() || is_front_page() ) ) echo " | $site_description"; 
 				if ( $paged >= 2 || $page >= 2 ) echo ' | ' . sprintf( __( 'Page %s', 'nakeme' ), max( $paged, $page ) ); 
 		?>
 	</title>
 	<meta name="description" content="<?php bloginfo('description' ); ?>">

 	<link rel="apple-touch-icon" href="<?php bloginfo('template_url' ); ?>/library/img/apple-touch-icon.png">
 	<link rel="icon" type="image/png" href="<?php bloginfo('template_url' ); ?>/library/img/favicon.png">

 	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name') ?> - RSS" href="<?php bloginfo('rss2_url') ?>" />
    <link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name') ?> - Atom" href="<?php bloginfo('atom_url') ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<!-- css  indispensables -->
	
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/normalize.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/skeleton.css">
	<!--/ css indispensables -->

	<!-- css adicionales -->

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/owl-carousel.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/owl-theme.css">
	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/library/css/least.min.css">
	
	<!--/ css adicionales -->

	<link rel="stylesheet" href="<?php bloginfo('template_url' ); ?>/style.css">

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-69326393-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<?php wp_head(); ?>

</head>
<body>

	<!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-T8J5L6"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-T8J5L6');</script>
	<!-- End Google Tag Manager -->

