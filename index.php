<?php
/**
 * The main template file
 *
 * @package WordPress
 * @subpackage Mx3 Group
 * @since Mx3 Group 1.0
 */
include_once ABSPATH . 'wp-admin/includes/plugin.php';
get_header();
?>

<main id="site-content">
	<div id="cta-content" class="container-fluid vh-100 px-0 <?php echo prefix_theme_class("_index-inner-section")?>">
		<div class="<?php echo prefix_theme_class("_cta-background") ?>">
			<img src="<?php echo get_template_directory_uri() . "/assets/images/header.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("__cta-background-image") ?>" alt="Lorem ipsum dolor">
		</div>
		<div class="container <?php echo prefix_theme_class("_cta-section-wrapper") ?>">
			<div class="row <?php echo prefix_theme_class("_cta-section") ?>">
				<div class="col-lg-4 px-5 ps-lg-0 <?php echo prefix_theme_class("_cta-inner-section-wrapper") ?>">
					<h1 class="pb-lg-4 ps-lg-4 mb-lg-0 mb-5 text-lg-start text-center <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--white") ?>">
						EXPERTOS EN CONSTRUCCIÓN INDUSTRIAL
					</h1>
					<button class="btn contact-btn <?php echo prefix_theme_class("_button") . " " . prefix_theme_class("_button--gold") ?>">
						¡COTIZA TU PROYECTO!
					</button>
				</div>
			</div>
		</div>
	</div>

	<div id="servicios" class="container-fluid px-md-0 px-5 <?php echo prefix_theme_class("_index-inner-section")?>">
		<div class="<?php echo prefix_theme_class("_service-section-background") ?>"></div>
		<div class="container px-0 <?php echo prefix_theme_class("_service-section-wrapper")?>">
			<div class="row align-items-center gx-5 <?php echo prefix_theme_class("_service-section")?>">
				<div class="col-lg-3 <?php echo prefix_theme_class("_service-inner-section")?>">
					<h2 class="text-lg-start text-center mb-lg-0 mb-5 <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--sm") . " " . prefix_theme_class("_title--green") . " " . prefix_theme_class("_title--ls1") ?>">
						Servicios de Construccion de MX3
					</h2>
				</div>
				<div class="col-lg-9 pt-3 px-5 <?php echo prefix_theme_class("_service-inner-section")?>">
					<div class="swiper <?php echo prefix_theme_class("_service-slider") ?>">
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_service-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/services-1.png" ?>" loading="lazy" class="img-fluid mt-lg-3 <?php echo prefix_theme_class("_service-card-image") ?>" alt="Lorem ipsum dolor">
								<p class="text-center mt-3 lead <?php echo prefix_theme_class("_service-card-description") ?>">NAVES INDUSTRIALES</p>
							</div>
							<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_service-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/services-2.png" ?>" loading="lazy" class="img-fluid mt-lg-3 <?php echo prefix_theme_class("_service-card-image") ?>" alt="Lorem ipsum dolor">
								<p class="text-center mt-3 lead <?php echo prefix_theme_class("_service-card-description") ?>">EDIFICACIÓN VERTICAL Y HORIZONTAL</p>
							</div>
							<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_service-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/services-3.png" ?>" loading="lazy" class="img-fluid mt-lg-3 <?php echo prefix_theme_class("_service-card-image") ?>" alt="Lorem ipsum dolor">
								<p class="text-center mt-3 lead <?php echo prefix_theme_class("_service-card-description") ?>">TERRACERÍAS</p>
							</div>
						</div>
					</div>
					<div class="swiper-button-prev <?php echo prefix_theme_class("_service-button-prev") ?>"></div>
					<div class="swiper-button-next <?php echo prefix_theme_class("_service-button-next") ?>"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="certifications-content" class="container-fluid px-0 py-5 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container px-5 <?php echo prefix_theme_class("_certification-section-wrapper")?>">
			<div class="d-lg-none d-block <?php echo prefix_theme_class("_certification-image") ?>">
				<img src="<?php echo get_template_directory_uri() . "/assets/images/certification.png" ?>" loading="lazy" class="img-fluid" alt="Lorem ipsum dolor">
			</div>
			<div class="row gx-5 align-items-center <?php echo prefix_theme_class("_certification-section")?>">
				<div class="col-lg-8 <?php echo prefix_theme_class("_certification-inner-section")?>">
					<h3 class="text-lg-start text-center mb-3 <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--white") . " " . prefix_theme_class("_title--certification") ?>">
						Certificados en leed green
					</h3>

					<p class="text-lg-start text-center mb-lg-0 <?php echo prefix_theme_class("_certification-subtitle") ?>">
						QUE REDUCEN EL IMPACTO AMBIENTAL Y EFICIENTIZAN EL CONSUMO ENERGÉTICO.
					</p>
				</div>
				<div class="col-lg-3 offset-lg-1 <?php echo prefix_theme_class("_certification-inner-section")?>"> 
					<div class="text-center <?php echo prefix_theme_class("_certification-image") ?>">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/certification.png" ?>" loading="lazy" class="img-fluid p-3 pt-0" alt="Lorem ipsum dolor">
					</div>
					<button class="btn contact-btn <?php echo prefix_theme_class("_button") . " " . prefix_theme_class("_button--border") . " " . prefix_theme_class("_button--border-gold")?>">
						¡COTIZA AQUÍ!
					</button>
				</div>
			</div>
		</div>
	</div>

	<div id="por-que" class="container-fluid px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container <?php echo prefix_theme_class("_why-us-section-wrapper") ?>">
			<div class="<?php echo prefix_theme_class("_why-us-section") ?>">
				<h3 class="text-center mb-5 <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--green") ?>">
					¿POR QUÉ ELEGIR <span>A MX3 GROUP?</span>
				</h3>

				<div class="row gx-5 gy-3 <?php echo prefix_theme_class("_why-us-grid")?>">
					<div class="col-lg-4 col-md-6 py-3 px-5 <?php echo prefix_theme_class("_why-us-card")?>">
						<div class="mb-3 <?php echo prefix_theme_class("_why-us-icon") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/experiencia.svg" ?>" class="img-fluid" >
						</div>
						<p class="text-center <?php echo prefix_theme_class("_why-us-card-description") ?>"><b>Más de 15 años de experiencia</b> realizando proyectos a la medida.</p>
					</div>
					<div class="col-lg-4 col-md-6 py-3 px-5 <?php echo prefix_theme_class("_why-us-card")?>">
						<div class="mb-3 <?php echo prefix_theme_class("_why-us-icon") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/certificados.svg" ?>" class="img-fluid" >
						</div>
						<p class="text-center <?php echo prefix_theme_class("_why-us-card-description") ?>"><b>Certificados en LEED Green,</b> que reducen el impacto ambiental y eficientizan el consumo energético.</p>
					</div>
					<div class="col-lg-4 col-md-6 py-3 px-5 <?php echo prefix_theme_class("_why-us-card")?>">
						<div class="mb-3 <?php echo prefix_theme_class("_why-us-icon") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/garantia.svg" ?>" class="img-fluid" >
						</div>
						<p class="text-center <?php echo prefix_theme_class("_why-us-card-description") ?>"><b>1 año de garantía</b> en todos los proyectos.</p>
					</div>
					<div class="col-lg-4 col-md-6 py-3 px-5 <?php echo prefix_theme_class("_why-us-card")?>">
						<div class="mb-3 <?php echo prefix_theme_class("_why-us-icon") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/personal.svg" ?>" class="img-fluid" >
						</div>
						<p class="text-center <?php echo prefix_theme_class("_why-us-card-description") ?>"><b>Personal está altamente capacitado</b> para cumplir los estándares de calidad que el mercado requiere.</p>
					</div>
					<div class="col-lg-4 col-md-6 py-3 px-5 <?php echo prefix_theme_class("_why-us-card")?>">
						<div class="mb-3 <?php echo prefix_theme_class("_why-us-icon") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/proyectos.svg" ?>" class="img-fluid" >
						</div>
						<p class="text-center <?php echo prefix_theme_class("_why-us-card-description") ?>">Proyectos en toda la <b>República Mexicana.</b></p>
					</div>
					<div class="col-lg-4 col-md-6 py-3 px-5 <?php echo prefix_theme_class("_why-us-card")?>">
						<div class="mb-3 <?php echo prefix_theme_class("_why-us-icon") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/tecnologias.svg" ?>" class="img-fluid" >
						</div>
						<p class="text-center <?php echo prefix_theme_class("_why-us-card-description") ?>"><b>Nuevas tecnologías</b> e innovación para crear proyectos sustentable, rentables y económicos para nuestros clientes.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="quote-content" class="container-fluid px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="<?php echo prefix_theme_class("_quote-background")?>">
			<img src="<?php echo get_template_directory_uri() . "/assets/images/quote.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_quote-image") ?>" alt="Lorem ipsum dolor">
			<div class="<?php echo prefix_theme_class("_quote-color")?>"></div>
		</div>
		<div class="container px-lg-5 <?php echo prefix_theme_class("_quote-section-wrapper")?>">
			<div class="<?php echo prefix_theme_class("_quote-section")?>">
				<h3 class="text-center <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--white") . " " . prefix_theme_class("_title--quote") ?>">
					EL Personal está altamente capacitado para cumplir los estándares de calidad que el mercado requiere.
				</h3>
				<p class="text-center <?php echo prefix_theme_class("_quote-subtitle") ?>">
					-Cliente satisfecho-
				</p>
			</div>
		</div>
	</div>

	<div id="proyectos" class="container-fluid py-5 px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container px-0 <?php echo prefix_theme_class("_work-section-wrapper") ?>">
			<div class="px-5 <?php echo prefix_theme_class("_work-section") ?>">
				<h3 class="text-center mb-5 <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--green") ?>">
					DESARROLLOS <span>DE MX3</span>
				</h3>
				<div class="swiper container p-0 <?php echo prefix_theme_class("_work-slider") ?>">
					<div class="swiper-wrapper">
						<!-- Slides -->
						<div class="swiper-slide <?php echo prefix_theme_class("_work-card")?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/work-1.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_work-card-image") ?>" alt="Lorem ipsum dolor">
							<p class="text-center pt-4 lead <?php echo prefix_theme_class("_work-card-description") ?>">COMPLEJOS TURÍSTICOS</p>
						</div>
						<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_work-card")?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/work-1.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_work-card-image") ?>" alt="Lorem ipsum dolor">
							<p class="text-center pt-4 lead <?php echo prefix_theme_class("_work-card-description") ?>">COMPLEJOS TURÍSTICOS</p>
						</div>
						<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_work-card")?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/work-1.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_work-card-image") ?>" alt="Lorem ipsum dolor">
							<p class="text-center pt-4 lead <?php echo prefix_theme_class("_work-card-description") ?>">COMPLEJOS TURÍSTICOS</p>
						</div>
					</div>

					<div class="swiper-pagination <?php echo prefix_theme_class("_work-pagination") ?>"></div>
				</div>
				<div class="swiper-button-prev <?php echo prefix_theme_class("_work-button-prev") ?>"></div>
				<div class="swiper-button-next <?php echo prefix_theme_class("_work-button-next") ?>"></div>
			</div>
		</div>
	</div>

	<div class="container-fluid py-5 px-0 mb-5 <?php echo prefix_theme_class("_index-inner-section")?>">
		<div class="container-fluid p-0 <?php echo prefix_theme_class("_maintenance-section-background") ?>">
			<div class="col-6 bg--green <?php echo prefix_theme_class("_maintenance-inner-background") ?>"></div>
			<div class="col-6 <?php echo prefix_theme_class("_maintenance-inner-background") ?>"></div>
		</div>
		<div class="container <?php echo prefix_theme_class("_maintenance-section-wrapper") ?>">
			<div class="px-lg-0 px-5 <?php echo prefix_theme_class("_maintenance-section") ?>">
				<div class="row align-items-center mb-5 <?php echo prefix_theme_class("_maintenance-title-wrapper")?>">
					<div class="col-lg-5 col-md-6 <?php echo prefix_theme_class("_maintenance-title-section")?>">
						<h3 class="mb-lg-0 mb-3 <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--sm") . " " . prefix_theme_class("_title--white") . " " . prefix_theme_class("_title--sm-green")?>">
							Servicios de mantenimiento
							<span>Industrial de MX3</span>
						</h3>
					</div>
					<div class="col-lg-2 offset-lg-5 col-md-4 offset-md-2 <?php echo prefix_theme_class("_maintenance-title-section") ?>">
						<button class="btn contact-btn <?php echo prefix_theme_class("_button") . " " . prefix_theme_class("_button--border") . " " . prefix_theme_class("_button--border-green")?>">
							¡COTIZA AQUÍ!
						</button>
					</div>
				</div>
				<div class="px-5 <?php echo prefix_theme_class("_maintenance-slider-wrapper") ?>">
					<div class="swiper pe-lg-3 <?php echo prefix_theme_class("_maintenance-slider") ?>">
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide container p-0 mb-3 <?php echo prefix_theme_class("_maintenance-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/maintenance-1.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_maintenance-card-image") ?>" alt="Lorem ipsum dolor">
								<p class="text-center mt-3 lead <?php echo prefix_theme_class("_maintenance-card-description") ?>">ESTACIONAMIENTOS</p>
							</div>
							<div class="swiper-slide container p-0 mb-3 <?php echo prefix_theme_class("_maintenance-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/maintenance-2.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_maintenance-card-image") ?>" alt="Lorem ipsum dolor">
								<p class="text-center mt-3 lead <?php echo prefix_theme_class("_maintenance-card-description") ?>">IMPERMEABILIZACIONES</p>
							</div>
							<div class="swiper-slide container p-0 mb-3 <?php echo prefix_theme_class("_maintenance-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/maintenance-3.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_maintenance-card-image") ?>" alt="Lorem ipsum dolor">
								<p class="text-center mt-3 lead <?php echo prefix_theme_class("_maintenance-card-description") ?>">MUROS</p>
							</div>
						</div>
					</div>
					<div class="swiper-button-prev <?php echo prefix_theme_class("_maintenance-button-prev") ?>"></div>
					<div class="swiper-button-next <?php echo prefix_theme_class("_maintenance-button-next") ?>"></div>
				</div>
			</div>
		</div>
	</div>

	<div id="clientes" class="container-fluid px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container <?php echo prefix_theme_class("_portfolio-section-wrapper") ?>">
			<div class="row align-items-center <?php echo prefix_theme_class("_portfolio-section")?> ">
				<div class="col-lg-3 <?php echo prefix_theme_class("_portfolio-inner-section")?>">
					<h3 class="text-lg-start text-center mb-lg-0 mb-5 <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--green")?>">
						PROYECTOS <span>REALIZADOS</span>
					</h3>
				</div>
				
				<div class="col-lg-8 offset-lg-1 <?php echo prefix_theme_class("_portfolio-inner-section")?>">
					<div class="swiper <?php echo prefix_theme_class("_portfolio-slider") ?>">
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide">
								<div class="container pb-2 mb-3 <?php echo prefix_theme_class("_portfolio-card")?>">
									<p class="lead text-lg-start text-center"><b>Instalación hidrosanitaria y PCI</b> en torre de departamentos zona comercial PROY. Altozano el nuevo hermosillo.</p>
								</div>
								<div class="container pb-2 mb-3 <?php echo prefix_theme_class("_portfolio-card")?>">
									<p class="lead text-lg-start text-center"><b>Instalación hidrosanitaria y PCI</b> en torre de departamentos zona comercial PROY. Altozano el nuevo hermosillo.</p>
								</div>
								<div class="container pb-2 mb-3 <?php echo prefix_theme_class("_portfolio-card")?>">
									<p class="lead text-lg-start text-center"><b>Instalación de gas en torre</b> en torre de departamentos zona comercial PROY. Altozano el nuevo hermosillo.</p>
								</div>
								<div class="container pb-2 mb-3 <?php echo prefix_theme_class("_portfolio-card")?>">
									<p class="lead text-lg-start text-center"><b>Instalación hidrosanitaria y PCI</b> en torre de departamentos zona comercial PROY. Altozano el nuevo hermosillo.</p>
								</div>
								<div class="container pb-2 mb-3 <?php echo prefix_theme_class("_portfolio-card")?>">
									<p class="lead text-lg-start text-center"><b>Instalación hidrosanitaria y PCI</b> en torre de departamentos zona comercial PROY. Altozano el nuevo hermosillo.</p>
								</div>
								<div class="container pb-2 mb-3 <?php echo prefix_theme_class("_portfolio-card")?>">
									<p class="lead text-lg-start text-center"><b>Instalación de gas en torre</b> en torre de departamentos zona comercial PROY. Altozano el nuevo hermosillo.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="<?php echo prefix_theme_class("_portfolio-navigation") ?>">
						<div class="swiper-button-prev mx-2 <?php echo prefix_theme_class("_portfolio-button-prev") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/prev-arrow.svg" ?>" class="img-fluid" >
						</div>
						<div class="swiper-button-next mx-2 <?php echo prefix_theme_class("_portfolio-button-next") ?>">
							<img src="<?php echo get_template_directory_uri() . "/assets/images/svg/next-arrow.svg" ?>" class="img-fluid" >
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="slideshow-content" class="container-fluid pb-5 px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container <?php echo prefix_theme_class("_slideshow-section-wrapper") ?>">
			<div class="<?php echo prefix_theme_class("_slideshow-section")?> ">
				<div class="<?php echo prefix_theme_class("_slideshow-inner-section") ?>">
					<div class="swiper <?php echo prefix_theme_class("_slideshow-slider") ?>">
						<div class="swiper-wrapper">
							<!-- Slides -->
							<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_slideshow-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/portfolio-1.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_slideshow-card-image") ?>" alt="Lorem ipsum dolor">
							</div>
							<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_slideshow-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/portfolio-1.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_slideshow-card-image") ?>" alt="Lorem ipsum dolor">
							</div>
							<div class="swiper-slide container p-0 <?php echo prefix_theme_class("_slideshow-card") ?>">
								<img src="<?php echo get_template_directory_uri() . "/assets/images/portfolio-1.png" ?>" loading="lazy" class="img-fluid <?php echo prefix_theme_class("_slideshow-card-image") ?>" alt="Lorem ipsum dolor">
							</div>
						</div>
					</div>
					<div class="swiper-pagination <?php echo prefix_theme_class("_slideshow-pagination") ?>"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container <?php echo prefix_theme_class("_clients-section-wrapper") ?>">
			<div class="<?php echo prefix_theme_class("_clients-section") ?> ">
				<h3 class="text-center mb-5 <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--gold") ?>">
					Clientes satisfechos
				</h3>
				
				<div class="row <?php echo prefix_theme_class("_clients-grid")?>">
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/pemex.png" ?>" loading="lazy" class="img-fluid" alt="Pemex Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/sct.png" ?>" loading="lazy" class="img-fluid" alt="Secretaria de comunicaciones y transportes Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/kia.png" ?>" loading="lazy" class="img-fluid" alt="Kia Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/imss.png" ?>" loading="lazy" class="img-fluid" alt="Imss Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/conagua.png" ?>" loading="lazy" class="img-fluid" alt="Conagua Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/altozano.png" ?>" loading="lazy" class="img-fluid" alt="Altozano Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/pcm.png" ?>" loading="lazy" class="img-fluid" alt="Altozano Logo">
					</div>
				</div>
				<div class="row <?php echo prefix_theme_class("_clients-grid")?>">
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/farmacias-ahorro.png" ?>" loading="lazy" class="img-fluid" alt="Farmacias del ahorro Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/uanl.png" ?>" loading="lazy" class="img-fluid" alt="Uanl Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/starbucks.png" ?>" loading="lazy" class="img-fluid" alt="Starbucks Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/javer.png" ?>" loading="lazy" class="img-fluid" alt="Javer Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/tec-monterrey.png" ?>" loading="lazy" class="img-fluid" alt="Tecnologico de Monterrey Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/bombardier.png" ?>" loading="lazy" class="img-fluid" alt="Bombardier Logo">
					</div>
					<div class="col">
						<img src="<?php echo get_template_directory_uri() . "/assets/images/clients/issste.png" ?>" loading="lazy" class="img-fluid" alt="Issste Logo">
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="close-content" class="container-fluid py-5 px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container <?php echo prefix_theme_class("_close-section-wrapper") ?>">
			<div class="<?php echo prefix_theme_class("_close-section") ?> ">
				<h3 class="text-center <?php echo prefix_theme_class("_title") . " " . prefix_theme_class("_title--white") . " " . prefix_theme_class("_title--bg") ?>">
					¡TU ÉXITO ES NUESTRO ÉXITO!
				</h3>
			</div>
		</div>
	</div>

	<div id="contacto" class="container-fluid px-0 <?php echo prefix_theme_class("_index-inner-section") ?>">
		<div class="container <?php echo prefix_theme_class("_contact-section-wrapper") ?>">
			<div class="<?php echo prefix_theme_class("_contact-section")?> ">
				<?php
					if(is_plugin_active('wpforms-lite/wpforms.php')){
						echo do_shortcode( '[wpforms id="16"]' );
					}
				?>
			</div>
		</div>
	</div>
</main><!-- #site-content -->

<?php
get_footer();
?>
