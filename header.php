<?php
/**
 *	Cabecera de la pagina
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TemplateHosteleria
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top d-flex align-items-center header-transparent">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<div class="logo me-auto">
				<!-- <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1> -->
				<!-- Uncomment below if you prefer to use an image logo -->
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url( wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' )[0] ); ?>" alt="" class="img-fluid">
				</a>
			</div>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a class="nav-link scrollto active" href="#head">Inicio</a></li>
					<li><a class="nav-link scrollto" href="#carta">Carta</a></li>
					<li><a class="nav-link scrollto" href="#specials">Menús</a></li>
					<li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
					<li><a class="nav-link scrollto" href="#contact">Contacto</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
			<!-- .navbar -->

		</div>
	</header>
	<!-- End Header -->

	<!-- Head Section -->
    <section id="head">
        <div class="head-container">
            <div id="headCarousel" class="carousel slide carousel-fade">

                <div class="carousel-inner" role="listbox">
                    <!-- Slide -->
					
                    <div class="carousel-item active" 
						style="background-image: url(<?php echo get_header_image(); ?>);">
                        
						<div class="carousel-container">
                            <div class="carousel-content">
                                <h2 class="animate__animated animate__fadeInDown"><span><?php bloginfo( 'name' ); ?></span></h2>
                                <p class="animate__animated animate__fadeInUp"><?php echo get_bloginfo( 'description', 'display' ); ?></p>
                                <div>
                                    <a href="#carta" class="btn-carta animate__animated animate__fadeInUp scrollto">Nuestra Carta</a>
                                    <a href="#specials" class="btn-book animate__animated animate__fadeInUp scrollto">Menús</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- #End head -->