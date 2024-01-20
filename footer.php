<?php
/**
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TemplateHosteleria
 */

?>
	<!-- Footer -->
    <footer id="footer" class="site-footer">
        <div class="container">
            <h3><?php bloginfo( 'name' ); ?></h3>
            <div class="sidebar-footer social-links">

                <?php if ( is_active_sidebar( 'sidebar-footer' ) ) { ?>
                    <div class="widget_area container">
                        <?php dynamic_sidebar( 'sidebar-footer' ); ?>
                    </div>
                <?php } ?>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><a href="https://github.com/DaniM0reno"><span>DaniM0reno</span></a></strong>. Todos los derechos reservados
				<br><?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'templatehosteleria' ), 'templatehosteleria', '<a href="https://github.com/DaniM0reno">Danim0reno</a>' ); ?>
			</div>
        </div>
    </footer>
    <!-- #Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php if ( is_active_sidebar( 'sidebar-scripts' ) ) {  dynamic_sidebar( 'sidebar-scripts' );}?>
<?php wp_footer(); ?>
</body>
</html>
