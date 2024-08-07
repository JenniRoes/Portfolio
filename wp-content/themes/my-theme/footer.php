<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->

	</div><!-- #content -->
<?php 
	astra_content_after();
	
	astra_footer_before();
	
	?>
	<div class="custom-footer-content">
		<div class="footer-links">
			<a href="http://localhost/portfolio/politica-privacidad">Políticas</a>
			<a href="http://localhost/portfolio/">Blog</a>
			<a href="/cotizaciones">Cotizaciones</a>
			<a href="mailto:jennifer.rodriguezestrada@outlook.com">Correo Electrónico</a>
		</div>
		<div class="footer-copyright">
			<p>&copy; <?php echo date("Y"); ?> ESRO. Todos los derechos reservados.</p>
		</div>
	</div>
<?php
		
	astra_footer_after(); 

?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
