<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TemplateHosteleria
 */

get_header();
?>
	<main id="main" class="site-main">

        <!-- POST HEADER -->
        <?php if ( is_active_sidebar( 'sidebar-contenido_header' ) ) { ?>
                <?php dynamic_sidebar( 'sidebar-contenido_header' ); ?>
        <?php } ?>
        <!-- #POST HEADER -->

        <!-- Carta -->
        <section id="carta" class="carta">
            <div class="container">

                <!-- CATEGORIA -->
                <?php if ( is_active_sidebar( 'sidebar-contenido_carta' ) ) { ?>
                <div class="container-fluid">
                    <div class="section-title">
                        <h2>Consulta nuestra <span>Carta</span></h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="carta-flters">
                                <li data-filter="*" class="filter-active">Mostrar todo</li>
                                <!-- SIDEBAR -->
                                <?php dynamic_sidebar( 'sidebar-contenido_carta' ); ?>
                                <!-- #SIDEBAR  -->
                            </ul>
                        </div>
                    </div>
                </div>
                <?php } ?> 
                <!-- #CATEGORIA -->

				<!-- LISTADO -->
                <div class="row carta-container">

                    <?php if ( is_active_sidebar( 'sidebar-contenido_elem_carta' ) ) { ?>
                        <!-- SIDEBAR -->
                        <?php dynamic_sidebar( 'sidebar-contenido_elem_carta' ); ?>
                        <!-- #SIDEBAR  -->    
                    <?php } ?>
                </div>
                <!-- #LISTADO -->
            </div>
        </section>
        <!-- #Carta -->

        <!-- Specials -->
        <section id="specials" class="specials">
            <div class="container">
                <?php if ( is_active_sidebar( 'sidebar-contenido_tags_menu' )) { ?>
                    <div class="section-title">
                        <h2>Consulta nuestros <span>Menús</span></h2>
                    </div>

                    <div class="row">

                        <!-- SIDEBAR TAGS -->
                            <div class="col-lg-3">
                                <ul class="nav nav-tabs flex-column">
                                    <?php dynamic_sidebar( 'sidebar-contenido_tags_menu' ); ?>
                                </ul>
                            </div>
                        <!-- #SIDEBAR TAGS -->

                        <!-- SIDEBAR MENUS -->
                        <?php if ( is_active_sidebar( 'sidebar-contenido_menu' )) { ?>
                        <div class="col-lg-9 mt-4 mt-lg-0">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="'hidden'"></div>
                                <?php dynamic_sidebar( 'sidebar-contenido_menu' ); ?>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- #SIDEBAR MENUS -->
                        

                    </div>
                <?php } ?>
            </div>
        </section>
        <!-- #Specials -->

        <!-- Gallery -->
        <section id="gallery" class="gallery">

            <?php if ( is_active_sidebar( 'sidebar-contenido_galeria' ) ) { ?>
                <div class="container-fluid">
                    <div class="section-title">
                        <h2>Algunas fotos de <span><?php bloginfo( 'name' ); ?></span></h2>
                    </div>
                    <div class="row g-0">

                        <!-- SIDEBAR -->
                        <div class="widget_area">
                            <?php dynamic_sidebar( 'sidebar-contenido_galeria' ); ?>
                        </div>
                        <!-- #SIDEBAR  -->
                    </div>
                </div>
            <?php } ?> 
            <!-- END IF -->
            
        </section>
        <!-- #Gallery -->

        <!-- Contact Section -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2><span>Contáctanos</span></h2>
                </div>
            </div>

            <!-- UBICACION -->
            <?php if ( is_active_sidebar( 'sidebar-contenido_ubicacion' ) ) { ?>
                <?php dynamic_sidebar( 'sidebar-contenido_ubicacion' ); ?>
            <?php } ?>
            <!-- #UBICACION -->

            <!-- FORMULARIO -->
            <div class="container mt-5">

                <div class="info-wrap">
                    <div class="row">
                        <?php if ( is_active_sidebar( 'sidebar-contenido_informacion_contacto' ) ) { ?>
                            <?php dynamic_sidebar( 'sidebar-contenido_informacion_contacto' ); ?>
                        <?php } ?>
                    </div>
                </div>

                <div class="php-email-form">
                    <?php if ( is_active_sidebar( 'sidebar-contenido_post_informacion_contacto' ) ) { ?>
                        <?php dynamic_sidebar( 'sidebar-contenido_post_informacion_contacto' ); ?>
                    <?php } ?>
                </div>
                
            </div>
            <!-- FORMULARIO -->

        </section>
        <!-- #Contact -->


        <?php if ( is_active_sidebar( 'sidebar-contenido_footer' ) ) { ?>

        <div class="widget_area container">
            <?php dynamic_sidebar( 'sidebar-contenido_footer' ); ?>
        </div>
        <?php } ?>
    </main>
    <!-- #main -->
<?php
get_footer();
