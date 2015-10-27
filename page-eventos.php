<?php get_header("home"); ?>
	<section id="sub-header" class="center">
		<div class="container">
			<div class="title1" class="twelve columns">
				<h2>EVENTOS EMPRESARIALES</h2>
			</div>
			<br>
            <p>Somos expertos en la creación de eventos personalizados, innovadores, inspirados en  la imagen corporativa y objetivos comerciales de nuestros clientes. Contamos con un equipo especializado en logística, tecnología, mercadeo y publicidad estratégica para hacer de sus eventos corporativos una experiencia de marca única, a la altura de las expectativas de sus clientes, socios de negocio y empleados.</p>
        
        <ul id="list__sub">
            <li> &nbsp;Olimpiadas y torneos internos</li>
            <li><img src="<?php bloginfo("template_url" ); ?>/library/img/line-icon.png" alt=""> &nbsp;Lanzamientos y Activaciones</li>
            <li><img src="<?php bloginfo("template_url"); ?>/library/img/line-icon.png" alt=""> &nbsp;Actividades de Bienestar</li>
            <li><img src="<?php bloginfo("template_url"); ?>/library/img/line-icon.png" alt=""> &nbsp;Fiestas de fin de año</li>
        </ul>
		<?php echo of_get_option('empre_desc'); ?>
        </div>
		<div class="container" id="caja-gray"></div>
	</section>


		 <!-- Least Gallery -->
        <section id="least">
            
            <!-- Least Gallery: Fullscreen Preview -->
            <div class="least-preview"></div>
            
            <!-- Least Gallery: Thumbnails -->
            <ul class="least-gallery container">
                <!-- 1 || Element with data-caption ||-->
                <li>
                    <a href="<?php echo of_get_option('empre_1'); ?>" title="1" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_1'); ?>" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 2 || Element with data-caption as href-attribute ||-->
                <li>
                    <a href="<?php echo of_get_option('empre_2'); ?>" title="2" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_2'); ?>" alt="Alt Image Text" />
                    </a>
                </li>
                
                <!-- 3 -->
                <li>
                    <a href="<?php echo of_get_option('empre_3'); ?>" title="3" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_3'); ?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 4 -->
                <li>
                    <a href="<?php echo of_get_option('empre_4'); ?>" title="4" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_4'); ?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 5 -->
                <li>
                    <a href="<?php echo of_get_option('empre_5'); ?>" title="5" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_5'); ?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 6 -->
                <li>
                    <a href="<?php echo of_get_option('empre_6'); ?>" title="6" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_6'); ?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 7 -->
                <li>
                    <a href="<?php echo of_get_option('empre_7'); ?>" title="7" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_7'); ?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 8 -->
                <li>
                    <a href="<?php echo of_get_option('empre_8'); ?>" title="8" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_8'); ?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 9 -->
                <li>
                    <a href="<?php echo of_get_option('empre_9'); ?>" title="9" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_9'); ?>" alt="Alt Image Text" />
                    </a>
                </li>

                <!-- 10 -->
                <li>
                    <a href="<?php echo of_get_option('empre_10'); ?>" title="10" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_10'); ?>" alt="Alt Image Text" />
                    </a>
                </li>
                <!-- 11 -->
                <li>
                    <a href="<?php echo of_get_option('empre_11'); ?>" title="11" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_11'); ?>" alt="Alt Image Text" />
                    </a>
                </li>
                <!-- 12 -->
                <li>
                    <a href="<?php echo of_get_option('empre_12'); ?>" title="12" data-subtitle="Ver imagen">
                        <img src="<?php echo of_get_option('empre_12'); ?>" alt="Alt Image Text" />
                    </a>
                </li>
            </ul>

        </section>
        <!-- Least Gallery end -->

<?php get_footer(); ?>